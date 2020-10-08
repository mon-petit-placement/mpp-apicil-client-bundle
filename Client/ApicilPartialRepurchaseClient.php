<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Client\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Client\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Client\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Client\Model\RachatPartielDtoDeConsultation;
use Mpp\ApicilClientBundle\Client\Model\TelephoneDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilPartialRepurchaseClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilPartialRepurchaseClient extends AbstractApicilClientDomain implements ApicilPartialRepurchaseClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto
    {
        $options = ApicilPartialRepurchaseClientOptionResolver::resolveAddDocumentOptions($options);

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
    public function approveSignature(int $id, string $otp)
    {
        $this->request('POST', sprintf('/%s/signature/%s', $id, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options): ActeRetourCreationDto
    {
        $options = ApicilPartialRepurchaseClientOptionResolver::resolveCreateOptions($options);

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
    public function createFromModel(RachatDto $repurchase)
    {
        return $this->requestAndPopulate(RachatDto::class, 'POST', '/asigner', [
            'body' => $this->serializer->serialize($repurchase, 'json'),
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
    public function getContractAmountLimit(int $contractId): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/contrat/%s/limites', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocument(int $id, int $documentId): File
    {
        return $this->download('GET', sprintf('/%s/documents/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id): ActeDocumentDto
    {
        return $this->requestAndPopulate(sprintf('%s[]', ActeDocumentDto::class), 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailTemplate(array $options): EmailPropositionActeDto
    {
        return $this->requestAndPopulate(EmailPropositionActeDto::class, 'GET', sprintf('/mail/template', $id), [
            'query' => ApicilPartialRepurchaseClientOptionResolver::resolveGetEmailTemplateOptions($options),
        ]);
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
    public function refuse(int $id, array $options = [])
    {
        $this->request('POST', sprintf('/%s/refuser', $id), [
            'query' => ApicilPartialRepurchaseClientOptionResolver::resolveRefuseOptions($options),
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
    public function restart(int $id, array $options)
    {
        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => ApicilPartialRepurchaseClientOptionResolver::resolveRestartOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function resume(int $id): ActeRetourCreationDto
    {
        $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/reprendre', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySms(int $id): bool
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email)
    {
        $this->request('POST', sprintf('/%s/transmettre', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
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
    public function updateFromModel(int $id, RachatDto $repurchase): RachatDto
    {
        return $this->requestAndPopulate(RachatDto::class, 'PUT', sprintf('/asigner/%s', $id), [
            'body' => $this->serializer->serialize($repurchase, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber)
    {
        $this->request('PUT', sprintf('/%s/telephone', $id), [
            'body' => $this->serializer->serialize($phoneNumber, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/rachatpartiel';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'partial_repurchase';
    }
}
