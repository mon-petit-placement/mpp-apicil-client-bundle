<?php

namespace Mpp\ApicilClientBundle\Model;

class ArbitrageDto
{
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
    private $fraisDerogatoireArbitrage;

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
     * @var float|null
     */
    private $tauxArbitrage;

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
    public function setType(?string $tauxNumber): self
    {
        $this->tauxNumber = $tauxNumber;

        return $this;
    }
}
