<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\CourtierDto;
use Mpp\ApicilClientBundle\Model\DepartementDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesActifDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesObjetDto;
use Mpp\ApicilClientBundle\Model\FraisEncoursDto;
use Mpp\ApicilClientBundle\Model\LienParenteRefDto;
use Mpp\ApicilClientBundle\Model\PeriodiciteDto;
use Mpp\ApicilClientBundle\Model\ProduitDto;
use Mpp\ApicilClientBundle\Model\SousCategorieDocumentDto;
use Mpp\ApicilClientBundle\Model\SupportDto;
use Mpp\ApicilClientBundle\Model\TrClasseActifDto;
use Mpp\ApicilClientBundle\Model\TrIndicatifDto;
use Mpp\ApicilClientBundle\Model\TypeContratDto;
use Mpp\ApicilClientBundle\Model\TypePatrimoineOuRevenuDto;
use Mpp\ApicilClientBundle\Model\VilleDto;

interface ApicilReferentialClientInterface
{
    /**
     * Retrieve activity sector list.
     *
     * @method getActivitySectors
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getActivitySectors(array $options = []): array;

    /**
     * Retrieve addresses from API.
     *
     * @method getApiAddresses
     *
     * @param array $options
     *
     * @return string
     */
    public function getApiAddresses(array $options): string;

    /**
     * Retrieve asset classes.
     *
     * @method getAssetClasses
     *
     * @return array
     */
    public function getAssetClasses(): array;

    /**
     * Retrieve broker.
     *
     * @method getBroker
     *
     * @param int $id
     *
     * @return CourtierDto
     */
    public function getBroker(int $id): CourtierDto;

    /**
     * Search brokers by keywords and mode.
     *
     * @method getBrokers
     *
     * @param array $options
     *
     * @return array<CourtierDto>
     */
    public function getBrokers(array $options): array;

    /**
     * Retrieve civility list.
     *
     * @method getCivilities
     *
     * @return array<DonneesReferencesDto>
     */
    public function getCivilities(): array;

    /**
     * Retrieve city list.
     *
     * @method getCities
     *
     * @param array $options
     *
     * @return array<VilleDto>
     */
    public function getCities(array $options = []): array;

    /**
     * Retrieve contract type list.
     *
     * @method getContractTypes
     *
     * @return array<TypeContratDto>
     */
    public function getContractTypes(): array;

    /**
     * Retrieve contry list.
     *
     * @method getCountries
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getCountries(array $options = []): array;

    /**
     * Retrieve death disposition list.
     *
     * @method getDeathProvisions
     *
     * @return array<DonneesReferencesDto>
     */
    public function getDeathDispositions(): array;

    /**
     * Retrieve department list.
     *
     * @method getDepartments
     *
     * @param array $options
     *
     * @return array<DepartementDto>
     */
    public function getDepartments(array $options = []): array;

    /**
     * Retrieve document type list.
     *
     * @method getDocumentTypes
     *
     * @return array<SousCategorieDocumentDto>
     */
    public function getDocumentTypes(): array;

    /**
     * Retrieve familial situation list.
     *
     * @method getFamilialSituations
     *
     * @return array<DonneesReferencesDto>
     */
    public function getFamilialSituations(): array;

    /**
     * Retrieve family link list.
     *
     * @method getFamilyLinks
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getFamilyLinks(array $options = []): array;

    /**
     * Retrieve fiscal agent list.
     *
     * @method getFiscalAgents
     *
     * @return array<DonneesReferencesActifDto>
     */
    public function getFiscalAgents(): array;

    /**
     * Retrieve income type list.
     *
     * @method getIncomeTypes
     *
     * @return array<TypePatrimoineOuRevenuDto>
     */
    public function getIncomeTypes(): array;

    /**
     * Retrieve investment eligible support list.
     *
     * @method getInvestmentEligibleSupports
     *
     * @param string $productReference
     * @param array  $query
     *
     * @return array
     */
    public function getInvestmentEligibleSupports(string $productReference, array $options = []): array;

    /**
     * Retrieve investment goal list.
     *
     * @method getInvestmentGoals
     *
     * @return array<DonneesReferencesActifDto>
     */
    public function getInvestmentGoals(): array;

    /**
     * Retrieve investment horizon list.
     *
     * @method getInvestmentHorizons
     *
     * @return array<TrClasseActifDto>
     */
    public function getInvestmentHorizons(): array;

    /**
     * Retrieve job list.
     *
     * @method getJobs
     *
     * @return array<DonneesReferencesDto>
     */
    public function getJobs(): array;

    /**
     * Retrieve matrimonial regime list.
     *
     * @method getMatrimonialRegimes
     *
     * @return array<DonneesReferencesDto>
     */
    public function getMatrimonialRegimes(): array;

    /**
     * Retrieve nationality list.
     *
     * @method getNationalities
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getNationalities(array $options = []): array;

    /**
     * Retrieve outstanding cost list.
     *
     * @method getOutstandingCosts
     *
     * @param string $productReference
     *
     * @return array<FraisEncoursDto>
     */
    public function getOutstandingCosts(string $productReference): array;

    /**
     * Retrieve parental link list.
     *
     * @method getParentalLinks
     *
     * @return array<LienParenteRefDto>
     */
    public function getParentalLinks(): array;

    /**
     * Retrieve patrimony type list.
     *
     * @method getPatrimonyTypes
     *
     * @return array<TypePatrimoineOuRevenuDto>
     */
    public function getPatrimonyTypes(): array;

    /**
     * Retrieve payment frequencies list.
     *
     * @method getPaymentFrequencies
     *
     * @param string $productReference
     *
     * @return array<PeriodiciteDto>
     */
    public function getPaymentFrequencies(string $productReference): array;

    /**
     * Retrieve payment method list supported by the platform.
     *
     * @method getPaymentMethods
     *
     * @param string $brokerId
     * @param array  $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getPaymentMethods(string $brokerId, array $options = []): array;

    /**
     * Retrieve phone code list.
     *
     * @method getPhoneCodes
     *
     * @param array $options
     *
     * @return array<TrIndicatifDto>
     */
    public function getPhoneCodes(array $options = []): array;

    /**
     * Retrieve politically exposed person function list.
     *
     * @method getPoliticallyExposedPersonFunctions
     *
     * @return array<DonneesReferencesObjetDto>
     */
    public function getPoliticallyExposedPersonFunctions(): array;

    /**
     * Retrieve politically exposed person link nature list.
     *
     * @method getPoliticallyExposedPersonLinkNatures
     *
     * @return array<DonneesReferencesDto>
     */
    public function getPoliticallyExposedPersonLinkNatures(): array;

    /**
     * Retrieve politically exposed person parental link list.
     *
     * @method getPoliticallyExposedPersonParentalLinks
     *
     * @return array<DonneesReferencesObjetDto>
     */
    public function getPoliticallyExposedPersonParentalLinks(): array;

    /**
     * Retrieve product by its reference.
     *
     * @method getProduct
     *
     * @param string $reference
     *
     * @return ProduitDto
     */
    public function getProduct(string $reference): ProduitDto;

    /**
     * Retrieve product list.
     *
     * @method getProducts
     *
     * @return array<ProduitDto>
     */
    public function getProducts(): array;

    /**
     * Retrieve the professional category list.
     *
     * @method getProfessionalCategories
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getProfessionalCategories(array $options = []): array;

    /**
     * Retrieve professional situation list.
     *
     * @method getProfessionalSituations
     *
     * @param array $options
     *
     * @return array<DonneesReferencesDto>
     */
    public function getProfessionalSituations(array $options = []): array;

    /**
     * Retrieve scheduled payment eligible support list.
     *
     * @method getScheduledPaymentEligibleSupports
     *
     * @param array $options
     *
     * @return array<SupportDto>
     */
    public function getScheduledPaymentEligibleSupports(array $options): array;

    /**
     * Retrieve subscription type list.
     *
     * @method getSubscriptionTypes
     *
     * @return array<DonneesReferencesDto>
     */
    public function getSubscriptionTypes(): array;

    /**
     * Retrieve support by its ISIN code.
     *
     * @method getSupport
     *
     * @param string $isin
     *
     * @return SupportDto
     */
    public function getSupport(string $isin): SupportDto;

    /**
     * Retrieve support PDF by its ISIN code.
     *
     * @method getSupportPdf
     *
     * @param string $isin
     * @param  $options $acceptLanguage
     *
     * @return SupportDto
     */
    public function getSupportPdf(string $isin, string $acceptLanguage = '*'): SupportDto;

    /**
     * Retrieve unique mandata reference (RUM).
     *
     * @method getUniqueMandateReference
     *
     * @return string
     */
    public function getUniqueMandateReference(): string;
}
