<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ConnaissanceClient;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilAccClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilAccClient extends AbstractApicilClientDomain implements ApicilAccClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, array $options)
    {
        $options = ApicilAccClientOptionResolver::resolveAddDocumentOptions($options);

        $this->request('PUT', sprintf('/%s/documents', $id), [
            'multipart' => [
                [
                    'name' => 'documents',
                    'contents' => fopen($options['documents'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function addDocumentByContract(int $contractId, array $options)
    {
        $options = ApicilAccClientOptionResolver::resolveAddDocumentByContractOptions($options);

        $this->request('PUT', sprintf('/contrat/%s/documents', $contractId), [
            'multipart' => [
                [
                    'name' => 'documents',
                    'contents' => fopen($options['documents'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approve(int $id, array $options)
    {
        $options = ApicilAccClientOptionsResolver::resolveApproveOptions($options);

        $this->request('PUT', sprintf('/%s/valider', $id), [
            'multipart' => [
                [
                    'name' => 'documents',
                    'contents' => fopen($options['documents'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveByContract(int $contractId, array $options)
    {
        $options = ApicilAccClientOptionsResolver::resolveApproveByContractOptions($options);

        $this->request('PUT', sprintf('/contrat/%s/valider', $contractId), [
            'multipart' => [
                [
                    'name' => 'documents',
                    'contents' => fopen($options['documents'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSecurityCode(array $options): array
    {
        return $this->request('POST', '/codesecurite/valider', [
            'query' => ApicilAccClientOptionsResolver::resolveApproveSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSignature(int $id, string $otp)
    {
        $this->request('POST', sprintf('/%s/signature/%s', $id, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function approveSignatureByContract(int $contractId, string $otp)
    {
        $this->request('POST', sprintf('/contrat/%s/signature/%s', $contractId, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function generateSecurityCode(array $options): bool
    {
        $this->request('POST', '/codesecurite/generer', [
            'query' => ApicilAccClientOptionsResolver::resolveGenerateSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getByContract(int $contractId): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'GET', sprintf('/contrat/%s', $contractId));
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
    public function getBulletinByContract(int $contractId): File
    {
        return $this->download('GET', sprintf('/contrat/%s/bulletin', $contractId));
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
    public function getDocumentsByContract(int $contractId): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ActeDocumentDto::class), 'GET', sprintf('/contrat/%s/documents', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getValidInformations(int $id): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'GET', sprintf('/%s/validee', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getValidInformationsByContract(int $contractId): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'GET', sprintf('/contrat/%s/validee', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function giveUp(int $id): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/%s/abandonner', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function giveUpByContract(int $contractId): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/contrat/%s/abandonner', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function isEligible(int $id): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/%s/eligible', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function isEligibleByContract(int $contractId): DtoEligibilite
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
    public function removeByContract(int $contractId): bool
    {
        return $this->requestAndPopulate('bool', 'DELETE', sprintf('/contrat/%s', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function send(int $id): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'POST', sprintf('/%s/transmettre', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendByContract(int $contractId): ConnaissanceClient
    {
        return $this->requestAndPopulate(ConnaissanceClient::class, 'POST', sprintf('/contrat/%s/transmettre', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySms(int $id)
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $id, array $options): ResultatDeCreationResource
    {
        $options = ApicilAccClientOptionsResolver::resolveUpdateOptions($options);

        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/%s', $id), [
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
    public function updateByContract(int $id, array $options): ResultatDeCreationResource
    {
        $options = ApicilAccClientOptionsResolver::resolveUpdateByContractOptions($options);

        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/contrat/%s', $contractId), [
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
    public function updateDraft(int $id, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/%s/brouillon', $id), [
            'body' => $this->serializer->serialize($customerKnowledge, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateDraftByContract(int $contractId, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/contrat/%s/brouillon', $contractId), [
            'body' => $this->serializer->serialize($customerKnowledge, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromModel(int $id, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/%s/asigner', $id), [
            'body' => $this->serializer->serialize($customerKnowledge, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromModelByContract(int $contractId, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource
    {
        return $this->requestAndPopulate(ResultatDeCreationResource::class, 'PUT', sprintf('/contrat/%s/asigner', $contractId), [
            'body' => $this->serializer->serialize($customerKnowledge, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePhoneNumber(string $externalReference, TelephoneDto $phoneNumber): bool
    {
        $this->request('PUT', sprintf('/%s/telephone', $externalReference), [
            'body' => $this->serializer->serialize($phoneNumber, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/connaissanceclient';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'acc';
    }
}
