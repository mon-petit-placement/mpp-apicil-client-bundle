<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\RachatPartielDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilTotalRepurchaseClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilTotalRepurchaseClient extends AbstractApicilClientDomain implements ApicilTotalRepurchaseClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto
    {
        $options = ApicilTotalRepurchaseClientOptionResolver::resolveAddDocumentOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/document/%s', $id, $category), [
            'multipart' => [
                [
                    'name' => 'document',
                    'contents' => fopen($options['document'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options): ActeRetourCreationDto
    {
        $options = ApicilTotalRepurchaseClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '/', [
            'query' => $options,
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($options['file'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): RachatPartielDtoDeConsultation
    {
        return $this->requestAndPopulate(RachatPartielDtoDeConsultation::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getBulletin(int $id): File
    {
        return $this->download('GET', sprintf('/%s/bulletin', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentByCategory(int $id, string $category): RecuperationActeDocSousCategorieDto
    {
        return $this->requestAndPopulate(RecuperationActeDocSousCategorieDto::class, 'GET', sprintf('/%s/document/%s', $id, $category));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentById(int $id, int $documentId): File
    {
        return $this->download('GET', sprintf('/%s/documents/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ActeDocumentDto::class), 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function giveUp(int $id)
    {
        $this->request('POST', sprintf('/%s/abandonner', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function refuse(int $id, array $options = [])
    {
        $this->request('POST', sprintf('/%s/refuser', $id), [
            'query' => ApicilTotalRepurchaseClientOptionResolver::resolveRefuseOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(int $id): bool
    {
        return $this->requestAndPopulate('bool', 'DELETE', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function removeDocument(int $id, int $documentId): bool
    {
        return $this->requestAndPopulate('bool', 'DELETE', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function restart(int $id, array $options)
    {
        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => ApicilTotalRepurchaseClientOptionResolver::resolveRestartOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function testEmail(int $id, EmailPropositionActeDto $email)
    {
        $this->request('POST', sprintf('/%s/mail/tester', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'total_repurchase';
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/rachattotal';
    }
}
