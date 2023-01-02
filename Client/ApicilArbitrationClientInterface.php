<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\ArbitrageDto;
use Mpp\ApicilClientBundle\Model\ArbitrageDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\FraisArbitrageDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\Model\ReponseClientHorsMursDto;
use Mpp\ApicilClientBundle\Model\ReponseGenererCodeSecuriteHorsMursDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilArbitrationClientInterface
{
    /**
     * Add a document to an arbitration request.
     *
     * @method addDocument
     *
     * @param int    $id
     * @param string $documentCategory
     * @param array  $options
     *
     * @return RecuperationActeDocSousCategorieDto
     */
    public function addDocument(int $id, string $documentCategory, array $options): RecuperationActeDocSousCategorieDto;

    /**
     * Verify the security code and return the associated arbitration's identifier.
     *
     * @method approveSecurityCode
     *
     * @param array $options
     *
     * @return ReponseClientHorsMursDto
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

    /**
     * Electronically sign the arbitration proposal.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create an arbitration operation with the complete file signed.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a arbitration proposal to be signed by the customer.
     *
     * @method createFromModel
     *
     * @param ArbitrageDto $arbitration
     */
    public function createFromModel(ArbitrageDto $arbitration);

    /**
     * Check the consultation link of the arbitration proposal and generate the security code.
     *
     * @method generateSecurityCode
     *
     * @param array $options
     *
     * @return ReponseGenererCodeSecuriteHorsMursDto
     */
    public function generateSecurityCode(array $options): ReponseGenererCodeSecuriteHorsMursDto;

    /**
     * Retrieve the information of an arbitrage operation.
     *
     * @method get
     *
     * @param int $id
     *
     * @return ArbitrageDtoDeConsultation
     */
    public function get(int $id): ArbitrageDtoDeConsultation;

    /**
     * Retrieve arbitration fees for the given contract.
     *
     * @method getContractFees
     *
     * @param int $contractId
     *
     * @return FraisArbitrageDto
     */
    public function getArbitrationFees(int $contractId): FraisArbitrageDto;

    /**
     * Retrieve bulletin of arbitration operation.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve the documents of an arbitration.
     *
     * @method getDocuments
     *
     * @param int    $id
     * @param string $documentId
     *
     * @return RecuperationActeDocSousCategorieDto
     */
    public function getDocument(int $id, int $documentId): RecuperationActeDocSousCategorieDto;

    /**
     * Retrieve the list of document types open for uploading for arbitration.
     *
     * @method getDocumentTypes
     *
     * @param int    $id
     *
     * @return array<RecuperationActeDocSousCategorieDto>
     */
    public function getDocumentTypes(int $id): array;

    /**
     * Retrieve arbitration email proposal.
     *
     * @method getEmailTemplate
     *
     * @return EmailPropositionActeDto
     */
    public function getEmailTemplate(): EmailPropositionActeDto;

    /**
     * Retrieve all error code & labels that may occurs during arbitration.
     *
     * @method getErrors
     *
     * @param int $id
     *
     * @return array<ErreurCodeFonctionnelDto>
     */
    public function getErrors(int $id): array;

    /**
     * Retrieve eligible support list in invest mode.
     *
     * @method getInvestmentEligibleSupports
     *
     * @param int   $contractId
     * @param array $options
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options): ListeDesSupports;

    /**
     * Give up an arbitration proposal for the client.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Retrieve the ongoing arbitration on the contrat if it exists.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): ?OperationEnCoursDto;

    /**
     * Verify if the given contract is eligible to arbitration.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Refuse an arbitration proposal made by a seller.
     *
     * @method refuse
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function refuse(int $id, array $options = []);

    /**
     * Delete an arbitration operation.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove a document from an arbitration request.
     *
     * @method removeDocument
     *
     * @param int    $id
     * @param string $documentId
     *
     * @return bool
     */
    public function removeDocument(int $id, string $documentId): bool;

    /**
     * Restart an arbitration proposal.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     */
    public function restart(int $id, array $options);

    /**
     * Resume the arbitration proposal.
     *
     * @method resume
     *
     * @param int $id
     *
     * @return ActeRetourCreationDto
     */
    public function resume(int $id): ActeRetourCreationDto;

    /**
     * Send the signature by SMS.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Send the arbitration proposal to the customer.
     *
     * @method sendToCustomer
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email);

    /**
     * Test the transmision email of an arbitration proposal.
     *
     * @method testEmail
     *
     * @param int   $id
     * @param EmailPropositionActeDto $email
     *
     * @return bool
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);

    /**
     * Add the signed arbitration file to an arbitration operation.
     *
     * @method update
     *
     * @param int   $id
     * @param array $options
     *
     * @return ArbitrageDto
     */
    public function update(int $id, array $options): ArbitrageDto;

    /**
     * Update arbitration from model.
     *
     * @method updateFromModel
     *
     * @param int            $id
     * @param ArbitrageDto $arbitration
     */
    public function updateFromModel(int $id, ArbitrageDto $arbitration);

    /**
     * Update the customer's phone number.
     *
     * @method updatePhoneNumber
     *
     * @param string       $id
     * @param TelephoneDto $phoneNumber
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

    /**
     * Verify the response validity of surveys.
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
