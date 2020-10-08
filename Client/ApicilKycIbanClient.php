<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\IbanDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilKycIbanClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilKycIbanClient extends AbstractApicilClientDomain implements ApicilKycIbanClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto
    {
        $options = ApicilKycIbanClientOptionResolver::resolveAddDocumentOptions($options);

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
    public function approve(int $id)
    {
        $this->request('PUT', sprintf('/%s/valider', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options): ActeRetourCreationDto
    {
        $options = ApicilKycContactInformationClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '', [
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
    public function createFromModel(IbanDto $iban): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'POST', '/asigner', [
            'body' => $this->serializer->serialize($iban, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): IbanDto
    {
        return $this->requestAndPopulate(IbanDto::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getByContract(int $contractId): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', IbanDto::class), 'GET', sprintf('/contrat/%s', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocument(int $id, string $documentId): File
    {
        return $this->download('GET', sprintf('/%s/documents/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentByCategory(int $id, string $category): File
    {
        return $this->download('GET', sprintf('/%s/document/%s', $id, $category));
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
    public function getErrors(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ErreurCodeFonctionnelDto::class), 'GET', sprintf('/erreurs', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function hasContract(int $contractId): OperationEnCoursDto
    {
        return $this->requestAndPopulate(OperationEnCoursDto::class, 'GET', sprintf('/contrat/%s/existe', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function isContractEligible(int $contractId): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/contrat/%s/eligible', $contractId));
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
    public function removeDocument(int $id, string $documentId)
    {
        $this->request('DELETE', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function retry(int $id, array $options): bool
    {
        throw new \BadMethodCallException(sprintf('The method %s has not been implemented yet', __METHOD__));
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $id, array $options)
    {
        $options = ApicilKycContactInformationClientOptionResolver::resolveUpdateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '', [
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
    public function getBasePath(): string
    {
        return '/kyc/iban';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'kyc_iban';
    }
}
