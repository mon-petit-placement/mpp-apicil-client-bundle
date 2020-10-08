<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ChangementCoordonneesDto;
use Mpp\ApicilClientBundle\Model\CoordonneesDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ErreurCodeFonctionnelDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilKycContactInformationClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilKycContactInformationClient extends AbstractApicilClientDomain implements ApicilKycContactInformationClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ResultatDeCreationResource
    {
        $options = ApicilKycContactInformationClientOptionResolver::resolveAddDocumentOptions($options);

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
    public function create(array $options): ResultatDeCreationResource
    {
        $options = ApicilKycContactInformationClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'POST', '', [
            'multipart' => [
                [
                    'name' => 'justificatifDomicile',
                    'contents' => fopen($options['justificatifDomicile'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): CoordonneesDto
    {
        return $this->requestAndPopulate(CoordonneesDto::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getContract(int $contractId): CoordonneesDto
    {
        return $this->requestAndPopulate(CoordonneesDto::class, 'GET', sprintf('/contrat/%s', $contractId));
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
    public function getIdentityCard(array $options = []): File
    {
        return $this->download('GET', sprintf('/piece-identite', $id), [
            'query' => ApicilKycContactInformationClientOptionResolver::resolveGetIdentityCardOptions($options),
        ]);
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
    public function update(int $id, ChangementCoordonneesDto $contactInformation)
    {
        $this->request('PUT', sprintf('/%s', $id), [
            'body' => $this->serializer->serialize($contactInformation, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateProofOfResidence(int $id, array $options = [])
    {
        return $this->request('PUT', sprintf('/%s/jdd', $id), [
            'query' => ApicilKycContactInformationClientOptionResolver::resolveUpdateProofOfResidenceOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/kyc/coordonnees';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'kyc_contact_information';
    }
}
