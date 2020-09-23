<?php

namespace Mpp\ApicilClientBundle\Model;

class DetailOptionVP
{
    public const TYPEOPTION_ARBITRAGE_PROGRAMME = 'ARBITRAGE_PROGRAMME';
    public const TYPEOPTION_GARANTIE = 'GARANTIE';
    public const TYPEOPTION_RACHAT_PROGRAMME = 'RACHAT_PROGRAMME';
    public const TYPEOPTION_SECURISATION_PLUS_AU_MOINS_VALUE = 'SECURISATION_PLUS_AU_MOINS_VALUE';
    public const TYPEOPTION_VERSEMENT_PROGRAMMEE = 'VERSEMENT_PROGRAMMEE';
    public const TYPEOPTION_DYNAMISATION_INTERET = 'DYNAMISATION_INTERET';

    /**
     * @var string|null
     */
    private $codeProduit;

    /**
     * @var int|null
     */
    private $dateDebutEffet;

    /**
     * @var int|null
     */
    private $dateDebutProchainePeriode;

    /**
     * @var int|null
     */
    private $dateFinEffet;

    /**
     * @var string|null
     */
    private $echeance;

    /**
     * @var string|null
     */
    private $etatEnregistrement;

    /**
     * @var string|null
     */
    private $fractionnement;

    /**
     * @var string|null
     */
    private $indicateurProrata;

    /**
     * @var string|null
     */
    private $libelleProduit;

    /**
     * @var string|null
     */
    private $modeREglement;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var int|null
     */
    private $numeroClient;

    /**
     * @var int|null
     */
    private $numeroPayeur;

    /**
     * @var string|null
     */
    private $numeroPolice;

    /**
     * @var int|null
     */
    private $numeroPoliceInterne;

    /**
     * @var int|null
     */
    private $numeroTarification;

    /**
     * @var string|null
     */
    private $periodicite;

    /**
     * @var int|null
     */
    private $prochaineQuittancement;

    /**
     * @var int|null
     */
    private $quantieme;

    /**
     * @var array|null
     */
    private $supports;

    /**
     * @var string|null
     */
    private $typeGarantie;

    /**
     * @var string|null
     */
    private $typeOption;

    /**
     * @var string|null
     */
    private $typeQuittance;

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
     * @return int|null
     */
    public function getDateDebutEffet(): ?int
    {
        return $this->dateDebutEffet;
    }

    /**
     * @param int|null $dateDebutEffet
     *
     * @return self
     */
    public function setDateDebutEffet(?int $dateDebutEffet): self
    {
        $this->dateDebutEffet = $dateDebutEffet;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDateDebutProchainePeriode(): ?int
    {
        return $this->dateDebutProchainePeriode;
    }

    /**
     * @param int|null $dateDebutProchainePeriode
     *
     * @return self
     */
    public function setDateDebutProchainePeriode(?int $dateDebutProchainePeriode): self
    {
        $this->dateDebutProchainePeriode = $dateDebutProchainePeriode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDateFinEffet(): ?int
    {
        return $this->dateFinEffet;
    }

    /**
     * @param int|null $dateFinEffet
     *
     * @return self
     */
    public function setDateFinEffet(?int $dateFinEffet): self
    {
        $this->dateFinEffet = $dateFinEffet;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEcheance(): ?string
    {
        return $this->echeance;
    }

    /**
     * @param string|null $echeance
     *
     * @return self
     */
    public function setEcheance(?string $echeance): self
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtatEnregistrement(): ?string
    {
        return $this->etatEnregistrement;
    }

    /**
     * @param string|null $etatEnregistrement
     *
     * @return self
     */
    public function setEtatEnregistrement(?string $etatEnregistrement): self
    {
        $this->etatEnregistrement = $etatEnregistrement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFractionnement(): ?string
    {
        return $this->fractionnement;
    }

    /**
     * @param string|null $fractionnement
     *
     * @return self
     */
    public function setFractionnement(?string $fractionnement): self
    {
        $this->fractionnement = $fractionnement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndicateurProrata(): ?string
    {
        return $this->indicateurProrata;
    }

    /**
     * @param string|null $indicateurProrata
     *
     * @return self
     */
    public function setIndicateurProrata(?string $indicateurProrata): self
    {
        $this->indicateurProrata = $indicateurProrata;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelleProduit(): ?string
    {
        return $this->libelleProduit;
    }

    /**
     * @param string|null $libelleProduit
     *
     * @return self
     */
    public function setLibelleProduit(?string $libelleProduit): self
    {
        $this->libelleProduit = $libelleProduit;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModeREglement(): ?string
    {
        return $this->modeREglement;
    }

    /**
     * @param string|null $modeREglement
     *
     * @return self
     */
    public function setModeREglement(?string $modeREglement): self
    {
        $this->modeREglement = $modeREglement;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param float|null $montant
     *
     * @return self
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroClient(): ?int
    {
        return $this->numeroClient;
    }

    /**
     * @param int|null $numeroClient
     *
     * @return self
     */
    public function setNumeroClient(?int $numeroClient): self
    {
        $this->numeroClient = $numeroClient;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroPayeur(): ?int
    {
        return $this->numeroPayeur;
    }

    /**
     * @param int|null $numeroPayeur
     *
     * @return self
     */
    public function setNumeroPayeur(?int $numeroPayeur): self
    {
        $this->numeroPayeur = $numeroPayeur;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroPolice(): ?string
    {
        return $this->numeroPolice;
    }

    /**
     * @param string|null $numeroPolice
     *
     * @return self
     */
    public function setNumeroPolice(?string $numeroPolice): self
    {
        $this->numeroPolice = $numeroPolice;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroPoliceInterne(): ?int
    {
        return $this->numeroPoliceInterne;
    }

    /**
     * @param int|null $numeroPoliceInterne
     *
     * @return self
     */
    public function setNumeroPoliceInterne(?int $numeroPoliceInterne): self
    {
        $this->numeroPoliceInterne = $numeroPoliceInterne;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroTarification(): ?int
    {
        return $this->numeroTarification;
    }

    /**
     * @param int|null $numeroTarification
     *
     * @return self
     */
    public function setNumeroTarification(?int $numeroTarification): self
    {
        $this->numeroTarification = $numeroTarification;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    /**
     * @param string|null $periodicite
     *
     * @return self
     */
    public function setPeriodicite(?string $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProchaineQuittancement(): ?int
    {
        return $this->prochaineQuittancement;
    }

    /**
     * @param int|null $prochaineQuittancement
     *
     * @return self
     */
    public function setProchaineQuittancement(?int $prochaineQuittancement): self
    {
        $this->prochaineQuittancement = $prochaineQuittancement;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantieme(): ?int
    {
        return $this->quantieme;
    }

    /**
     * @param int|null $quantieme
     *
     * @return self
     */
    public function setQuantieme(?int $quantieme): self
    {
        $this->quantieme = $quantieme;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getSupports(): ?array
    {
        return $this->supports;
    }

    /**
     * @param array|null $supports
     *
     * @return self
     */
    public function setSupports(?array $supports): self
    {
        $this->supports = $supports;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeGarantie(): ?string
    {
        return $this->typeGarantie;
    }

    /**
     * @param string|null $typeGarantie
     *
     * @return self
     */
    public function setTypeGarantie(?string $typeGarantie): self
    {
        $this->typeGarantie = $typeGarantie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeOption(): ?string
    {
        return $this->typeOption;
    }

    /**
     * @param string|null $typeOption
     *
     * @return self
     */
    public function setTypeOption(?string $typeOption): self
    {
        $this->typeOption = $typeOption;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeQuittance(): ?string
    {
        return $this->typeQuittance;
    }

    /**
     * @param string|null $typeQuittance
     *
     * @return self
     */
    public function setTypeQuittance(?string $typeQuittance): self
    {
        $this->typeQuittance = $typeQuittance;

        return $this;
    }
}
