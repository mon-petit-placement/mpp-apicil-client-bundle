<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\ContratProfilGestionDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\Model\RecuperationContratProfileGestionDto;
use Mpp\ApicilClientBundle\Model\ReponseClientHorsMursDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilManagementClientInterface
{
    /**
     * Attach a new document to a gestion mode change request.
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
     * Approve the gestion mode change request security code.
     *
     * @method approveSecurityCode
     *
     * @param array $options
     *
     * @return ReponseClientHorsMursDto
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

    /**
     * Valid the security code for a gestion mode change request.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new gestion mode change request with the complete signed file.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a gestion mode change request to be signed by the customer.
     *
     * @method createFromModel
     *
     * @param ContratProfilGestionDto $gestionProfile
     *
     * @return ActeRetourCreation
     */
    public function createFromModel(ContratProfilGestionDto $gestionProfile): ActeRetourCreation;

    /**
     * Generate the gestion mode change request security code.
     *
     * @method generateSecurityCode
     *
     * @param array $options
     */
    public function generateSecurityCode(array $options);

    /**
     * Retrieve a gestion mode change request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return RecuperationContratProfileGestionDto
     */
    public function get(int $id): RecuperationContratProfileGestionDto;

    /**
     * Retrieve the gestion mode change request bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve gestion mode change request from a contract.
     *
     * @method getByContract
     *
     * @param int $contractId
     *
     * @return ContratProfilGestionDto
     */
    public function getByContract(int $contractId): ContratProfilGestionDto;

    /**
     * Generate and retrieve the document of gestion mode change request for a contract.
     *
     * @method getContractDocument
     *
     * @param string $code
     * @param int    $contractId
     *
     * @return File
     */
    public function getContractDocument(string $code, int $contractId): File;

    /**
     * Retrieve a gestion mode change request document and the document sub category.
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
     * Retrieve gestion mode change request documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return RecuperationActeDocSousCategorieDto
     */
    public function getDocuments(int $id): RecuperationActeDocSousCategorieDto;

    /**
     * Retrieve gestion mode change request email.
     *
     * @method getEmailTemplate
     *
     * @return EmailPropositionActeDto
     */
    public function getEmailTemplate(): EmailPropositionActeDto;

    /**
     * Retrieve gestion mode change request investment eligible support list.
     *
     * @method getInvestmentEligibleSupports
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return ListeDesSupports
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options = []): ListeDesSupports;

    /**
     * Retrieve gestion mode change request investment eligible support list details.
     *
     * @method getInvestmentEligibleSupportDetails
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return ListeDesSupports
     */
    public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): ListeDesSupports;

    /**
     * Give up a gestion mode change request.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Verify if a gestion mode change request exist for a contract.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): OperationEnCoursDto;

    /**
     * Verify if a contract is eligible to gestion mode change request.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Refuse a gestion mode change request.
     *
     * @method refuse
     *
     * @param int   $id
     * @param array $options
     */
    public function refuse(int $id, array $options = []);

    /**
     * Remove a gestion mode change request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Restart the gestion mode change request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     */
    public function restart(int $id, array $options);

    /**
     * Resume a gestion mode change request.
     *
     * @method resume
     *
     * @param int $id
     *
     * @return ActeRetourCreationDto
     */
    public function resume(int $id): ActeRetourCreationDto;

    /**
     * Remove a gestion mode change request document.
     *
     * @method removeDocument
     *
     * @param int    $id
     * @param string $documentId
     */
    public function removeDocument(int $id, string $documentId);

    /**
     * Send the gestion mode change request to the customer.
     *
     * @method sendToCustomer
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email);

    /**
     * Send the security code by SMS to the customer for a gestion mode change request.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Test transmssion email of a gestion mode change request.
     *
     * @method testEmail
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);

    /**
     * Update and attach a signed document to a gestion mode change request.
     *
     * @method addDocument
     *
     * @param int   $id
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function update(int $id, array $options): ActeRetourCreationDto;

    /**
     * Update a gestion mode change request.
     *
     * @method update
     *
     * @param int                     $id
     * @param ContratProfilGestionDto $gestionProfile
     *
     * @return ActeRetourCreationDto
     */
    public function updateFromModel(int $id, ContratProfilGestionDto $gestionProfile): ActeRetourCreationDto;

    /**
     * Update the customer's phone number for a gestion mode change request.
     *
     * @method updatePhoneNumber
     *
     * @param int          $id
     * @param TelephoneDto $phoneNumber
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

    /**
     *  Verify the response validity of surveys for a gestion mode change request.
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
