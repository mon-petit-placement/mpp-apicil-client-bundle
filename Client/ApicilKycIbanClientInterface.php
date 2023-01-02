<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\ErreurCodeFonctionnelDto;
use Mpp\ApicilClientBundle\Model\IbanDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\ResultatDeCreationResource;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilKycIbanClientInterface
{
    /**
     * Attach a new document to a bank details change request.
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
     * Approve a bank details change request.
     *
     * @method approve
     *
     * @param int $id
     */
    public function approve(int $id);

    /**
     * Create bank details change request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Create a bank details change request from a model.
     *
     * @method createFromModel
     *
     * @param IbanDto $iban
     *
     * @return ResultatDeCreationResource
     */
    public function createFromModel(IbanDto $iban): ResultatDeCreationResource;

    /**
     * Get a bank details change request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return IbanDto
     */
    public function get(int $id): IbanDto;

    /**
     * Retrieve a contract bank details change request.
     *
     * @method getByContract
     *
     * @param int $contractId
     *
     * @return array<IbanDto>
     */
    public function getByContract(int $contractId): array;

    /**
     * Retrieve bank details change request document.
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
     * Retrieve a bank details change request document and the document sub category.
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
     * Retrieve bank details change request documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array<ActeDocumentDto> $options
     */
    public function getDocuments(int $id): array;

    /**
     * Retrieve all error code & labels that may occurs during bank details change request.
     *
     * @method getErrors
     *
     * @return array<ErreurCodeFonctionnelDto>
     */
    public function getErrors(): array;

    /**
     * Verify if a bank details change request exist for a contract.
     *
     * @method hasContract
     *
     * @param int $contractId
     *
     * @return OperationEnCoursDto
     */
    public function hasContract(int $contractId): OperationEnCoursDto;

    /**
     * Verfiy if a contract is eligible to bank details change request.
     *
     * @method isContractEligible
     *
     * @param int $contractId
     *
     * @return DtoEligibilite
     */
    public function isContractEligible(int $contractId): DtoEligibilite;

    /**
     * Remove a bank details change request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove a bank details change request document.
     *
     * @method removeDocument
     *
     * @param int    $id
     * @param string $documentId
     */
    public function removeDocument(int $id, string $documentId);

    /**
     * Retry bank details change request.
     *
     * @method retry
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function retry(int $id, array $options): bool;

    /**
     * Update a bank details change request.
     *
     * @method update
     *
     * @param int $id
     */
    public function update(int $id, array $options);
}
