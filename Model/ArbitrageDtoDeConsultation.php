<?php

namespace Mpp\ApicilClientBundle\Model;

class ArbitrageDtoDeConsultation
{
    public const SOURCE_COSY = 'COSY';
    public const SOURCE_COSY_RT = 'COSY_RT';
    public const SOURCE_COSY_GP = 'COSY_GP';
    public const SOURCE_SYNCHRO = 'SYNCHRO';
    public const SOURCE_SUCCESSION = 'SUCCESSION';

    public const TYPE_NORMAL = 'N';
    public const TYPE_PROGRAMME = 'P';

    /**
     * @var string|null
     */
    private $alliance;

       /**
     * @var bool|null
     */
    private $bulletinPartenaire;

    /**
     * @var string|null
     */
    private $codeFiscal;

    /**
     * @var string|null
     */
    private $compartiment;

    /**
     * @var int|string|null
     */
    private $contratId;

    /**
     * @var float|null
     */
    private $fraisArbitrage;

    /**
     * @var float|null
     */
    private $fraisDerogatoireArbitrage;

    /**
     * @var TrHorizonInvestissementDto|null
     */
    private $horizonInvestissement;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $modeCible;

    /**
     * @var array|null
     */
    private $portefeuilleCible;

    /**
     * @var array|null
     */
    private $repartitionDesInvestissement;

    /**
     * @var array|null
     */
    private $repartitionInvestissement;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var bool|null
     */
    private $signeClient;

    /**
     * @var string|null
     */
    private $source;

    /**
     * @var string|null
     */
    private $statutActuel;

    /**
     * @var float|null
     */
    private $tauxArbitrage;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @return string|null
     */
    public function getAlliance(): ?string
    {
        return $this->alliance;
    }

    /**
     * @param string|null $alliance
     *
     * @return self
     */
    public function setAlliance(?string $alliance): self
    {
        $this->alliance = $alliance;

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
     * @param int|string|null $contratId
     *
     * @return self
     */
    public function setContratId(int|string|null $contratId): self
    {
        if (is_int($contratId)) {
            $contratId = (string) $contratId;
        }

        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFraisArbitrage(): ?float
    {
        return $this->fraisArbitrage;
    }

    /**
     * @param float|null $fraisArbitrage
     *
     * @return self
     */
    public function setFraisArbitrage(?float $fraisArbitrage): self
    {
        $this->fraisArbitrage = $fraisArbitrage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFraisDerogatoireArbitrage(): ?float
    {
        return $this->fraisDerogatoireArbitrage;
    }

    /**
     * @param float|null $fraisDerogatoireArbitrage
     *
     * @return self
     */
    public function setFraisDerogatoireArbitrage(?float $fraisDerogatoireArbitrage): self
    {
        $this->fraisDerogatoireArbitrage = $fraisDerogatoireArbitrage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getModeCible(): ?bool
    {
        return $this->modeCible;
    }

    /**
     * @param bool|null $modeCible
     *
     * @return self
     */
    public function setModeCible(?bool $modeCible): self
    {
        $this->modeCible = $modeCible;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPorteFeuilleCible(): ?array
    {
        return $this->portefeuilleCible;
    }

    /**
     * @param array|null $porteFeuilleCible
     *
     * @return self
     */
    public function setPorteFeuilleCible(?array $porteFeuilleCible): self
    {
        $this->portefeuilleCible = $porteFeuilleCible;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRepartitionDesInvestissement(): ?array
    {
        return $this->repartitionDesInvestissement;
    }

    /**
     * @param array|null $repartitionDesInvestissement
     *
     * @return self
     */
    public function setRepartitionDesInvestissement(?array $repartitionDesInvestissement): self
    {
        $this->repartitionDesInvestissement = $repartitionDesInvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRepartitionInvestissement(): ?array
    {
        return $this->repartitionInvestissement;
    }

    /**
     * @param array|null $repartitionInvestissement
     *
     * @return self
     */
    public function setRepartitionInvestissement(?array $repartitionInvestissement): self
    {
        $this->repartitionInvestissement = $repartitionInvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReponsesSupportStructure(): ?array
    {
        return $this->reponsesSupportStructure;
    }

    /**
     * @param array|null $repartitionInvestissement
     *
     * @return self
     */
    public function setReponsesSupportStructure(?array $reponsesSupportStructure): self
    {
        $this->reponsesSupportStructure = $reponsesSupportStructure;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSigneClient(): ?bool
    {
        return $this->signeClient;
    }

    /**
     * @param bool|null $signeClient
     *
     * @return self
     */
    public function setSigneClient(?bool $signeClient): self
    {
        $this->signeClient = $signeClient;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutActuel(): ?string
    {
        return $this->statutActuel;
    }

    /**
     * @param string|null $statutActuel
     *
     * @return self
     */
    public function setStatutActuel(?string $statutActuel): self
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxArbitrage(): ?float
    {
        return $this->tauxArbitrage;
    }

    /**
     * @param float|null $tauxArbitrage
     *
     * @return self
     */
    public function setTauxArbitrage(?float $tauxArbitrage): self
    {
        $this->tauxArbitrage = $tauxArbitrage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getBulletinPartenaire(): ?bool
    {
        return $this->bulletinPartenaire;
    }

    /**
     * @param  bool|null  $bulletinPartenaire
     *
     * @return  self
     */
    public function setBulletinPartenaire(?bool $bulletinPartenaire): self
    {
        $this->bulletinPartenaire = $bulletinPartenaire;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCodeFiscal(): ?string
    {
        return $this->codeFiscal;
    }

    /**
     * @param  string|null  $codeFiscal
     *
     * @return  self
     */
    public function setCodeFiscal(?string $codeFiscal): self
    {
        $this->codeFiscal = $codeFiscal;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCompartiment(): ?string
    {
        return $this->compartiment;
    }

    /**
     * @param  string|null  $compartiment
     *
     * @return  self
     */
    public function setCompartiment(?string $compartiment): self
    {
        $this->compartiment = $compartiment;

        return $this;
    }

    /**
     * @return  TrHorizonInvestissementDto|null
     */
    public function getHorizonInvestissement(): ?TrHorizonInvestissementDto
    {
        return $this->horizonInvestissement;
    }

    /**
     * @param  TrHorizonInvestissementDto|null  $horizonInvestissement
     *
     * @return  self
     */
    public function setHorizonInvestissement(?TrHorizonInvestissementDto $horizonInvestissement): self
    {
        $this->horizonInvestissement = $horizonInvestissement;

        return $this;
    }
}
