<?php

namespace Mpp\ApicilClientBundle\Client;

use Exception;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\RequestOptions;
use Mpp\ApicilClientBundle\Model\ApicilApiError;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AbstractApicilClientDomain implements ApicilClientDomainInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var ClientInterface
     */
    protected $signHttpClient;

    public function __construct(LoggerInterface $logger, SerializerInterface $serializer, ClientInterface $httpClient, ClientInterface $signHttpClient)
    {
        $this->logger = $logger;
        $this->serializer = $serializer;
        $this->httpClient = $httpClient;
        $this->signHttpClient = $signHttpClient;
    }

    /**
     * Retrieve logger.
     *
     * @method getLogger
     *
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * Retrieve http client.
     *
     * @method getHttpClient
     *
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * Make a guzzle request.
     *
     * @method request
     *
     * @param string $method
     * @param string $path
     * @param array $options
     * @param bool $isSign
     *
     * @return GuzzleResponse
     *
     * @throws ApicilApiError
     * @throws Exception|GuzzleException
     */
    public function request(string $method, string $path, array $options = [], bool $isSign = false): ResponseInterface
    {
        $fullPath = sprintf('%s%s', $this->getBasePath(), $path);
        $url = sprintf('%s%s', $this->httpClient->getConfig('base_uri'), $fullPath);
        $className = (new \ReflectionClass($this))->getName();

        $this->logger->info(sprintf('%s api call', $className), [
            'method' => $method,
            'url' => $url,
            'headers' => $this->httpClient->getConfig('headers'),
        ]);

        try {
            if ($isSign) {
                return $this->signHttpClient->request($method, $fullPath, $options);
            } else {
                return $this->httpClient->request($method, $fullPath, $options);
            }
        } catch (ClientException | ServerException $e) {
            if (Response::HTTP_UNAUTHORIZED === $e->getResponse()->getStatusCode()) {
                throw (new ApicilApiError())
                    ->setCode(Response::HTTP_UNAUTHORIZED)
                    ->setMessage($e->getResponse()->getBody()->getContents())
                    ->getException()
                ;
            }

            try {
                $apicilApiError = $this->serializer->deserialize($e->getResponse()->getBody()->getContents(), ApicilApiError::class, 'json');
            } catch (Exception $exception) {
                $this->logger->error(sprintf('%s error', $className), [
                    'method' => $method,
                    'url' => $url,
                    'headers' => $this->httpClient->getConfig('headers'),
                    'boby' => $e->getRequest()->getBody()->getContents(),
                    'response_code' => $e->getResponse()->getStatusCode(),
                ]);

                throw $exception;
            }

            $this->logger->error(sprintf('%s error', $className), [
                'method' => $method,
                'url' => $url,
                'headers' => $this->httpClient->getConfig('headers'),
                'boby' => $e->getRequest()->getBody()->getContents(),
                'response_code' => $e->getResponse()->getStatusCode(),
                'error_code' => $apicilApiError?->getCode(),
                'error_messages' => (string) $apicilApiError,
            ]);

            if (null !== $apicilApiError && null === $apicilApiError->getErrorCode()) {
                $apicilApiError->setErrorCode($e->getResponse()->getStatusCode());
            }

            throw $apicilApiError?->getException() ?? $e;
        }
    }

    /**
     * Deserialize a json to an object of the given class name.
     *
     * @method deserialize
     *
     * @param string $content
     * @param string $className
     *
     * @return mixed
     */
    public function deserialize(string $content, string $className)
    {
        if ('bool' === $className) {
            return filter_var($content, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        }

        if ('array' === $className) {
            return json_decode($content, true);
        }

        try {
            return $this->serializer->deserialize($content, $className, 'json');
        } catch (ExceptionInterface $e) {
            $this->logger->error(sprintf('Error during deserialization: %s', $e->getMessage()));

            throw $e;
        }
    }

    /**
     * Make and request and return the response ressource as file.
     *
     * @method download
     *
     * @param string $method
     * @param string $path
     * @param array  $options
     *
     * @return File
     */
    public function download(string $method, string $path, array $options = []): File
    {
        $tmpFilePath     = sprintf('%s/%s', sys_get_temp_dir(), uniqid());
        $tmpFileResource = fopen($tmpFilePath, 'w+');
        $options[RequestOptions::SINK] = $tmpFileResource;
        $this->request($method, $path, $options);

        return new File($tmpFilePath, true);
    }

    /**
     * Make a request and deserialize the Guzzle response to an object of the given class name.
     *
     * @method requestAndPopulate
     *
     * @param string $className
     * @param string $method
     * @param string $path
     * @param array  $options
     * @param bool   $isSign
     *
     * @return mixed
     */
    public function requestAndPopulate(
        string $className,
        string $method,
        string $path,
        array $options = [],
        bool $isSign = false,
    ) {
        $response = $this->request($method, $path, $options, $isSign)->getBody()->getContents();

        return $this->deserialize($response, $className);
    }

    /**
     * {@inheritdoc}
     */
    abstract public static function getClientDomainAlias(): string;

    /**
     * {@inheritdoc}
     */
    abstract public function getBasePath(): string;
}
