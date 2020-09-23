<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ChangementCoordonneesDto;
use Mpp\ApicilClientBundle\Model\CoordonneesDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ErreurCodeFonctionnelDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilKycContactInformationClientInterface
{
    /**
     * Attach a new document to a contact information change request.
     *
     * @method addDocument
     *
     * @param int    $id
     * @param string $category
     * @param array  $options
     *
     * @return ResultatDeCreationResource
     */
    public function addDocument(int $id, string $category, array $options): ResultatDeCreationResource;

    /**
     * Approve a contact information change request.
     *
     * @method approve
     *
     * @param int $id
     */
    public function approve(int $id);

    /**
     * Create a new contact information change request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ResultatDeCreationResource
     */
    public function create(array $options): ResultatDeCreationResource;

    /**
     * Retrieve a contact information change request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return CoordonneesDto
     */
    public function get(int $id): CoordonneesDto;

    /**
     * Retrieve a contract contact information change request.
     *
     * @method getContract
     *
     * @param int $contractId
     *
     * @return CoordonneesDto
     */
    public function getContract(int $contractId): CoordonneesDto;

    /**
     * Retrieve contact information change request document.
     *
     * @method getDocument
     *
     * @param int    $id
     * @param string $documentId
     *
     * @return File
     */
    public function getDocument(int $id, string $documentId): File;

    /**
     * Retrieve a contact information change request document and the document sub category.
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
     * Retrieve contact information change request documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array<ActeDocumentDto>
     */
    public function getDocuments(int $id): array;

    /**
     * Retrieve all error code & labels that may occurs during contact information change request.
     *
     * @method getErrors
     *
     * @return array<ErreurCodeFonctionnelDto>
     */
    public function getErrors(): array;

    /**
     * Retrieve the contact information change request identity card document.
     *
     * @method getIdentityCard
     *
     * @param array $options
     *
     * @return File
     */
    public function getIdentityCard(array $options = []): File;

    /**
     * Verify if a contact information change request exist for a contract.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): OperationEnCoursDto;

    /**
     * Verfiy if a contract is eligible to contact information change request.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Remove a contact information change request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove a contact information change request document.
     *
     * @method removeDocument
     *
     * @param int    $id
     * @param string $documentId
     */
    public function removeDocument(int $id, string $documentId);

    /**
     * Update a contact information change request with new informations.
     *
     * @method update
     *
     * @param int                      $id
     * @param ChangementCoordonneesDto $contactInformation
     */
    public function update(int $id, ChangementCoordonneesDto $contactInformation);

    /**
     * Add proof of residence to a contact information change request.
     *
     * @method updateProofOfResidence
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function updateProofOfResidence(int $id, array $options = []);
}
