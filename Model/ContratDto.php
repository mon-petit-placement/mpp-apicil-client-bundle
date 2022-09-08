<?php

namespace Mpp\ApicilClientBundle\Model;

use DateTime;

class ContratDto
{
    /**
     * @var bool|null
     */
    private $afficherDonnesFiscale;

    /**
     * @var string|null
     */
    private $banque;

    /**
     * @var string|null
     */
    private $cadreFiscal;

    /**
     * @var float|null
     */
    private $capitalDeces;

    /**
     * @var string|null
     */
    private $classeCotisation;

    /**
     * @var string|null
     */
    private $codeProduit;

    /**
     * @var string|null
     */
    private $contratId;

    /**
     * @var int|null
     */
    private $courtierId;

    /**
     * @var float|null
     */
    private $cumulPrimesBrutesVersees;

    /**
     * @var float|null
     */
    private $cumulRachatDerniereAnnee;

    /**
     * @var float|null
     */
    private $cumulRachatPartiel;

    /**
     * @var DateTime|null
     */
    private $dateDeFinFidelite;

    /**
     * @var DateTime|null
     */
    private $dateDerniereConnexion;

    /**
     * @var DateTime|null
     */
    private $dateEffet;

    /**
     * @var DateTime|null
     */
    private $dateEffetFiscal;

    /**
     * @var DateTime|null
     */
    private $dateEncaissement;

    /**
     * @var DateTime|null
     */
    private $dateRadiation;

    /**
     * @var DateTime|null
     */
    private $dateValorisationEncours;

    /**
     * @var DateTime|null
     */
    private $dateVersementInitial;

    /**
     * @var string|null
     */
    private $disclaimer;

    /**
     * @var string|null
     */
    private $dureeContrat;

    /**
     * @var string|null
     */
    private $entrepriseSouscriptrice;

    /**
     * @var bool|null
     */
    private $estTypeProduitIndividuel;

    /**
     * @var float|null
     */
    private $fraisMinimumArbitrage;

    /**
     * @var string|null
     */
    private $garantieDeces;

    /**
     * @var IdentiteDto|null
     */
    private $identiteAssure;

    /**
     * @var IdentiteDto|null
     */
    private $identiteCoSouscripteur;

    /**
     * @var array|null
     */
    private $listTypeConformite;

    /**
     * @var array|null
     */
    private $listTypeConformiteSelectionne;

    /**
     * @var array|null
     */
    private $listTypesContrat;

    /**
     * @var array|null
     */
    private $listeIban;

    /**
     * @var string|null
     */
    private $mandatDeGestion;

    /**
     * @var float|null
     */
    private $montantAvanceEncours;

    /**
     * @var float|null
     */
    private $montantEncours;

    /**
     * @var float|null
     */
    private $montantEncoursFondsEuro;

    /**
     * @var float|null
     */
    private $montantEncoursFondsEuroSpecifique;

    /**
     * @var bool|null
     */
    private $nantissement;

    /**
     * @var string|null
     */
    private $nomContrat;

    /**
     * @var array|null
     */
    private $nuProprietaire;

    /**
     * @var int|null
     */
    private $numConvention;

    /**
     * @var string|null
     */
    private $numeroClient;

    /**
     * @var string|null
     */
    private $numeroSiret;

    /**
     * @var string|null
     */
    private $objectifInvestissement;

    /**
     * @var array|null
     */
    private $operationDtoImpls;

    /**
     * @var string|null
     */
    private $option;

    /**
     * @var string|null
     */
    private $optionPack;

    /**
     * @var array|null
     */
    private $originesDestinationsDtoImpls;

    /**
     * @var string|null
     */
    private $patrimoine;

    /**
     * @var string|null
     */
    private $paysFiscalLibelle;

    /**
     * @var string|null
     */
    private $paysResidenceFiscale;

    /**
     * @var bool|null
     */
    private $pea;

    /**
     * @var bool|null
     */
    private $pep;

    /**
     * @var string|null
     */
    private $personnePolitiqueExposee;

    /**
     * @var SupportContratDto[]|null
     */
    private $portefeuille;

    /**
     * @var bool|null
     */
    private $prevoyancePack;

    /**
     * @var float|null
     */
    private $primesBrutesVerseesApresTransfert;

    /**
     * @var float|null
     */
    private $primesBrutesVerseesAvantTransfert;

    /**
     * @var ProcedureDto|null
     */
    private $procedure;

    /**
     * @var string|null
     */
    private $profilFinancier;

    /**
     * @var string|null
     */
    private $profilGestion;

    /**
     * @var string|null
     */
    private $profilGestionCode;

    /**
     * @var float|null
     */
    private $rachatPartielProgramme;

    /**
     * @var string|null
     */
    private $rachatPartielProgrammeActive;

    /**
     * @var string|null
     */
    private $regimeSocial;

    /**
     * @var bool|null
     */
    private $residentFiscalFrancais;

    /**
     * @var string|null
     */
    private $revenus;

    /**
     * @var DateTime|null
     */
    private $signatureCP;

    /**
     * @var IdentiteDto|null
     */
    private $souscripteur;

    /**
     * @var string|null
     */
    private $statut;

    /**
     * @var string|null
     */
    private $statutCode;

    /**
     * @var float|null
     */
    private $tauxFraisArbitrage;

    /**
     * @var float|null
     */
    private $tauxFraisEncoursFondsEuro;

    /**
     * @var float|null
     */
    private $tauxFraisEncoursFondsEuroSpecifique;

    /**
     * @var float|null
     */
    private $tauxFraisEncoursUniteCompte;

    /**
     * @var float|null
     */
    private $tauxFraisVersement;

    /**
     * @var float|null
     */
    private $totalPrimesMax;

    /**
     * @var float|null
     */
    private $transfert;

    /**
     * @var string|null
     */
    private $typeProduit;

    /**
     * @var array|null
     */
    private $typesContrat;

    /**
     * @var array|null
     */
    private $typesContratSelectionne;

    /**
     * @var array|null
     */
    private $usufruitiers;

    /**
     * @var float|null
     */
    private $valeurRachat;

    /**
     * @var float|null
     */
    private $versementProgramme;

    /**
     * @var string|null
     */
    private $versementProgrammeActive;

    /**
     * @return bool|null
     */
    public function getAfficherDonnesFiscale(): ?bool
    {
        return $this->afficherDonnesFiscale;
    }

    /**
     * @param bool|null $afficherDonnesFiscale
     *
     * @return self
     */
    public function setAfficherDonnesFiscale(?bool $afficherDonnesFiscale): self
    {
        $this->afficherDonnesFiscale = $afficherDonnesFiscale;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBanque(): ?string
    {
        return $this->banque;
    }

    /**
     * @param string|null $banque
     *
     * @return self
     */
    public function setBanque(?string $banque): self
    {
        $this->banque = $banque;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCadreFiscal(): ?string
    {
        return $this->cadreFiscal;
    }

    /**
     * @param string|null $cadreFiscal
     *
     * @return self
     */
    public function setCadreFiscal(?string $cadreFiscal): self
    {
        $this->cadreFiscal = $cadreFiscal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCapitalDeces(): ?float
    {
        return $this->capitalDeces;
    }

    /**
     * @param float|null $capitalDeces
     *
     * @return self
     */
    public function setCapitalDeces(?float $capitalDeces): self
    {
        $this->capitalDeces = $capitalDeces;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClasseCotisation(): ?string
    {
        return $this->classeCotisation;
    }

    /**
     * @param string|null $classeCotisation
     *
     * @return self
     */
    public function setClasseCotisation(?string $classeCotisation): self
    {
        $this->classeCotisation = $classeCotisation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeProduit(): ?string
    {
        return $this->codeProduit;
    }

    /**
     * @param string|null $codeProduit
     *
     * @return self
     */
    public function setCodeProduit(?string $codeProduit): self
    {
        $this->codeProduit = $codeProduit;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContratId(): ?string
    {
        return $this->contratId;
    }

    /**
     * @param string|null $contratId
     *
     * @return self
     */
    public function setContratId(?string $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCourtierId(): ?int
    {
        return $this->courtierId;
    }

    /**
     * @param int|null $courtierId
     *
     * @return self
     */
    public function setCourtierId(?int $courtierId): self
    {
        $this->courtierId = $courtierId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCumulPrimesBrutesVersees(): ?float
    {
        return $this->cumulPrimesBrutesVersees;
    }

    /**
     * @param float|null $cumulPrimesBrutesVersees
     *
     * @return self
     */
    public function setCumulPrimesBrutesVersees(?float $cumulPrimesBrutesVersees): self
    {
        $this->cumulPrimesBrutesVersees = $cumulPrimesBrutesVersees;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCumulRachatDerniereAnnee(): ?float
    {
        return $this->cumulRachatDerniereAnnee;
    }

    /**
     * @param float|null $cumulRachatDerniereAnnee
     *
     * @return self
     */
    public function setCumulRachatDerniereAnnee(?float $cumulRachatDerniereAnnee): self
    {
        $this->cumulRachatDerniereAnnee = $cumulRachatDerniereAnnee;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCumulRachatPartiel(): ?float
    {
        return $this->cumulRachatPartiel;
    }

    /**
     * @param float|null $cumulRachatPartiel
     *
     * @return self
     */
    public function setCumulRachatPartiel(?float $cumulRachatPartiel): self
    {
        $this->cumulRachatPartiel = $cumulRachatPartiel;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateDeFinFidelite(): ?DateTime
    {
        return $this->dateDeFinFidelite;
    }

    /**
     * @param DateTime|null $dateDeFinFidelite
     *
     * @return self
     */
    public function setDateDeFinFidelite(?DateTime $dateDeFinFidelite): self
    {
        $this->dateDeFinFidelite = $dateDeFinFidelite;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateDerniereConnexion(): ?DateTime
    {
        return $this->dateDerniereConnexion;
    }

    /**
     * @param DateTime|null $dateDerniereConnexion
     *
     * @return self
     */
    public function setDateDerniereConnexion(?DateTime $dateDerniereConnexion): self
    {
        $this->dateDerniereConnexion = $dateDerniereConnexion;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateEffet(): ?DateTime
    {
        return $this->dateEffet;
    }

    /**
     * @param DateTime|null $dateEffet
     *
     * @return self
     */
    public function setDateEffet(?DateTime $dateEffet): self
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateEffetFiscal(): ?DateTime
    {
        return $this->dateEffetFiscal;
    }

    /**
     * @param DateTime|null $dateEffetFiscal
     *
     * @return self
     */
    public function setDateEffetFiscal(?DateTime $dateEffetFiscal): self
    {
        $this->dateEffetFiscal = $dateEffetFiscal;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateEncaissement(): ?DateTime
    {
        return $this->dateEncaissement;
    }

    /**
     * @param DateTime|null $dateEncaissement
     *
     * @return self
     */
    public function setDateEncaissement(?DateTime $dateEncaissement): self
    {
        $this->dateEncaissement = $dateEncaissement;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateRadiation(): ?DateTime
    {
        return $this->dateRadiation;
    }

    /**
     * @param DateTime|null $dateRadiation
     *
     * @return self
     */
    public function setDateRadiation(?DateTime $dateRadiation): self
    {
        $this->dateRadiation = $dateRadiation;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateValorisationEncours(): ?DateTime
    {
        return $this->dateValorisationEncours;
    }

    /**
     * @param DateTime|null $dateValorisationEncours
     *
     * @return self
     */
    public function setDateValorisationEncours(?DateTime $dateValorisationEncours): self
    {
        $this->dateValorisationEncours = $dateValorisationEncours;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateVersementInitial(): ?DateTime
    {
        return $this->dateVersementInitial;
    }

    /**
     * @param DateTime|null $dateVersementInitial
     *
     * @return self
     */
    public function setDateVersementInitial(?DateTime $dateVersementInitial): self
    {
        $this->dateVersementInitial = $dateVersementInitial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisclaimer(): ?string
    {
        return $this->disclaimer;
    }

    /**
     * @param string|null $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(?string $disclaimer): self
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDureeContrat(): ?string
    {
        return $this->dureeContrat;
    }

    /**
     * @param string|null $dureeContrat
     *
     * @return self
     */
    public function setDureeContrat(?string $dureeContrat): self
    {
        $this->dureeContrat = $dureeContrat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntrepriseSouscriptrice(): ?string
    {
        return $this->entrepriseSouscriptrice;
    }

    /**
     * @param string|null $entrepriseSouscriptrice
     *
     * @return self
     */
    public function setEntrepriseSouscriptrice(?string $entrepriseSouscriptrice): self
    {
        $this->entrepriseSouscriptrice = $entrepriseSouscriptrice;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEstTypeProduitIndividuel(): ?bool
    {
        return $this->estTypeProduitIndividuel;
    }

    /**
     * @param bool|null $estTypeProduitIndividuel
     *
     * @return self
     */
    public function setEstTypeProduitIndividuel(?bool $estTypeProduitIndividuel): self
    {
        $this->estTypeProduitIndividuel = $estTypeProduitIndividuel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFraisMinimumArbitrage(): ?float
    {
        return $this->fraisMinimumArbitrage;
    }

    /**
     * @param float|null $fraisMinimumArbitrage
     *
     * @return self
     */
    public function setFraisMinimumArbitrage(?float $fraisMinimumArbitrage): self
    {
        $this->fraisMinimumArbitrage = $fraisMinimumArbitrage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGarantieDeces(): ?string
    {
        return $this->garantieDeces;
    }

    /**
     * @param string|null $garantieDeces
     *
     * @return self
     */
    public function setGarantieDeces(?string $garantieDeces): self
    {
        $this->garantieDeces = $garantieDeces;

        return $this;
    }

    /**
     * @return IdentiteDto|null
     */
    public function getIdentiteAssure(): ?IdentiteDto
    {
        return $this->identiteAssure;
    }

    /**
     * @param IdentiteDto|null $identiteAssure
     *
     * @return self
     */
    public function setIdentiteAssure(?IdentiteDto $identiteAssure): self
    {
        $this->identiteAssure = $identiteAssure;

        return $this;
    }

    /**
     * @return IdentiteDto|null
     */
    public function getIdentiteCoSouscripteur(): ?IdentiteDto
    {
        return $this->identiteCoSouscripteur;
    }

    /**
     * @param IdentiteDto|null $identiteCoSouscripteur
     *
     * @return self
     */
    public function setIdentiteCoSouscripteur(?IdentiteDto $identiteCoSouscripteur): self
    {
        $this->identiteCoSouscripteur = $identiteCoSouscripteur;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getListTypeConformite(): ?array
    {
        return $this->listTypeConformite;
    }

    /**
     * @param array|null $listTypeConformite
     *
     * @return self
     */
    public function setListTypeConformite(?array $listTypeConformite): self
    {
        $this->listTypeConformite = $listTypeConformite;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getListTypeConformiteSelectionne(): ?array
    {
        return $this->listTypeConformiteSelectionne;
    }

    /**
     * @param array|null $listTypeConformiteSelectionne
     *
     * @return self
     */
    public function setListTypeConformiteSelectionne(?array $listTypeConformiteSelectionne): self
    {
        $this->listTypeConformiteSelectionne = $listTypeConformiteSelectionne;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getListTypesContrat(): ?array
    {
        return $this->listTypesContrat;
    }

    /**
     * @param array|null $listTypesContrat
     *
     * @return self
     */
    public function setListTypesContrat(?array $listTypesContrat): self
    {
        $this->listTypesContrat = $listTypesContrat;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getListeIban(): ?array
    {
        return $this->listeIban;
    }

    /**
     * @param array|null $listeIban
     *
     * @return self
     */
    public function setListeIban(?array $listeIban): self
    {
        $this->listeIban = $listeIban;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandatDeGestion(): ?string
    {
        return $this->mandatDeGestion;
    }

    /**
     * @param string|null $mandatDeGestion
     *
     * @return self
     */
    public function setMandatDeGestion(?string $mandatDeGestion): self
    {
        $this->mandatDeGestion = $mandatDeGestion;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantAvanceEncours(): ?float
    {
        return $this->montantAvanceEncours;
    }

    /**
     * @param float|null $montantAvanceEncours
     *
     * @return self
     */
    public function setMontantAvanceEncours(?float $montantAvanceEncours): self
    {
        $this->montantAvanceEncours = $montantAvanceEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantEncours(): ?float
    {
        return $this->montantEncours;
    }

    /**
     * @param float|null $montantEncours
     *
     * @return self
     */
    public function setMontantEncours(?float $montantEncours): self
    {
        $this->montantEncours = $montantEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantEncoursFondsEuro(): ?float
    {
        return $this->montantEncoursFondsEuro;
    }

    /**
     * @param float|null $montantEncoursFondsEuro
     *
     * @return self
     */
    public function setMontantEncoursFondsEuro(?float $montantEncoursFondsEuro): self
    {
        $this->montantEncoursFondsEuro = $montantEncoursFondsEuro;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantEncoursFondsEuroSpecifique(): ?float
    {
        return $this->montantEncoursFondsEuroSpecifique;
    }

    /**
     * @param float|null $montantEncoursFondsEuroSpecifique
     *
     * @return self
     */
    public function setMontantEncoursFondsEuroSpecifique(?float $montantEncoursFondsEuroSpecifique): self
    {
        $this->montantEncoursFondsEuroSpecifique = $montantEncoursFondsEuroSpecifique;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNantissement(): ?bool
    {
        return $this->nantissement;
    }

    /**
     * @param bool|null $nantissement
     *
     * @return self
     */
    public function setNantissement(?bool $nantissement): self
    {
        $this->nantissement = $nantissement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomContrat(): ?string
    {
        return $this->nomContrat;
    }

    /**
     * @param string|null $nomContrat
     *
     * @return self
     */
    public function setNomContrat(?string $nomContrat): self
    {
        $this->nomContrat = $nomContrat;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getNuProprietaire(): ?array
    {
        return $this->nuProprietaire;
    }

    /**
     * @param array|null $nuProprietaire
     *
     * @return self
     */
    public function setNuProprietaire(?array $nuProprietaire): self
    {
        $this->nuProprietaire = $nuProprietaire;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumConvention(): ?int
    {
        return $this->numConvention;
    }

    /**
     * @param int|null $numConvention
     *
     * @return self
     */
    public function setNumConvention(?int $numConvention): self
    {
        $this->numConvention = $numConvention;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroClient(): ?string
    {
        return $this->numeroClient;
    }

    /**
     * @param string|null $numeroClient
     *
     * @return self
     */
    public function setNumeroClient(?string $numeroClient): self
    {
        $this->numeroClient = $numeroClient;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroSiret(): ?string
    {
        return $this->numeroSiret;
    }

    /**
     * @param string|null $numeroSiret
     *
     * @return self
     */
    public function setNumeroSiret(?string $numeroSiret): self
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObjectifInvestissement(): ?string
    {
        return $this->objectifInvestissement;
    }

    /**
     * @param string|null $objectifInvestissement
     *
     * @return self
     */
    public function setObjectifInvestissement(?string $objectifInvestissement): self
    {
        $this->objectifInvestissement = $objectifInvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getOperationDtoImpls(): ?array
    {
        return $this->operationDtoImpls;
    }

    /**
     * @param array|null $operationDtoImpls
     *
     * @return self
     */
    public function setOperationDtoImpls(?array $operationDtoImpls): self
    {
        $this->operationDtoImpls = $operationDtoImpls;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * @param string|null $option
     *
     * @return self
     */
    public function setOption(?string $option): self
    {
        $this->option = $option;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptionPack(): ?string
    {
        return $this->optionPack;
    }

    /**
     * @param string|null $optionPack
     *
     * @return self
     */
    public function setOptionPack(?string $optionPack): self
    {
        $this->optionPack = $optionPack;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getOriginesDestinationsDtoImpls(): ?array
    {
        return $this->originesDestinationsDtoImpls;
    }

    /**
     * @param array|null $originesDestinationsDtoImpls
     *
     * @return self
     */
    public function setOriginesDestinationsDtoImpls(?array $originesDestinationsDtoImpls): self
    {
        $this->originesDestinationsDtoImpls = $originesDestinationsDtoImpls;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPatrimoine(): ?string
    {
        return $this->patrimoine;
    }

    /**
     * @param string|null $patrimoine
     *
     * @return self
     */
    public function setPatrimoine(?string $patrimoine): self
    {
        $this->patrimoine = $patrimoine;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaysFiscalLibelle(): ?string
    {
        return $this->paysFiscalLibelle;
    }

    /**
     * @param string|null $paysFiscalLibelle
     *
     * @return self
     */
    public function setPaysFiscalLibelle(?string $paysFiscalLibelle): self
    {
        $this->paysFiscalLibelle = $paysFiscalLibelle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaysResidenceFiscale(): ?string
    {
        return $this->paysResidenceFiscale;
    }

    /**
     * @param string|null $paysResidenceFiscale
     *
     * @return self
     */
    public function setPaysResidenceFiscale(?string $paysResidenceFiscale): self
    {
        $this->paysResidenceFiscale = $paysResidenceFiscale;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPea(): ?bool
    {
        return $this->pea;
    }

    /**
     * @param bool|null $pea
     *
     * @return self
     */
    public function setPea(?bool $pea): self
    {
        $this->pea = $pea;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPep(): ?bool
    {
        return $this->pep;
    }

    /**
     * @param bool|null $pep
     *
     * @return self
     */
    public function setPep(?bool $pep): self
    {
        $this->pep = $pep;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonnePolitiqueExposee(): ?string
    {
        return $this->personnePolitiqueExposee;
    }

    /**
     * @param string|null $personnePolitiqueExposee
     *
     * @return self
     */
    public function setPersonnePolitiqueExposee(?string $personnePolitiqueExposee): self
    {
        $this->personnePolitiqueExposee = $personnePolitiqueExposee;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPortefeuille(): ?array
    {
        return $this->portefeuille;
    }

    /**
     * @param array|null $portefeuille
     *
     * @return self
     */
    public function setPortefeuille(?array $portefeuille): self
    {
        $this->portefeuille = $portefeuille;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPrevoyancePack(): ?bool
    {
        return $this->prevoyancePack;
    }

    /**
     * @param bool|null $prevoyancePack
     *
     * @return self
     */
    public function setPrevoyancePack(?bool $prevoyancePack): self
    {
        $this->prevoyancePack = $prevoyancePack;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrimesBrutesVerseesApresTransfert(): ?float
    {
        return $this->primesBrutesVerseesApresTransfert;
    }

    /**
     * @param float|null $primesBrutesVerseesApresTransfert
     *
     * @return self
     */
    public function setPrimesBrutesVerseesApresTransfert(?float $primesBrutesVerseesApresTransfert): self
    {
        $this->primesBrutesVerseesApresTransfert = $primesBrutesVerseesApresTransfert;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrimesBrutesVerseesAvantTransfert(): ?float
    {
        return $this->primesBrutesVerseesAvantTransfert;
    }

    /**
     * @param float|null $primesBrutesVerseesAvantTransfert
     *
     * @return self
     */
    public function setPrimesBrutesVerseesAvantTransfert(?float $primesBrutesVerseesAvantTransfert): self
    {
        $this->primesBrutesVerseesAvantTransfert = $primesBrutesVerseesAvantTransfert;

        return $this;
    }

    /**
     * @return ProcedureDto|null
     */
    public function getProcedure(): ?ProcedureDto
    {
        return $this->procedure;
    }

    /**
     * @param ProcedureDto|null $procedure
     *
     * @return self
     */
    public function setProcedure(?ProcedureDto $procedure): self
    {
        $this->procedure = $procedure;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfilFinancier(): ?string
    {
        return $this->profilFinancier;
    }

    /**
     * @param string|null $profilFinancier
     *
     * @return self
     */
    public function setProfilFinancier(?string $profilFinancier): self
    {
        $this->profilFinancier = $profilFinancier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfilGestion(): ?string
    {
        return $this->profilGestion;
    }

    /**
     * @param string|null $profilGestion
     *
     * @return self
     */
    public function setProfilGestion(?string $profilGestion): self
    {
        $this->profilGestion = $profilGestion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfilGestionCode(): ?string
    {
        return $this->profilGestionCode;
    }

    /**
     * @param string|null $profilGestionCode
     *
     * @return self
     */
    public function setProfilGestionCode(?string $profilGestionCode): self
    {
        $this->profilGestionCode = $profilGestionCode;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRachatPartielProgramme(): ?float
    {
        return $this->rachatPartielProgramme;
    }

    /**
     * @param float|null $rachatPartielProgramme
     *
     * @return self
     */
    public function setRachatPartielProgramme(?float $rachatPartielProgramme): self
    {
        $this->rachatPartielProgramme = $rachatPartielProgramme;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRachatPartielProgrammeActive(): ?string
    {
        return $this->rachatPartielProgrammeActive;
    }

    /**
     * @param string|null $rachatPartielProgrammeActive
     *
     * @return self
     */
    public function setRachatPartielProgrammeActive(?string $rachatPartielProgrammeActive): self
    {
        $this->rachatPartielProgrammeActive = $rachatPartielProgrammeActive;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegimeSocial(): ?string
    {
        return $this->regimeSocial;
    }

    /**
     * @param string|null $regimeSocial
     *
     * @return self
     */
    public function setRegimeSocial(?string $regimeSocial): self
    {
        $this->regimeSocial = $regimeSocial;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResidentFiscalFrancais(): ?bool
    {
        return $this->residentFiscalFrancais;
    }

    /**
     * @param bool|null $residentFiscalFrancais
     *
     * @return self
     */
    public function setResidentFiscalFrancais(?bool $residentFiscalFrancais): self
    {
        $this->residentFiscalFrancais = $residentFiscalFrancais;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRevenus(): ?string
    {
        return $this->revenus;
    }

    /**
     * @param string|null $revenus
     *
     * @return self
     */
    public function setRevenus(?string $revenus): self
    {
        $this->revenus = $revenus;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getSignatureCP(): ?DateTime
    {
        return $this->signatureCP;
    }

    /**
     * @param DateTime|null $signatureCP
     *
     * @return self
     */
    public function setSignatureCP(?DateTime $signatureCP): self
    {
        $this->signatureCP = $signatureCP;

        return $this;
    }

    /**
     * @return IdentiteDto|null
     */
    public function getSouscripteur(): ?IdentiteDto
    {
        return $this->souscripteur;
    }

    /**
     * @param IdentiteDto|null $souscripteur
     *
     * @return self
     */
    public function setSouscripteur(?IdentiteDto $souscripteur): self
    {
        $this->souscripteur = $souscripteur;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string|null $statut
     *
     * @return self
     */
    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutCode(): ?string
    {
        return $this->statutCode;
    }

    /**
     * @param string|null $statutCode
     *
     * @return self
     */
    public function setStatutCode(?string $statutCode): self
    {
        $this->statutCode = $statutCode;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisArbitrage(): ?float
    {
        return $this->tauxFraisArbitrage;
    }

    /**
     * @param float|null $tauxFraisArbitrage
     *
     * @return self
     */
    public function setTauxFraisArbitrage(?float $tauxFraisArbitrage): self
    {
        $this->tauxFraisArbitrage = $tauxFraisArbitrage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisEncoursFondsEuro(): ?float
    {
        return $this->tauxFraisEncoursFondsEuro;
    }

    /**
     * @param float|null $tauxFraisEncoursFondsEuro
     *
     * @return self
     */
    public function setTauxFraisEncoursFondsEuro(?float $tauxFraisEncoursFondsEuro): self
    {
        $this->tauxFraisEncoursFondsEuro = $tauxFraisEncoursFondsEuro;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisEncoursFondsEuroSpecifique(): ?float
    {
        return $this->tauxFraisEncoursFondsEuroSpecifique;
    }

    /**
     * @param float|null $tauxFraisEncoursFondsEuroSpecifique
     *
     * @return self
     */
    public function setTauxFraisEncoursFondsEuroSpecifique(?float $tauxFraisEncoursFondsEuroSpecifique): self
    {
        $this->tauxFraisEncoursFondsEuroSpecifique = $tauxFraisEncoursFondsEuroSpecifique;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisEncoursUniteCompte(): ?float
    {
        return $this->tauxFraisEncoursUniteCompte;
    }

    /**
     * @param float|null $tauxFraisEncoursUniteCompte
     *
     * @return self
     */
    public function setTauxFraisEncoursUniteCompte(?float $tauxFraisEncoursUniteCompte): self
    {
        $this->tauxFraisEncoursUniteCompte = $tauxFraisEncoursUniteCompte;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisVersement(): ?float
    {
        return $this->tauxFraisVersement;
    }

    /**
     * @param float|null $tauxFraisVersement
     *
     * @return self
     */
    public function setTauxFraisVersement(?float $tauxFraisVersement): self
    {
        $this->tauxFraisVersement = $tauxFraisVersement;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalPrimesMax(): ?float
    {
        return $this->totalPrimesMax;
    }

    /**
     * @param float|null $totalPrimesMax
     *
     * @return self
     */
    public function setTotalPrimesMax(?float $totalPrimesMax): self
    {
        $this->totalPrimesMax = $totalPrimesMax;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTransfert(): ?float
    {
        return $this->transfert;
    }

    /**
     * @param float|null $transfert
     *
     * @return self
     */
    public function setTransfert(?float $transfert): self
    {
        $this->transfert = $transfert;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    /**
     * @param string|null $typeProduit
     *
     * @return self
     */
    public function setTypeProduit(?string $typeProduit): self
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTypesContrat(): ?array
    {
        return $this->typesContrat;
    }

    /**
     * @param array|null $typesContrat
     *
     * @return self
     */
    public function setTypesContrat(?array $typesContrat): self
    {
        $this->typesContrat = $typesContrat;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTypesContratSelectionne(): ?array
    {
        return $this->typesContratSelectionne;
    }

    /**
     * @param array|null $typesContratSelectionne
     *
     * @return self
     */
    public function setTypesContratSelectionne(?array $typesContratSelectionne): self
    {
        $this->typesContratSelectionne = $typesContratSelectionne;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getUsufruitiers(): ?array
    {
        return $this->usufruitiers;
    }

    /**
     * @param array|null $usufruitiers
     *
     * @return self
     */
    public function setUsufruitiers(?array $usufruitiers): self
    {
        $this->usufruitiers = $usufruitiers;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValeurRachat(): ?float
    {
        return $this->valeurRachat;
    }

    /**
     * @param float|null $valeurRachat
     *
     * @return self
     */
    public function setValeurRachat(?float $valeurRachat): self
    {
        $this->valeurRachat = $valeurRachat;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getVersementProgramme(): ?float
    {
        return $this->versementProgramme;
    }

    /**
     * @param float|null $versementProgramme
     *
     * @return self
     */
    public function setVersementProgramme(?float $versementProgramme): self
    {
        $this->versementProgramme = $versementProgramme;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersementProgrammeActive(): ?string
    {
        return $this->versementProgrammeActive;
    }

    /**
     * @param string|null $versementProgrammeActive
     *
     * @return self
     */
    public function setVersementProgrammeActive(?string $versementProgrammeActive): self
    {
        $this->versementProgrammeActive = $versementProgrammeActive;

        return $this;
    }
}
