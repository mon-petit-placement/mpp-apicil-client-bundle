<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ProfilFinancierActeDto;
use Mpp\ApicilClientBundle\Model\ProfilFinancierConsultationDto;
use Mpp\ApicilClientBundle\Model\ProfilFinancierDto;
use Mpp\ApicilClientBundle\Model\RepartitionDto;
use Mpp\ApicilClientBundle\Model\ResultatAdequationProfilFinancierDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilFinancialProfileClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilFinancialProfileClient extends AbstractApicilClientDomain implements ApicilFinancialProfileClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function approveSignature(int $customerId, string $otp)
    {
        $this->request('POST', sprintf('/%s/signature/%s', $customerId, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function createFromModel(int $customerId, ProfilFinancierActeDto $financialProfile): ActeRetourCreationDto
    {
        $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s', $customerId), [
            'body' => $this->serializer->serialize($financialProfile, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $customerId): ProfilFinancierConsultationDto
    {
        $this->requestAndPopulate(ProfilFinancierConsultationDto::class, 'GET', sprintf('/%s', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function getBulletin(int $customerId): File
    {
        return $this->download('GET', sprintf('/%s/bulletin', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function getByContract(int $contractId): ProfilFinancierDto
    {
        return $this->requestAndPopulate(ProfilFinancierDto::class, 'GET', sprintf('/contrat/%s', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getContractResult(int $contractId, RepartitionDto $wallet, array $options): ResultatAdequationProfilFinancierDto
    {
        $this->requestAndPopulate(ResultatAdequationProfilFinancierDto::class, 'POST', sprintf('/contrat/%s/adequation', $contractId), [
            'body' => $this->serializer->serialize($wallet, 'json'),
            'query' => ApicilFinancialProfileClientOptionResolver::resolveGetContratResultOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestions(int $customerId): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ProfilFinancierQuestionDto::class), 'GET', sprintf('/questions/%s', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function getValid(int $customerId): ProfilFinancierConsultationDto
    {
        return $this->requestAndPopulate(sprintf('%s[]', ProfilFinancierConsultationDto::class), 'GET', sprintf('/%s/validee', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function giveUp(int $customerId)
    {
        $this->request('POST', sprintf('/%s/abondonner', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function isEligible(int $customerId): DtoEligibilite
    {
        $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/%s/eligible', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function refuse(int $customerId, array $options = []): bool
    {
        $this->request('POST', sprintf('/%s/refuser', $customerId), [
            'query' => ApicilFinancialProfileClientOptionResolver::resolveRefuseOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySMS(int $id)
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $customerId)
    {
        $this->request('POST', sprintf('/%s/transmettre', $customerId));
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/profilfinancier';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'financial_profile';
    }
}
