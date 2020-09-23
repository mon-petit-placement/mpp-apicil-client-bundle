<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ClauseBeneficiareDto;
use Mpp\ApicilClientBundle\Model\ContratDto;
use Mpp\ApicilClientBundle\Model\DocumentMetadataDto;
use Mpp\ApicilClientBundle\Model\IndicateursContratDto;
use Mpp\ApicilClientBundle\Model\ListContratDto;
use Mpp\ApicilClientBundle\Model\OperationDto;
use Mpp\ApicilClientBundle\Model\SituationCompteDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilContractClientInterface
{
    /**
     * Retrieve a contract.
     *
     * @method get
     *
     * @param int $id
     *
     * @return ContratDto
     */
    public function get(int $id): ContratDto;

    /**
     * Retrieve all contracts according to search criteria.
     *
     * @method getAll
     *
     * @param array $options
     *
     * @return ListContratDto
     */
    public function getAll(array $options = []): ListContratDto;

    /**
     * Retrieve the beneficiary clause of a contract.
     *
     * @method getBeneficiaryClause
     *
     * @param int $id
     *
     * @return ClauseBeneficiareDto
     */
    public function getBeneficiaryClause(int $id): ClauseBeneficiareDto;

    /**
     * Retrive a document.
     *
     * @method getDocument
     *
     * @param int $id
     *
     * @return File
     */
    public function getDocument(int $id): File;

    /**
     * Retrieve all documents from a contract.
     *
     * @method getDocuments
     *
     * @param array $id
     * @param array $options
     *
     * @return DocumentMetadataDto
     */
    public function getDocuments(int $id, array $options = []): DocumentMetadataDto;

    /**
     * Retrieve indicators of a contract.
     *
     * @method getIndicators
     *
     * @param int $id
     *
     * @return IndicateursContratDto
     */
    public function getIndicators(int $id): IndicateursContratDto;

    /**
     * Retrieve movements of a contract.
     *
     * @method getMovements
     *
     * @param int   $id
     * @param array $options
     *
     * @return OperationDto
     */
    public function getMovements(int $id, array $options = []): OperationDto;

    /**
     * Retrieve the situation report of a contract.
     *
     * @method getSituationReport
     *
     * @param int   $id
     * @param array $options
     *
     * @return SituationCompteDto
     */
    public function getSituationReport(int $id, array $options): SituationCompteDto;

    /**
     * Retrieve the situation report PDF of a contract.
     *
     * @method getSituationReportPDF
     *
     * @param int   $id
     * @param array $options
     *
     * @return SituationCompteDto
     */
    public function getSituationReportPDF(int $id, array $options): SituationCompteDto;
}
