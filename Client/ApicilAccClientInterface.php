<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ConnaissanceClient;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilAccClientInterface
{
    /**
     * Attach document to the customer knowledge.
     *
     * @method addDocument
     *
     * @param int   $id
     * @param array $options
     */
    public function addDocument(int $id, array $options);

    /**
     * Attach document to the customer knowledge from a contract id.
     *
     * @method addDocumentByContract
     *
     * @param int   $contractId
     * @param array $options
     */
    public function addDocumentByContract(int $contractId, array $options);

    /**
     * Add supporting documents (optional) and change the status to "VALIDEE"/"A_VALIDER".
     *
     * @method approve
     *
     * @param int   $id
     * @param array $options
     */
    public function approve(int $id, array $options);

    /**
     * Add supporting documents (optional) and change the status to "VALIDEE"/"A_VALIDER" from a contract id.
     *
     * @method approveByContract
     *
     * @param int   $contractId
     * @param array $options
     */
    public function approveByContract(int $contractId, array $options);

    /**
     * Verify the security code and return the associated customer's identifier.
     *
     * @method approveSecurityCode
     *
     * @param array $options
     *
     * @return array
     */
    public function approveSecurityCode(array $options): array;

    /**
     * Electronically sign the customer knowledge.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Electronically sign the customer knowledge from a contract id.
     *
     * @method approveSignatureByContract
     *
     * @param int    $contractId
     * @param string $otp
     */
    public function approveSignatureByContract(int $contractId, string $otp);

    /**
     * Check the consultation link of the customer knowledge update proposal and generate the security code.
     *
     * @method generateSecurityCode
     *
     * @param array $options
     *
     * @return bool
     */
    public function generateSecurityCode(array $options): bool;

    /**
     * Retrieve customer knowledge.
     *
     * @method get
     *
     * @param int $id
     *
     * @return ConnaissanceClient
     */
    public function get(int $id): ConnaissanceClient;

    /**
     * Retrieve customer knowledge from contract.
     *
     * @method getByContract
     *
     * @param int $contractId
     *
     * @return ConnaissanceClient
     */
    public function getByContract(int $contractId): ConnaissanceClient;

    /**
     * Retrieve the customer knowledge bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve the customer knowledge bulletin from a contract id.
     *
     * @method getBulletinByContract
     *
     * @param int $contractId
     *
     * @return File
     */
    public function getBulletinByContract(int $contractId): File;

    /**
     * Retrieve the list of attachments that has to be provided.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array<ActeDocumentDto>
     */
    public function getDocuments(int $id): array;

    /**
     * Retrieve the list of attachments that has to be provided from a contract id.
     *
     * @method getDocumentsByContract
     *
     * @param int $contractId
     *
     * @return array<ActeDocumentDto>
     */
    public function getDocumentsByContract(int $contractId): array;

    /**
     * Retrieve approved customer knowledge informations.
     *
     * @method getValidInformations
     *
     * @param int $id
     *
     * @return ConnaissanceClient
     */
    public function getValidInformations(int $id): ConnaissanceClient;

    /**
     * Retrieve approved customer knowledge informations from a contract id.
     *
     * @method getValidInformationsByContract
     *
     * @param int $contractId
     *
     * @return ConnaissanceClient
     */
    public function getValidInformationsByContract(int $contractId): ConnaissanceClient;

    /**
     * Give up the customer knowledge proposition.
     *
     * @method giveUp
     *
     * @param int $id
     *
     * @return ResultatDeCreationResource
     */
    public function giveUp(int $id): ResultatDeCreationResource;

    /**
     * Give up the customer knowledge proposition from a contract id.
     *
     * @method giveUpByContract
     *
     * @param int $contractId
     *
     * @return ResultatDeCreationResource
     */
    public function giveUpByContract(int $contractId): ResultatDeCreationResource;

    /**
     * Verify the eligibility of the update of customer knowledge.
     *
     * @method isEligible
     *
     * @param int   $id
     * @param array $options
     *
     * @return DtoEligibilite
     */
    public function isEligible(int $id): DtoEligibilite;

    /**
     * Verify the eligibility for the update of customer knowledge from a contract id.
     *
     * @method isEligibleByContract
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return DtoEligibilite
     */
    public function isEligibleByContract(int $contractId): DtoEligibilite;

    /**
     * Remove customer knowledge.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove customer knowledge from a contract id.
     *
     * @method removeByContract
     *
     * @param int $contractId
     *
     * @return bool
     */
    public function removeByContract(int $contractId): bool;

    /**
     * Create a proposal by the seller.
     *
     * @method send
     *
     * @param int $id
     *
     * @return ConnaissanceClient
     */
    public function send(int $id): ConnaissanceClient;

    /**
     * Create a proposal by the seller from a contract id.
     *
     * @method sendByContract
     *
     * @param int $contractId
     *
     * @return ConnaissanceClient
     */
    public function sendByContract(int $contractId): ConnaissanceClient;

    /**
     * Initiate the signature and retrieve the code.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Initiate the signature and retrieve the code.
     *
     * @method sendSignatureBySmsByContract
     *
     * @param int $contractId
     */
    public function sendSignatureBySmsByContract(int $contractId);

    /**
     * Update a customer knowledge update.
     *
     * @method update
     *
     * @param int   $id
     * @param array $options
     *
     * @return ResultatDeCreationResource
     */
    public function update(int $id, array $options): ResultatDeCreationResource;

    /**
     * Update a customer knowledge from a contract id.
     *
     * @method updateByContract
     *
     * @param int   $id
     * @param array $options
     *
     * @return ResultatDeCreationResource
     */
    public function updateByContract(int $id, array $options): ResultatDeCreationResource;

    /**
     * Updating customer knowledge in draft mode.
     *
     * @method updateDraft
     *
     * @param int                $id
     * @param ConnaissanceClient $customerKnowledge
     *
     * @return ResultatDeCreationResource
     */
    public function updateDraft(int $id, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

    /**
     * Updating customer knowledge in draft mode from a contract id.
     *
     * @method updateDraftByContract
     *
     * @param int                $contractId
     * @param ConnaissanceClient $customerKnowledge
     *
     * @return ResultatDeCreationResource
     */
    public function updateDraftByContract(int $contractId, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

    /**
     * Update a customer knowledge to be signed by the customer.
     *
     * @method updateFromModel
     *
     * @param int                $id
     * @param ConnaissanceClient $customerKnowledge
     *
     * @return ResultatDeCreationResource
     */
    public function updateFromModel(int $id, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

    /**
     * Update a customer knowledge to be signed by the customer from a contract id.
     *
     * @method updateFromModelByContract
     *
     * @param int                $contractId
     * @param ConnaissanceClient $customerKnowledge
     *
     * @return ResultatDeCreationResource
     */
    public function updateFromModelByContract(int $contractId, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

    /**
     * Update the customer's phone number.
     *
     * @method updatePhoneNumber
     *
     * @param string       $externalReference
     * @param TelephoneDto $phoneNumber
     *
     * @return bool
     */
    public function updatePhoneNumber(string $externalReference, TelephoneDto $phoneNumber): bool;
}
