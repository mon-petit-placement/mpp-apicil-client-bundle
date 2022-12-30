<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RachatPartielDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\RachatTotalDto;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilTotalRepurchaseClientInterface
{
    /**
     * Attach a new document to a partial repurchase request.
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
     * Valid the security code for a total repurchase request.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new total repurchase request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a total repurchase request to be signed by the customer.
     *
     * @method createFromModel
     *
     * @param RachatTotalDto $repurchase
     *
     * @return int
     */
    public function createFromModel(RachatTotalDto $repurchase): int;

    /**
     * Retrieve a total repurchase request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return RachatPartielDtoDeConsultation
     */
    public function get(int $id): RachatPartielDtoDeConsultation;

    /**
     * Retrieve total repurchase bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve total repurchase document.
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
     * Retrieve total repurchase document.
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
     * Retrieve total repurchase documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array
     */
    public function getDocuments(int $id): array;

    /**
     * Retrieve total purchase email template.
     *
     * @method getEmailTemplate
     *
     * @return EmailPropositionActeDto
     */
    public function getEmailTemplate(): EmailPropositionActeDto;

    /**
     * Give up a total repurchase request.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Verify if a total repurchase request exist for a contract.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): ?OperationEnCoursDto;

    /**
     * Verify if a contract is eligible to total repurchase request.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Refuse a total repurchase request.
     *
     * @method refuse
     *
     * @param int $id
     */
    public function refuse(int $id, array $options = []);

    /**
     * Remove total repurchase request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove total repurchase request.
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
     * Restart a total repurchase request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function restart(int $id, array $options);

    /**
     * Resume a total repurchase request.
     *
     * @method resume
     *
     * @param int $id
     *
     * @return ActeRetourCreationDto
     */
    public function resume(int $id): ActeRetourCreationDto;

    /**
     * Send the security code by SMS to the customer for a total repurchase request.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Send the total repurchase request to the customer.
     *
     * @method sendToCustomer
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email);

    /**
     * Test transmission email of a total repurchase request.
     *
     * @method testEmail
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);

    /**
     * Update a total repurchase request.
     *
     * @method updateFromModel
     *
     * @param int       $id
     * @param RachatTotalDto $repurchase
     */
    public function updateFromModel(int $id, RachatTotalDto $repurchase);

    /**
     * Update the customer's phone number for a total repurchase request.
     *
     * @method updatePhoneNumber
     *
     * @param int          $id
     * @param TelephoneDto $phoneNumber
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);
}
