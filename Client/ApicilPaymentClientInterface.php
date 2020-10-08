<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DetailOptionVP;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\EmailPropositionDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\ModeleDeVersement;
use Mpp\ApicilClientBundle\Model\MontantVCDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\QuestionnaireStructuresReponses;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDoc;
use Mpp\ApicilClientBundle\Model\RecuperationVersementSuppression;
use Mpp\ApicilClientBundle\Model\ReponseClientHorsMursDto;
use Mpp\ApicilClientBundle\Model\SuppressionOptionDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilPaymentClientInterface
{
    /**
     * Attach a new document to a payment request.
     *
     * @method addDocument
     *
     * @param int    $id
     * @param string $category
     * @param array  $options
     *
     * @return ActeRetourCreationDto
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

    /**
     * Approve a payment request.
     *
     * @method approve
     *
     * @param int $id
     */
    public function approve(int $id);

    /**
     * Approve a payment request as an office.
     *
     * @method approveAsOffice
     *
     * @param int $id
     */
    public function approveAsOffice(int $id);

    /**
     * Approve the payment request security code.
     *
     * @method approveSecurityCode
     *
     * @param array $options
     *
     * @return ReponseClientHorsMursDto
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

    /**
     * Valid the security code for a payment request.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new payment request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a payment request from a model.
     *
     * @method createFromModel
     *
     * @param ModeleDeVersement $paymentModel
     */
    public function createFromModel(ModeleDeVersement $paymentModel);

    /**
     * Generate the payment request security code.
     *
     * @method generateSecurityCode
     *
     * @param array $options
     */
    public function generateSecurityCode(array $options);

    /**
     * Retrieve payment request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return RecuperationVersementSuppression
     */
    public function get(int $id): RecuperationVersementSuppression;

    /**
     * Retrieve payment request bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve minimal and maximal amount of payment for a contract.
     *
     * @method getContractAmountLimits
     *
     * @param int $contractId
     *
     * @return MontantVCDto
     */
    public function getContractAmountLimits(int $contractId): MontantVCDto;

    /**
     * Retrieve contract payment option.
     *
     * @method getContractOption
     *
     * @param int $contractId
     *
     * @return DetailOptionVP
     */
    public function getContractOption(int $contractId): DetailOptionVP;

    /**
     * Retrieve minimal and maximal rate of payment for a contract.
     *
     * @method getContractRateLimits
     *
     * @param int $contractId
     *
     * @return MontantVCDto
     */
    public function getContractRateLimits(int $contractId): MontantVCDto;

    /**
     * Retrieve a payment request document and the document sub category.
     *
     * @method getDocumentByCategory
     *
     * @param int    $id
     * @param string $category
     *
     * @return File
     */
    public function getDocumentByCategory(int $id, string $category): File;

    /**
     * Retrieve payment request document.
     *
     * @method getDocument
     *
     * @param int    $id
     * @param string $documentId
     *
     * @return RecuperationActeDocSousCategorieDoc
     */
    public function getDocument(int $id, string $documentId): RecuperationActeDocSousCategorieDoc;

    /**
     * Retrieve payment request documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return RecuperationActeDocSousCategorieDoc
     */
    public function getDocuments(int $id): RecuperationActeDocSousCategorieDoc;

    /**
     * Retrieve payment request email.
     *
     * @method getEmailTemplate
     *
     * @param array $options
     *
     * @return EmailPropositionActeDto
     */
    public function getEmailTemplate(array $options = []): EmailPropositionActeDto;

    /**
     * Retrieve payment request investment eligible support list.
     *
     * @method getInvestmentEligibleSupports
     *
     * @param int   $contractId
     * @param array $query
     *
     * @return array
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options = []): ListeDesSupports;

    /**
     * Retrieve payment request investment eligible support list details.
     *
     * @method getInvestmentEligibleSupportDetails
     *
     * @param int   $contractId
     * @param array $query
     *
     * @return array
     */
    public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): ListeDesSupports;

    /**
     * Give up a payment request.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Retrieve the payment request from a contract if it exists.
     *
     * @method hasContract
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId, array $options = []): OperationEnCoursDto;

    /**
     * Verify if the given contract is eligible to payment request.
     *
     * @method isContractEligible
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId, array $options = []): DtoEligibilite;

    /**
     * Refuse a payment request.
     *
     * @method refuse
     *
     * @param int   $id
     * @param array $options
     */
    public function refuse(int $id, array $options = []);

    /**
     * Refuse the payment request as an office.
     *
     * @method refuseAsOffice
     *
     * @param int $id
     */
    public function refuseAsOffice(int $id);

    /**
     * Remove a payment request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove a payment request document.
     *
     * @method removeDocument
     *
     * @param int    $id
     * @param string $documentId
     */
    public function removeDocument(int $id, string $documentId);

    /**
     * Create a new option removal request.
     *
     * @method removeOption
     *
     * @param array $options [description]
     *
     * @return ActeRetourCreationDto [description]
     */
    public function removeOption(array $options): ActeRetourCreationDto;

    /**
     * Create a new option removal request from a model.
     *
     * @method removeOptionFromModel
     *
     * @param SuppressionOptionDto $model
     *
     * @return ActeRetourCreationDto
     */
    public function removeOptionFromModel(SuppressionOptionDto $model): ActeRetourCreationDto;

    /**
     * Restart a payment request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     */
    public function restart(int $id, array $options);

    /**
     * Resume a payment request.
     *
     * @method resume
     *
     * @param int $id
     *
     * @return ActeRetourCreationDto
     */
    public function resume(int $id): ActeRetourCreationDto;

    /**
     * Send the security code by SMS to the customer for a payment request.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Send the payment request to customer.
     *
     * @method sendToCustomer
     *
     * @param int                 $id
     * @param EmailPropositionDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionDto $email);

    /**
     * Start the payment request as an office.
     *
     * @method startAsOffice
     *
     * @param int $id
     */
    public function startAsOffice(int $id);

    /**
     * Test transmission email of a payment request.
     *
     * @method testEmail
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);

    /**
     * Update a payment request from a model.
     *
     * @method updateFromModel
     *
     * @param int               $id
     * @param ModeleDeVersement $paymentModel
     *
     * @return ModeleDeVersement
     */
    public function updateFromModel(int $id, ModeleDeVersement $paymentModel): ModeleDeVersement;

    /**
     * Update the customer's phone number for a payment request.
     *
     * @method updatePhoneNumber
     *
     * @param int          $id
     * @param TelephoneDto $phoneNumber
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

    /**
     *  Verify the response validity of surveys for a payment request.
     *
     * @method verifySurveys
     *
     * @param int                                    $id
     * @param array<QuestionnaireStructuresReponses> $surveys
     *
     * @return int
     */
    public function verifySurveys(int $id, array $surveys): int;
}
