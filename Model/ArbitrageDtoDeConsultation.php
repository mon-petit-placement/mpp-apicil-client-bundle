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
     * @var int|null
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
     * @var int|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $modeCible;

    /**
     * @var RepartitionReponseDto|null
     */
    private $portefeuilleCible;

    /**
     * @var RepartitionReponseDto|null
     */
    private $repartitionDesInvestissement;

    /**
     * @var RepartitionReponseDto|null
     */
    private $repartitionInvestissement;

    /**
     * @var QuestionnaireStructuresReponses|null
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
    private $tauxNumber;

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
     * @return int|null
     */
    public function getContratId(): ?int
    {
        return $this->contratId;
    }

    /**
     * @param int|null $contratId
     *
     * @return self
     */
    public function setContratId(?int $contratId): self
    {
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
     * @return RepartitionReponseDto|null
     */
    public function getPorteFeuilleCible(): ?RepartitionReponseDto
    {
        return $this->portefeuilleCible;
    }

    /**
     * @param RepartitionReponseDto|null $porteFeuilleCible
     *
     * @return self
     */
    public function setPorteFeuilleCible(?RepartitionReponseDto $porteFeuilleCible): self
    {
        $this->porteFeuilleCible = $porteFeuilleCible;

        return $this;
    }

    /**
     * @return RepartitionReponseDto|null
     */
    public function getRepartitionDesInvestissement(): ?RepartitionReponseDto
    {
        return $this->repartitionDesInvestissement;
    }

    /**
     * @param RepartitionReponseDto|null $repartitionDesInvestissement
     *
     * @return self
     */
    public function setRepartitionDesInvestissement(?RepartitionReponseDto $repartitionDesInvestissement): self
    {
        $this->repartitionDesInvestissement = $repartitionDesInvestissement;

        return $this;
    }

    /**
     * @return RepartitionReponseDto|null
     */
    public function getRepartitionInvestissement(): ?RepartitionReponseDto
    {
        return $this->repartitionInvestissement;
    }

    /**
     * @param RepartitionReponseDto|null $repartitionInvestissement
     *
     * @return self
     */
    public function setRepartitionInvestissement(?RepartitionReponseDto $repartitionInvestissement): self
    {
        $this->repartitionInvestissement = $repartitionInvestissement;

        return $this;
    }

    /**
     * @return QuestionnaireStructuresReponses|null
     */
    public function getReponsesSupportStructure(): ?QuestionnaireStructuresReponses
    {
        return $this->reponsesSupportStructure;
    }

    /**
     * @param QuestionnaireStructuresReponses|null $repartitionInvestissement
     *
     * @return self
     */
    public function setReponsesSupportStructure(?QuestionnaireStructuresReponses $reponsesSupportStructure): self
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
    public function getTauxNumber(): ?float
    {
        return $this->tauxNumber;
    }

    /**
     * @param float|null $tauxNumber
     *
     * @return self
     */
    public function setTauxNumber(?float $tauxNumber): self
    {
        $this->tauxNumber = $tauxNumber;

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
}
