<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ClauseBeneficiareDto;
use Mpp\ApicilClientBundle\Model\ContratDto;
use Mpp\ApicilClientBundle\Model\DocumentMetadataDto;
use Mpp\ApicilClientBundle\Model\IndicateursContratDto;
use Mpp\ApicilClientBundle\Model\ListContratDto;
use Mpp\ApicilClientBundle\Model\OperationDto;
use Mpp\ApicilClientBundle\Model\SituationCompteDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilContractClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilContractClient extends AbstractApicilClientDomain implements ApicilContractClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function get(int $id): ContratDto
    {
        return $this->requestAndPopulate(ContratDto::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getAll(array $options = []): ListContratDto
    {
        return $this->requestAndPopulate(ListContratDto::class, 'GET', 's', [
            'query' => ApicilContractClientOptionResolver::resolveGetAllOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBeneficiaryClause(int $id): ClauseBeneficiareDto
    {
        return $this->requestAndPopulate(ClauseBeneficiareDto::class, 'GET', sprintf('/%s/clausebeneficiare', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocument(int $id): File
    {
        return $this->download('GET', sprintf('/document/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id, array $options = []): DocumentMetadataDto
    {
        return $this->requestAndPopulate(DocumentMetadataDto::class, 'GET', sprintf('/%s/documents', $id), [
            'query' => ApicilContractClientOptionResolver::resolveGetDocumentsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getIndicators(int $id): IndicateursContratDto
    {
        return $this->requestAndPopulate(IndicateursContratDto::class, 'GET', sprintf('/%s/indicateurs', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getMovements(int $id, array $options = []): OperationDto
    {
        return $this->requestAndPopulate(OperationDto::class, 'GET', sprintf('/%s/mouvements', $id), [
            'query' => ApicilContractClientOptionResolver::resolveGetMovementsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getSituationReport(int $id, array $options): SituationCompteDto
    {
        return $this->requestAndPopulate(SituationCompteDto::class, 'GET', sprintf('/%s/situationcompte', $id), [
            'query' => ApicilContractClientOptionResolver::resolveGetSituationReportOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getSituationReportPDF(int $id, array $options): SituationCompteDto
    {
        return $this->requestAndPopulate(SituationCompteDto::class, 'GET', sprintf('/%s/relevedesituation', $id), [
            'query' => ApicilContractClientOptionResolver::resolveGetSituationReportPDFOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/contrat';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'contract';
    }
}
