<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\CourtierDto;
use Mpp\ApicilClientBundle\Model\DepartementDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesActifDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesDto;
use Mpp\ApicilClientBundle\Model\DonneesReferencesObjetDto;
use Mpp\ApicilClientBundle\Model\FraisEncoursDto;
use Mpp\ApicilClientBundle\Model\LienParenteRefDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\PeriodiciteDto;
use Mpp\ApicilClientBundle\Model\ProduitDto;
use Mpp\ApicilClientBundle\Model\SousCategorieDocumentDto;
use Mpp\ApicilClientBundle\Model\SupportDto;
use Mpp\ApicilClientBundle\Model\TrClasseActifDto;
use Mpp\ApicilClientBundle\Model\TrIndicatifDto;
use Mpp\ApicilClientBundle\Model\TypeContratDto;
use Mpp\ApicilClientBundle\Model\TypePatrimoineOuRevenuDto;
use Mpp\ApicilClientBundle\Model\VilleDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilReferentialClientOptionsResolver;

class ApicilReferentialClient extends AbstractApicilClientDomain implements ApicilReferentialClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function getActivitySectors(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/secteurActivite', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetActivitySectorsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getApiAddresses(array $options): string
    {
        return $this->request('GET', '/adresseAPI', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetApiAddressesOptions($options),
        ])->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetClasses(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TrClasseActifDto::class), 'GET', '/classeActifsAllocation');
    }

    /**
     * {@inheritdoc}
     */
    public function getBroker(int $id): CourtierDto
    {
        return $this->requestAndPopulate(CourtierDto::class, 'GET', sprintf('/courtier/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getBrokers(array $options): array
    {
        $options = ApicilReferentialClientOptionsResolver::resolveGetBrokersOptions($options);

        return $this->requestAndPopulate(sprintf('%s[]', CourtierDto::class), 'GET', sprintf('/courtiers/%s', $options['type']), [
            'query' => $options,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCivilities(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/civilite');
    }

    /**
     * {@inheritdoc}
     */
    public function getCities(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', VilleDto::class), 'GET', '/ville', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetCitiesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getContractTypes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TypeContratDto::class), 'GET', '/typecontrat');
    }

    /**
     * {@inheritdoc}
     */
    public function getCountries(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/pays', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetCountriesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getDeathDispositions(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/dispositionDeces');
    }

    /**
     * {@inheritdoc}
     */
    public function getDepartments(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DepartementDto::class), 'GET', '/departement', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetDepartmentsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentTypes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', SousCategorieDocumentDto::class), 'GET', '/typeDocument');
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilialSituations(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/situationFamiliale');
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyLinks(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/lienFamilial', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetFamilyLinksOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getFiscalAgents(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesActifDto::class), 'GET', '/mandataireFiscal');
    }

    /**
     * {@inheritdoc}
     */
    public function getIncomeTypes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TypePatrimoineOuRevenuDto::class), 'GET', '/typeRevenu');
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupports(string $productReference, array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ListeDesSupports::class), 'GET', sprintf('/support/investissement/%s', $productReference), [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetInvestmentEligibleSupportsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentGoals(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesActifDto::class), 'GET', '/objectifInvestissement');
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentHorizons(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TrClasseActifDto::class), 'GET', '/horizonInvestissement');
    }

    /**
     * {@inheritdoc}
     */
    public function getJobs(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/profession');
    }

    /**
     * {@inheritdoc}
     */
    public function getMatrimonialRegimes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/regimeMatrimonial');
    }

    /**
     * {@inheritdoc}
     */
    public function getNationalities(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/nationalite', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetNationalitiesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getOutstandingCosts(string $productReference): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', FraisEncoursDto::class), 'GET', sprintf('/uniteCompte/frais/%s', $productReference));
    }

    /**
     * {@inheritdoc}
     */
    public function getParentalLinks(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', LienParenteRefDto::class), 'GET', '/lienParente');
    }

    /**
     * {@inheritdoc}
     */
    public function getPatrimonyTypes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TypePatrimoineOuRevenuDto::class), 'GET', '/typePatrimoine');
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentFrequencies(string $productReference): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', PeriodiciteDto::class), 'GET', sprintf('/periodicite/%s', $productReference));
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMethods(string $brokerId, array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', sprintf('/modePaiement/%s', $brokerId), [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetPaymentMethodsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCodes(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', TrIndicatifDto::class), 'GET', '/telephone/indicatif', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetPhoneCodesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getPoliticallyExposedPersonFunctions(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesObjetDto::class), 'GET', '/personnePolitiquementExposee/fonction');
    }

    /**
     * {@inheritdoc}
     */
    public function getPoliticallyExposedPersonLinkNatures(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/personnePolitiquementExposee/natureLien');
    }

    /**
     * {@inheritdoc}
     */
    public function getPoliticallyExposedPersonParentalLinks(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesObjetDto::class), 'GET', '/personnePolitiquementExposee/lienParente');
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct(string $reference): ProduitDto
    {
        return $this->requestAndPopulate(ProduitDto::class, 'GET', sprintf('/produit/%s', $reference));
    }

    /**
     * {@inheritdoc}
     */
    public function getProducts(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ProduitDto::class), 'GET', '/produit');
    }

    /**
     * {@inheritdoc}
     */
    public function getProfessionalCategories(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/categorieProfessionnelle', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetProfessionalCategoriesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getProfessionalSituations(array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/situationProfessionelle', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetProfessionalSituationsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getScheduledPaymentEligibleSupports(array $options): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', SupportDto::class), 'GET', '/support/vp', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetScheduledPaymentEligibleSupportsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscriptionTypes(): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', DonneesReferencesDto::class), 'GET', '/typeSouscription');
    }

    /**
     * {@inheritdoc}
     */
    public function getSupport(string $isin): SupportDto
    {
        return $this->requestAndPopulate(SupportDto::class, 'GET', sprintf('/support/%s/fiche', $isin));
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportPdf(string $isin, string $acceptLanguage = '*'): SupportDto
    {
        return $this->requestAndPopulate(SupportDto::class, 'GET', sprintf('/support/%s/pdf', $isin), [
            'headers' => [
                'Accept-Language' => $acceptLanguage,
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueMandateReference(): string
    {
        return $this->request('GET', '/rum')->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'referential';
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/referentiel';
    }
}
