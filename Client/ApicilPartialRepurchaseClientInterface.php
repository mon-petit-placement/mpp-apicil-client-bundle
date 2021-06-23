<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RachatPartielDto;
use Mpp\ApicilClientBundle\Model\RachatPartielDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilPartialRepurchaseClientInterface
{
    /**
     * Attach a new document to a partial repurchase request.
     *
     * @method addDocument
     *
     * @param int    $id
     * @param string $category
     * @param array  $query
     *
     * @return ActeRetourCreationDto
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

    /**
     * Valid the security code for a partial repurchase request.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new partial repurchase request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a partial repurchase request to be signed by the customer.
     *
     * @method createFromModel
     *
     * @param RachatPartielDto $repurchase
     *
     * @return int
     */
    public function createFromModel(RachatPartielDto $repurchase): int;

    /**
     * Retrieve a partial repurchase request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return RachatPartielDtoDeConsultation
     */
    public function get(int $id): RachatPartielDtoDeConsultation;

    /**
     * Retrieve partial repurchase bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve minimum and maximal amount of partial repurchase for a contract.
     *
     * @method getContractAmountLimit
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function getContractAmountLimit(int $contractId): DtoEligibilite;

    /**
     * Retrieve partial repurchase document.
     *
     * @method getDocumentByCategory
     *
     * @param int $id
     * @param string $category
     *
     * @return RecuperationActeDocSousCategorieDto
     */
    public function getDocumentByCategory(int $id, string $category): RecuperationActeDocSousCategorieDto;

    /**
     * Retrieve partial repurchase document.
     *
     * @method getDocumentById
     *
     * @param int $id
     * @param int $documentId
     *
     * @return File
     */
    public function getDocumentById(int $id, int $documentId): File;

    /**
     * Retrieve partial repurchase documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array
     */
    public function getDocuments(int $id): array;

    /**
     * Retrieve partial purchase email template.
     *
     * @method getEmailTemplate
     *
     * @param array $options
     *
     * @return EmailPropositionActeDto
     */
    public function getEmailTemplate(array $options): EmailPropositionActeDto;

    /**
     * Give up a partial repurchase request.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Verify if a partial repurchase request exist for a contract.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): OperationEnCoursDto;

    /**
     * Verify if a contract is eligible to partial repurchase request.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Refuse a partial repurchase request.
     *
     * @method refuse
     *
     * @param int $id
     */
    public function refuse(int $id, array $options = []);

    /**
     * Remove partial repurchase request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove partial repurchase request.
     *
     * @method removeDocument
     *
     * @param int $id
     * @param int $documentId
     *
     * @return bool
     */
    public function removeDocument(int $id, int $documentId): bool;

    /**
     * Restart the partial repurchase request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     */
    public function restart(int $id, array $options);

    /**
     * Resume a partial repurchase request.
     *
     * @method resume
     *
     * @param int $id
     *
     * @return ActeRetourCreationDto
     */
    public function resume(int $id): ActeRetourCreationDto;

    /**
     * Send the security code by SMS to the customer for a partial repurchase request.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Send the partial repurchase request to the customer.
     *
     * @method sendToCustomer
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email);

    /**
     * Test transmission email of a partial repurchase request.
     *
     * @method testEmail
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);

    /**
     * Update a partial repurchase request.
     *
     * @method updateFromModel
     *
     * @param int       $id
     * @param RachatPartielDto $repurchase
     *
     * @return RachatPartielDto
     */
    public function updateFromModel(int $id, RachatPartielDto $repurchase): RachatPartielDto;

    /**
     * Update the customer's phone number for a partial repurchase request.
     *
     * @method updatePhoneNumber
     *
     * @param int          $id
     * @param TelephoneDto $phoneNumber
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);
}
