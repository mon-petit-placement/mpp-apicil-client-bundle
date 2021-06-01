<?php

namespace Mpp\ApicilClientBundle\Model;

class SupportContratDto
{
    public const TYPESUPPORT_FONDS_EURO = 'FONDS_EURO';
    public const TYPESUPPORT_SCPI = 'SCPI';
    public const TYPESUPPORT_PRODUIT_STRUCTURE = 'PRODUIT_STRUCTURE';
    public const TYPESUPPORT_OPC = 'OPC';
    public const TYPESUPPORT_AUTRE = 'AUTRE';
    public const TYPESUPPORT_OPC_AUTRE = 'OPC_AUTRE';
    public const TYPESUPPORT_UP = 'UP';
    public const TYPESUPPORT_UC = 'UC';
    public const TYPESUPPORT_ETF = 'ETF';

    /**
     * @var float|null
     */
    private $afficherEuroPerf;

    /**
     * @var float|null
     */
    private $bkFraisLimitMin;

    /**
     * @var float|null
     */
    private $bkFraisTauxMax;

    /**
     * @var float|null
     */
    private $bkFraisTauxMin;

    /**
     * @var float|null
     */
    private $bkMinInvestissement;

    /**
     * @var bool|null
     */
    private $bkOptionActive;

    /**
     * @var string|null
     */
    private $bkTypeMinInvestissement;

    /**
     * @var TrClasseActifDto|null
     */
    private $classeActif;

    /**
     * @var string|null
     */
    private $code;

     /**
     * @var array|null
     */
    private $compartiments;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var bool|null
     */
    private $desinvestissement;

    /**
     * @var bool|null
     */
    private $eligibleVP;

    /**
     * @var bool|null
     */
    private $flagCotation;

    /**
     * @var bool|null
     */
    private $fondsEuroSpecifique;

    /**
     * @var bool|null
     */
    private $investissement;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var bool|null
     */
    private $lienDic;

    /**
     * @var string|null
     */
    private $logo;

    /**
     * @var float|null
     */
    private $minArbitrage;

    /**
     * @var float|null
     */
    private $minVersementComplementaire;

    /**
     * @var float|null
     */
    private $minVersementInitial;

    /**
     * @var float|null
     */
    private $minVersementProgramme;

    /**
     * @var float|null
     */
    private $nombreDeParts;

    /**
     * @var float|null
     */
    private $performance;

    /**
     * @var float|null
     */
    private $repartition;

    /**
     * @var float|null
     */
    private $repartitionContrat;

    /**
     * @var int|null
     */
    private $risque;

    /**
     * @var bool|null
     */
    private $specifique;

    /**
     * @var string|null
     */
    private $typeSupport;

    /**
     * @var string|null
     */
    private $urlExterne;

    /**
     * @var float|null
     */
    private $valeurAchat;

    /**
     * @var float|null
     */
    private $valeurActuelle;

    /**
     * @var float|null
     */
    private $valorisation;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDesinvestissement(): ?bool
    {
        return $this->desinvestissement;
    }

    /**
     * @param bool|null $desinvestissement
     *
     * @return self
     */
    public function setDesinvestissement(?bool $desinvestissement): self
    {
        $this->desinvestissement = $desinvestissement;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFondsEuroSpecifique(): ?bool
    {
        return $this->fondsEuroSpecifique;
    }

    /**
     * @param bool|null $fondsEuroSpecifique
     *
     * @return self
     */
    public function setFondsEuroSpecifique(?bool $fondsEuroSpecifique): self
    {
        $this->fondsEuroSpecifique = $fondsEuroSpecifique;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInvestissement(): ?bool
    {
        return $this->investissement;
    }

    /**
     * @param bool|null $investissement
     *
     * @return self
     */
    public function setInvestissement(?bool $investissement): self
    {
        $this->investissement = $investissement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLienDic(): ?bool
    {
        return $this->lienDic;
    }

    /**
     * @param bool|null $lienDic
     *
     * @return self
     */
    public function setLienDic(?bool $lienDic): self
    {
        $this->lienDic = $lienDic;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getNombreDeParts(): ?float
    {
        return $this->nombreDeParts;
    }

    /**
     * @param float|null $nombreDeParts
     *
     * @return self
     */
    public function setNombreDeParts(?float $nombreDeParts): self
    {
        $this->nombreDeParts = $nombreDeParts;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerformance(): ?float
    {
        return $this->performance;
    }

    /**
     * @param float|null $performance
     *
     * @return self
     */
    public function setPerformance(?float $performance): self
    {
        $this->performance = $performance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRepartition(): ?float
    {
        return $this->repartition;
    }

    /**
     * @param float|null $repartition
     *
     * @return self
     */
    public function setRepartition(?float $repartition): self
    {
        $this->repartition = $repartition;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRisque(): ?int
    {
        return $this->risque;
    }

    /**
     * @param int|null $risque
     *
     * @return self
     */
    public function setRisque(?int $risque): self
    {
        $this->risque = $risque;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSpecifique(): ?bool
    {
        return $this->specifique;
    }

    /**
     * @param bool|null $specifique
     *
     * @return self
     */
    public function setSpecifique(?bool $specifique): self
    {
        $this->specifique = $specifique;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeSupport(): ?string
    {
        return $this->typeSupport;
    }

    /**
     * @param string|null $typeSupport
     *
     * @return self
     */
    public function setTypeSupport(?string $typeSupport): self
    {
        $this->typeSupport = $typeSupport;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrlExterne(): ?string
    {
        return $this->urlExterne;
    }

    /**
     * @param string|null $urlExterne
     *
     * @return self
     */
    public function setUrlExterne(?string $urlExterne): self
    {
        $this->urlExterne = $urlExterne;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValeurAchat(): ?float
    {
        return $this->valeurAchat;
    }

    /**
     * @param float|null $valeurAchat
     *
     * @return self
     */
    public function setValeurAchat(?float $valeurAchat): self
    {
        $this->valeurAchat = $valeurAchat;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValeurActuelle(): ?float
    {
        return $this->valeurActuelle;
    }

    /**
     * @param float|null $valeurActuelle
     *
     * @return self
     */
    public function setValeurActuelle(?float $valeurActuelle): self
    {
        $this->valeurActuelle = $valeurActuelle;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorisation(): ?float
    {
        return $this->valorisation;
    }

    /**
     * @param float|null $valorisation
     *
     * @return self
     */
    public function setValorisation(?float $valorisation): self
    {
        $this->valorisation = $valorisation;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getRepartitionContrat(): ?float
    {
        return $this->repartitionContrat;
    }

    /**
     * @param  float|null  $repartitionContrat
     *
     * @return  self
     */
    public function setRepartitionContrat(?float $repartitionContrat): self
    {
        $this->repartitionContrat = $repartitionContrat;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getAfficherEuroPerf(): ?float
    {
        return $this->afficherEuroPerf;
    }

    /**
     * @param  float|null  $afficherEuroPerf
     *
     * @return  self
     */
    public function setAfficherEuroPerf(?float $afficherEuroPerf): self
    {
        $this->afficherEuroPerf = $afficherEuroPerf;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getBkFraisLimitMin(): ?float
    {
        return $this->bkFraisLimitMin;
    }

    /**
     * @param  float|null  $bkFraisLimitMin
     *
     * @return  self
     */
    public function setBkFraisLimitMin(?float $bkFraisLimitMin): self
    {
        $this->bkFraisLimitMin = $bkFraisLimitMin;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getBkFraisTauxMax(): ?float
    {
        return $this->bkFraisTauxMax;
    }

    /**
     * @param  float|null  $bkFraisTauxMax
     *
     * @return  self
     */
    public function setBkFraisTauxMax(?float $bkFraisTauxMax): self
    {
        $this->bkFraisTauxMax = $bkFraisTauxMax;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getBkFraisTauxMin(): ?float
    {
        return $this->bkFraisTauxMin;
    }

    /**
     * @param  float|null  $bkFraisTauxMin
     *
     * @return  self
     */
    public function setBkFraisTauxMin(?float $bkFraisTauxMin): self
    {
        $this->bkFraisTauxMin = $bkFraisTauxMin;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getBkMinInvestissement(): ?float
    {
        return $this->bkMinInvestissement;
    }

    /**
     * @param  float|null  $bkMinInvestissement
     *
     * @return  self
     */
    public function setBkMinInvestissement(?float $bkMinInvestissement): self
    {
        $this->bkMinInvestissement = $bkMinInvestissement;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getBkOptionActive(): ?bool
    {
        return $this->bkOptionActive;
    }

    /**
     * @param  bool|null  $bkOptionActive
     *
     * @return  self
     */
    public function setBkOptionActive(?bool $bkOptionActive): self
    {
        $this->bkOptionActive = $bkOptionActive;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getBkTypeMinInvestissement(): ?string
    {
        return $this->bkTypeMinInvestissement;
    }

    /**
     * @param  string|null  $bkTypeMinInvestissement
     *
     * @return  self
     */
    public function setBkTypeMinInvestissement(?string $bkTypeMinInvestissement): self
    {
        $this->bkTypeMinInvestissement = $bkTypeMinInvestissement;

        return $this;
    }

    /**
     * @return  TrClasseActifDto|null
     */
    public function getClasseActif(): ?TrClasseActifDto
    {
        return $this->classeActif;
    }

    /**
     * @param  TrClasseActifDto|null  $classeActif
     *
     * @return  self
     */
    public function setClasseActif(?TrClasseActifDto $classeActif): self
    {
        $this->classeActif = $classeActif;

        return $this;
    }

    /**
     * @return  array|null
     */
    public function getCompartiments(): array
    {
        return $this->compartiments;
    }

    /**
     * @param  array|null  $compartiments
     *
     * @return  self
     */
    public function setCompartiments(?array $compartiments): self
    {
        $this->compartiments = $compartiments;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param  string|null  $description
     *
     * @return  self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getEligibleVP(): ?bool
    {
        return $this->eligibleVP;
    }

    /**
     * @param  bool|null  $eligibleVP
     *
     * @return  self
     */
    public function setEligibleVP(?bool $eligibleVP): self
    {
        $this->eligibleVP = $eligibleVP;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getFlagCotation(): ?bool
    {
        return $this->flagCotation;
    }

    /**
     * @param  bool|null  $flagCotation
     *
     * @return  self
     */
    public function setFlagCotation(?bool $flagCotation): self
    {
        $this->flagCotation = $flagCotation;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param  string|null  $logo
     *
     * @return  self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMinArbitrage(): ?float
    {
        return $this->minArbitrage;
    }

    /**
     * @param  float|null  $minArbitrage
     *
     * @return  self
     */
    public function setMinArbitrage(?float $minArbitrage): self
    {
        $this->minArbitrage = $minArbitrage;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMinVersementComplementaire(): ?float
    {
        return $this->minVersementComplementaire;
    }

    /**
     * @param  float|null  $minVersementComplementaire
     *
     * @return  self
     */
    public function setMinVersementComplementaire(?float $minVersementComplementaire): self
    {
        $this->minVersementComplementaire = $minVersementComplementaire;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMinVersementInitial(): ?float
    {
        return $this->minVersementInitial;
    }

    /**
     * @param  float|null  $minVersementInitial
     *
     * @return  self
     */
    public function setMinVersementInitial(?float $minVersementInitial): self
    {
        $this->minVersementInitial = $minVersementInitial;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMinVersementProgramme(): ?float
    {
        return $this->minVersementProgramme;
    }

    /**
     * @param  float|null  $minVersementProgramme
     *
     * @return  self
     */
    public function setMinVersementProgramme(?float $minVersementProgramme): self
    {
        $this->minVersementProgramme = $minVersementProgramme;

        return $this;
    }
}
