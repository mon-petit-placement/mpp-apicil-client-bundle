<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ProfilFinancierActeDto;
use Mpp\ApicilClientBundle\Model\ProfilFinancierConsultationDto;
use Mpp\ApicilClientBundle\Model\ProfilFinancierDto;
use Mpp\ApicilClientBundle\Model\ProfilFinancierQuestionDto;
use Mpp\ApicilClientBundle\Model\RepartitionDto;
use Mpp\ApicilClientBundle\Model\ResultatAdequationProfilFinancierDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilFinancialProfileClientInterface
{
    /**
     * Electronically sign the financial profile request.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new customer financial profiling act to be signed.
     *
     * @method createFromModel
     *
     * @param int                    $customerId
     * @param ProfilFinancierActeDto $financialProfile
     *
     * @return ActeRetourCreationDto
     */
    public function createFromModel(int $customerId, ProfilFinancierActeDto $financialProfile): ActeRetourCreationDto;

    /**
     * Retrieve customer financial profile request.
     *
     * @method get
     *
     * @param int $customerId
     *
     * @return ProfilFinancierConsultationDto
     */
    public function get(int $customerId): ProfilFinancierConsultationDto;

    /**
     * Retrieve financial profile request bulletin by a customer id.
     *
     * @method getBulletin
     *
     * @param int $customerId
     *
     * @return File
     */
    public function getBulletin(int $customerId): File;

    /**
     * Retrieve contract financial profile request.
     *
     * @method getByContract
     *
     * @param int $contractId
     *
     * @return ProfilFinancierDto
     */
    public function getByContract(int $contractId): ProfilFinancierDto;

    /**
     * Retrieve contract financial profile request result.
     *
     * @method getContractResult
     *
     * @param int            $contractId
     * @param RepartitionDto $wallet
     * @param array          $options
     *
     * @return ResultatAdequationProfilFinancierDto
     */
    public function getContractResult(int $contractId, RepartitionDto $wallet, array $options): ResultatAdequationProfilFinancierDto;

    /**
     * Retrieve customer financial profile request questions.
     *
     * @method getQuestions
     *
     * @param int $customerId
     *
     * @return array<ProfilFinancierQuestionDto>
     */
    public function getQuestions(int $customerId): array;

    /**
     * Retrieve valid customer financial profile request.
     *
     * @method getValid
     *
     * @param int $customerId
     *
     * @return ProfilFinancierConsultationDto
     */
    public function getValid(int $customerId): ProfilFinancierConsultationDto;

    /**
     * Give up a customer financial profile request.
     *
     * @method giveUp
     *
     * @param int $customerId
     */
    public function giveUp(int $customerId);

    /**
     * Verify customer eligibility for a financial profile request.
     *
     * @method isEligible
     *
     * @param int $customerId
     *
     * @return DtoEligibilite
     */
    public function isEligible(int $customerId): DtoEligibilite;

    /**
     * Refuse a customer financial profile request.
     *
     * @method refuse
     *
     * @param int   $customerId
     * @param array $options
     *
     * @return bool
     */
    public function refuse(int $customerId, array $options = []): bool;

    /**
     * Send the security code by SMS.
     *
     * @method sendSignatureBySMS
     *
     * @param int $id
     */
    public function sendSignatureBySMS(int $id);

    /**
     * Send a customer financial profile request.
     *
     * @method sendToCustomer
     *
     * @param int $customerId
     */
    public function sendToCustomer(int $customerId);
}
