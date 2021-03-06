<?php

namespace Mpp\ApicilClientBundle\Tests\Unit\Client;

use Mpp\ApicilClientBundle\Exception\ApicilApiException;
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
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;

class ApicilReferentialClientTest extends ApicilClientTest
{
    private $client;

    public function setUp(): void
    {
        $this->client = self::$registry->getReferential();
    }

    /**********************/
    /* getActivitySectors */
    /**********************/

    public function testGetActivitySectors()
    {
        $activitySectors = $this->client->getActivitySectors();

        $this->assertIsArray($activitySectors);
        $this->assertGreaterThan(0, count($activitySectors));
        $this->assertInstanceOf(DonneesReferencesDto::class, $activitySectors[0]);
    }

    /*******************/
    /* getApiAddresses */
    /*******************/

    public function testGetApiAddressesWithEmptyOptions()
    {
        $this->expectException(MissingOptionsException::class);

        $apiAddress = $this->client->getApiAddresses([]);
    }

    public function testGetApiAddressesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $apiAddress = $this->client->getApiAddresses(['test' => 'test']);
    }

    public function testGetApiAddresses()
    {
        $apiAddress = $this->client->getApiAddresses(['adresseKey' => 'test']);

        $this->assertIsString($apiAddress);
    }

    /*******************/
    /* getAssetClasses */
    /*******************/

    public function testGetAssetClasses()
    {
        $assetClasses = $this->client->getAssetClasses();

        $this->assertIsArray($assetClasses);
        $this->assertGreaterThan(0, count($assetClasses));
        $this->assertInstanceOf(TrClasseActifDto::class, $assetClasses[0]);
    }

    /*************/
    /* getBroker */
    /*************/

    public function testGetBroker()
    {
        $this->expectException(ApicilApiException::class);

        $broker = $this->client->getBroker(0);
    }

    /**************/
    /* getBrokers */
    /**************/

    public function testGetBrokersWithEmptyOptions()
    {
        $this->expectException(MissingOptionsException::class);

        $apiAddress = $this->client->getBrokers([]);
    }

    public function testGetBrokersWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getBrokers(['test' => 'test']);
    }

    // NOTE: 403 ERROR CODE
    // public function testGetBrokers()
    // {
    //     $brokers = $this->client->getBrokers(['type' => 'full', 'motCle' => 'e']);
    //
    //     $this->assertInternalType('array', $brokers);
    //     $this->assertGreaterThan(0, count($brokers));
    //     $this->assertInstanceOf(CourtierDto::class, $brokers[0]);
    // }

    /*****************/
    /* getCivilities */
    /*****************/

    public function testGetCivilities()
    {
        $civilities = $this->client->getCivilities();

        $this->assertIsArray($civilities);
        $this->assertGreaterThan(0, count($civilities));
        $this->assertInstanceOf(DonneesReferencesDto::class, $civilities[0]);
    }

    /*************/
    /* getCities */
    /*************/

    public function testGetCities()
    {
        $cities = $this->client->getCities();

        $this->assertIsArray($cities);
        $this->assertGreaterThan(0, count($cities));
        $this->assertInstanceOf(VilleDto::class, $cities[0]);
    }

    public function testGetCitiesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getCities(['test' => 'test']);
    }

    public function testGetCitiesWithOptions()
    {
        $cities = $this->client->getCities(['codePays' => 'FR', 'codeDepartement' => '69', 'query' => 'Villeurbanne']);

        $this->assertIsArray($cities);
        $this->assertCount(1, $cities);
        $this->assertInstanceOf(VilleDto::class, $cities[0]);
    }

    /********************/
    /* getContractTypes */
    /********************/

    public function testGetContractTypes()
    {
        $contractTypes = $this->client->getContractTypes();

        $this->assertIsArray($contractTypes);
        $this->assertGreaterThan(0, count($contractTypes));
        $this->assertInstanceOf(TypeContratDto::class, $contractTypes[0]);
    }

    /****************/
    /* getCountries */
    /****************/

    public function testGetCountries()
    {
        $countries = $this->client->getCountries();

        $this->assertIsArray($countries);
        $this->assertGreaterThan(0, count($countries));
        $this->assertInstanceOf(DonneesReferencesDto::class, $countries[0]);
    }

    public function testGetCountriesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getCountries(['test' => 'test']);
    }

    public function testGetCountriesWithOptions()
    {
        $countries = $this->client->getCountries(['query' => 'France']);

        $this->assertIsArray($countries);
        $this->assertCount(1, $countries);
        $this->assertInstanceOf(DonneesReferencesDto::class, $countries[0]);
    }

    /************************/
    /* getDeathDispositions */
    /************************/

    public function testGetDeathDispositions()
    {
        $deathDispositions = $this->client->getDeathDispositions();

        $this->assertIsArray($deathDispositions);
        $this->assertGreaterThan(0, count($deathDispositions));
        $this->assertInstanceOf(DonneesReferencesDto::class, $deathDispositions[0]);
    }

    /******************/
    /* getDepartments */
    /******************/

    public function testGetDepartments()
    {
        $departments = $this->client->getDepartments();

        $this->assertIsArray($departments);
        $this->assertGreaterThan(0, count($departments));
        $this->assertInstanceOf(DepartementDto::class, $departments[0]);
    }

    public function testGetDepartmentsWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getDepartments(['test' => 'test']);
    }

    public function testGetDepartmentsWithOptions()
    {
        $departments = $this->client->getDepartments(['codePays' => 'FR', 'query' => 'Ain']);

        $this->assertIsArray($departments);
        $this->assertCount(1, $departments);
        $this->assertInstanceOf(DepartementDto::class, $departments[0]);
    }

    /********************/
    /* getDocumentTypes */
    /********************/

    public function testGetDocumentTypes()
    {
        $documentTypes = $this->client->getDocumentTypes();

        $this->assertIsArray($documentTypes);
        $this->assertGreaterThan(0, count($documentTypes));
        $this->assertInstanceOf(SousCategorieDocumentDto::class, $documentTypes[0]);
    }

    /*************************/
    /* getFamilialSituations */
    /*************************/

    public function testGetFamilialSituations()
    {
        $familialSituations = $this->client->getFamilialSituations();

        $this->assertIsArray($familialSituations);
        $this->assertGreaterThan(0, count($familialSituations));
        $this->assertInstanceOf(DonneesReferencesDto::class, $familialSituations[0]);
    }

    /******************/
    /* getFamilyLinks */
    /******************/

    public function testGetFamilyLinks()
    {
        $familyLinks = $this->client->getFamilyLinks();

        $this->assertIsArray($familyLinks);
        $this->assertGreaterThan(0, count($familyLinks));
        $this->assertInstanceOf(DonneesReferencesDto::class, $familyLinks[0]);
    }

    public function testGetFamilyLinksWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getFamilyLinks(['test' => 'test']);
    }

    public function testGetFamilyLinksWithOptions()
    {
        $familyLinks = $this->client->getFamilyLinks(['query' => 'Enfant']);

        $this->assertIsArray($familyLinks);
        $this->assertCount(1, $familyLinks);
        $this->assertInstanceOf(DonneesReferencesDto::class, $familyLinks[0]);
    }

    /*******************/
    /* getFiscalAgents */
    /*******************/

    public function testGetFiscalAgents()
    {
        $fiscalAgents = $this->client->getFiscalAgents();

        $this->assertIsArray($fiscalAgents);
        $this->assertCount(0, $fiscalAgents);
    }

    /******************/
    /* getIncomeTypes */
    /******************/

    public function testGetIncomeTypes()
    {
        $incomeTypes = $this->client->getIncomeTypes();

        $this->assertIsArray($incomeTypes);
        $this->assertGreaterThan(0, count($incomeTypes));
        $this->assertInstanceOf(TypePatrimoineOuRevenuDto::class, $incomeTypes[0]);
    }

    /*********************************/
    /* getInvestmentEligibleSupports */
    /*********************************/

    public function testGetInvestmentEligibleSupports()
    {
        $investmentEligibleSupports = $this->client->getInvestmentEligibleSupports('IC');

        $this->assertIsArray($investmentEligibleSupports);
        $this->assertGreaterThan(0, count($investmentEligibleSupports));
        $this->assertInstanceOf(ListeDesSupports::class, $investmentEligibleSupports[0]);
    }

    public function testGetInvestmentEligibleSupportsWithWrongProductReference()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getInvestmentEligibleSupports('test');
    }

    public function testGetInvestmentEligibleSupportsWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getInvestmentEligibleSupports('IC', ['test' => 'test']);
    }

    /**********************/
    /* getInvestmentGoals */
    /**********************/

    public function testGetInvestmentGoals()
    {
        $investmentGoals = $this->client->getInvestmentGoals();

        $this->assertIsArray($investmentGoals);
        $this->assertGreaterThan(0, count($investmentGoals));
        $this->assertInstanceOf(DonneesReferencesActifDto::class, $investmentGoals[0]);
    }

    /*************************/
    /* getInvestmentHorizons */
    /*************************/

    public function testGetInvestmentHorizons()
    {
        $investmentHorizons = $this->client->getInvestmentHorizons();

        $this->assertIsArray($investmentHorizons);
        $this->assertGreaterThan(0, count($investmentHorizons));
        $this->assertInstanceOf(TrClasseActifDto::class, $investmentHorizons[0]);
    }

    /***********/
    /* getJobs */
    /***********/

    public function testGetJobs()
    {
        $jobs = $this->client->getJobs();

        $this->assertIsArray($jobs);
        $this->assertGreaterThan(0, count($jobs));
        $this->assertInstanceOf(DonneesReferencesDto::class, $jobs[0]);
    }

    /*************************/
    /* getMatrimonialRegimes */
    /*************************/

    public function testGetMatrimonialRegimes()
    {
        $matrimonialRegimes = $this->client->getMatrimonialRegimes();

        $this->assertIsArray($matrimonialRegimes);
        $this->assertGreaterThan(0, count($matrimonialRegimes));
        $this->assertInstanceOf(DonneesReferencesDto::class, $matrimonialRegimes[0]);
    }

    /********************/
    /* getNationalities */
    /********************/

    public function testGetNationalities()
    {
        $nationalities = $this->client->getNationalities();

        $this->assertIsArray($nationalities);
        $this->assertGreaterThan(0, count($nationalities));
        $this->assertInstanceOf(DonneesReferencesDto::class, $nationalities[0]);
    }

    public function testGetNationalitiesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getNationalities(['test' => 'test']);
    }

    public function testGetNationalitiesWithOptions()
    {
        $nationalities = $this->client->getNationalities(['query' => 'FR']);

        $this->assertIsArray($nationalities);
        $this->assertCount(1, $nationalities);
        $this->assertInstanceOf(DonneesReferencesDto::class, $nationalities[0]);
    }

    /***********************/
    /* getOutstandingCosts */
    /***********************/

    public function testGetOutstandingCosts()
    {
        $outstandingCosts = $this->client->getOutstandingCosts('IC');

        $this->assertIsArray($outstandingCosts);
        $this->assertGreaterThan(0, count($outstandingCosts));
        $this->assertInstanceOf(FraisEncoursDto::class, $outstandingCosts[0]);
    }

    public function testGetOutstandingCostsWithWrongProductReference()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getOutstandingCosts('test');
    }

    /********************/
    /* getParentalLinks */
    /********************/

    public function testGetParentalLinks()
    {
        $parentalLinks = $this->client->getParentalLinks();

        $this->assertIsArray($parentalLinks);
        $this->assertGreaterThan(0, count($parentalLinks));
        $this->assertInstanceOf(LienParenteRefDto::class, $parentalLinks[0]);
    }

    /********************/
    /* getPatrimonyTypes */
    /********************/

    public function testGetPatrimonyTypes()
    {
        $patrimonyTypes = $this->client->getPatrimonyTypes();

        $this->assertIsArray($patrimonyTypes);
        $this->assertGreaterThan(0, count($patrimonyTypes));
        $this->assertInstanceOf(TypePatrimoineOuRevenuDto::class, $patrimonyTypes[0]);
    }

    /*************************/
    /* getPaymentFrequencies */
    /*************************/

    public function testGetPaymentFrequencies()
    {
        $paymentFrequencies = $this->client->getPaymentFrequencies('IC');

        $this->assertIsArray($paymentFrequencies);
        $this->assertGreaterThan(0, count($paymentFrequencies));
        $this->assertInstanceOf(PeriodiciteDto::class, $paymentFrequencies[0]);
    }

    public function testGetPaymentFrequenciesWithWrongProductReference()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getPaymentFrequencies('test');
    }

    /*********************/
    /* getPaymentMethods */
    /*********************/

    public function testGetPaymentMethods()
    {
        $paymentMethods = $this->client->getPaymentMethods(1, []);

        $this->assertIsArray($paymentMethods);
        $this->assertGreaterThan(0, count($paymentMethods));
        $this->assertInstanceOf(DonneesReferencesDto::class, $paymentMethods[0]);
    }

    public function testGetPaymentMethodsWithWrongBrokerId()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getPaymentMethods(0, []);
    }

    public function testGetPaymentMethodsWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getPaymentMethods(1, ['test' => 'test']);
    }

    public function testPaymentMethodsWithOptions()
    {
        $paymentMethods = $this->client->getPaymentMethods(1, ['mode' => 'INVESTISSEMENT']);

        $this->assertIsArray($paymentMethods);
        $this->assertGreaterThan(0, count($paymentMethods));
        $this->assertInstanceOf(DonneesReferencesDto::class, $paymentMethods[0]);
    }

    /*****************/
    /* getPhoneCodes */
    /*****************/

    public function testGetPhoneCodes()
    {
        $phoneCodes = $this->client->getPhoneCodes();

        $this->assertIsArray($phoneCodes);
        $this->assertGreaterThan(0, count($phoneCodes));
        $this->assertInstanceOf(TrIndicatifDto::class, $phoneCodes[0]);
    }

    public function testGetPhoneCodesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getNationalities(['test' => 'test']);
    }

    public function testGetPhoneCodesWithOptions()
    {
        $phoneCodes = $this->client->getNationalities(['query' => 'FR']);

        $this->assertIsArray($phoneCodes);
        $this->assertCount(1, $phoneCodes);
        $this->assertInstanceOf(TrIndicatifDto::class, $phoneCodes[0]);
    }

    /****************************************/
    /* getPoliticallyExposedPersonFunctions */
    /****************************************/

    public function testGetPoliticallyExposedPersonFunctions()
    {
        $functions = $this->client->getPoliticallyExposedPersonFunctions();

        $this->assertIsArray($functions);
        $this->assertGreaterThan(0, count($functions));
        $this->assertInstanceOf(DonneesReferencesObjetDto::class, $functions[0]);
    }

    /**************************************/
    /* getPoliticallyExposedPersonNatures */
    /**************************************/

    public function testGetPoliticallyExposedPersonNatures()
    {
        $natures = $this->client->getPoliticallyExposedPersonNatures();

        $this->assertIsArray($natures);
        $this->assertGreaterThan(0, count($natures));
        $this->assertInstanceOf(DonneesReferencesDto::class, $natures[0]);
    }

    /********************************************/
    /* getPoliticallyExposedPersonParentalLinks */
    /********************************************/

    public function testGetPoliticallyExposedPersonLinks()
    {
        $links = $this->client->getPoliticallyExposedPersonParentalLinks();

        $this->assertIsArray($links);
        $this->assertGreaterThan(0, count($links));
        $this->assertInstanceOf(DonneesReferencesObjetDto::class, $links[0]);
    }

    /**************/
    /* getProduct */
    /**************/

    public function testGetProduct()
    {
        $product = $this->client->getProduct('IC');

        $this->assertInstanceOf(ProduitDto::class, $product);
    }

    public function testGetProductWithWrongProductReference()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getProduct('test');
    }

    /***************/
    /* getProducts */
    /***************/

    public function testGetProducts()
    {
        $products = $this->client->getProducts();

        $this->assertIsArray($products);
        $this->assertGreaterThan(0, count($products));
        $this->assertInstanceOf(ProduitDto::class, $products[0]);
    }

    /*****************************/
    /* getProfessionalCategories */
    /*****************************/

    public function testGetProfessionalCategories()
    {
        $professionalCategories = $this->client->getProfessionalCategories();

        $this->assertIsArray($professionalCategories);
        $this->assertGreaterThan(0, count($professionalCategories));
        $this->assertInstanceOf(DonneesReferencesDto::class, $professionalCategories[0]);
    }

    public function testGetProfessionalCategoriesWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getProfessionalCategories(['test' => 'test']);
    }

    public function testGetProfessionalCategoriesWithOptions()
    {
        $professionalCategories = $this->client->getProfessionalCategories(['query' => 'Agriculteur']);

        $this->assertIsArray($professionalCategories);
        $this->assertCount(1, $professionalCategories);
        $this->assertInstanceOf(DonneesReferencesDto::class, $professionalCategories[0]);
    }

    /*****************************/
    /* getProfessionalSituations */
    /*****************************/

    public function testGetProfessionalSituations()
    {
        $professionalSituations = $this->client->getProfessionalSituations();

        $this->assertIsArray($professionalSituations);
        $this->assertGreaterThan(0, count($professionalSituations));
        $this->assertInstanceOf(DonneesReferencesDto::class, $professionalSituations[0]);
    }

    public function testGetProfessionalSituationsWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getProfessionalCategories(['test' => 'test']);
    }

    public function testGetProfessionalSituationsWithOptions()
    {
        $professionalSituations = $this->client->getProfessionalCategories(['query' => 'Actif']);

        $this->assertIsArray($professionalSituations);
        $this->assertCount(1, $professionalSituations);
        $this->assertInstanceOf(DonneesReferencesDto::class, $professionalSituations[0]);
    }

    /***************************************/
    /* getScheduledPaymentEligibleSupports */
    /***************************************/

    public function testGetScheduledPaymentEligibleSupports()
    {
        $supports = $this->client->getScheduledPaymentEligibleSupports(['codeProduit' => 'IC']);

        $this->assertIsArray($supports);
        $this->assertGreaterThan(0, count($supports));
        $this->assertInstanceOf(SupportDto::class, $supports[0]);
    }

    public function testGetScheduledPaymentEligibleSupportsWithWrongOptions()
    {
        $this->expectException(UndefinedOptionsException::class);

        $this->client->getScheduledPaymentEligibleSupports(['test' => 'test']);
    }

    /************************/
    /* getSubscriptionTypes */
    /************************/

    public function testGetSubscriptionTypes()
    {
        $subscriptionTypes = $this->client->getSubscriptionTypes();

        $this->assertIsArray($subscriptionTypes);
        $this->assertGreaterThan(0, count($subscriptionTypes));
        $this->assertInstanceOf(DonneesReferencesDto::class, $subscriptionTypes[0]);
    }

    /**************/
    /* getSupport */
    /**************/

    public function testGetSupport()
    {
        $support = $this->client->getSupport('IC');

        $this->assertInstanceOf(SupportDto::class, $support);
    }

    public function testGetSupportWithWrongIsin()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getSupport('test');
    }

    /*****************/
    /* getSupportPdf */
    /*****************/

    public function testGetSupportPdf()
    {
        $support = $this->client->getSupportPdf('IC');

        $this->assertInstanceOf(SupportDto::class, $support);
    }

    public function testGetSupportPdfWithWrongIsin()
    {
        $this->expectException(ApicilApiException::class);

        $this->client->getSupportPdf('test');
    }

    /*****************************/
    /* getUniqueMandateReference */
    /*****************************/

    public function testGetUniqueMandateReference()
    {
        $support = $this->client->getUniqueMandateReference();

        $this->assertIsString($support);
    }
}
