<?php

namespace Mpp\ApicilClientBundle\Model;

class FraisSurContratDto
{
    /**
     * @var float|null
     */
    private $surtauxSurEncours;

    /**
     * @var float|null
     */
    private $tauxFraisGestionEncoursEuro;

    /**
     * @var float|null
     */
    private $tauxFraisSurArbitrage;

    /**
     * @var float|null
     */
    private $tauxFraisSurEncoursUC;

    /**
     * @var float|null
     */
    private $tauxMaxFraisSurTousTypesVersements;

    /**
     * @var float|null
     */
    private $totalTauxFraisSurEncoursUC;

    /**
     * @return float|null
     */
    public function getSurtauxSurEncours(): ?float
    {
        return $this->surtauxSurEncours;
    }

    /**
     * @param float|null $surtauxSurEncours
     *
     * @return self
     */
    public function setSurtauxSurEncours(?float $surtauxSurEncours): self
    {
        $this->surtauxSurEncours = $surtauxSurEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisGestionEncoursEuro(): ?float
    {
        return $this->tauxFraisGestionEncoursEuro;
    }

    /**
     * @param float|null $tauxFraisGestionEncoursEuro
     *
     * @return self
     */
    public function setTauxFraisGestionEncoursEuro(?float $tauxFraisGestionEncoursEuro): self
    {
        $this->tauxFraisGestionEncoursEuro = $tauxFraisGestionEncoursEuro;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisSurArbitrage(): ?float
    {
        return $this->tauxFraisSurArbitrage;
    }

    /**
     * @param float|null $tauxFraisSurArbitrage
     *
     * @return self
     */
    public function setTauxFraisSurArbitrage(?float $tauxFraisSurArbitrage): self
    {
        $this->tauxFraisSurArbitrage = $tauxFraisSurArbitrage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisSurEncoursUC(): ?float
    {
        return $this->tauxFraisSurEncoursUC;
    }

    /**
     * @param float|null $tauxFraisSurEncoursUC
     *
     * @return self
     */
    public function setTauxFraisSurEncoursUC(?float $tauxFraisSurEncoursUC): self
    {
        $this->tauxFraisSurEncoursUC = $tauxFraisSurEncoursUC;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxMaxFraisSurTousTypesVersements(): ?float
    {
        return $this->tauxMaxFraisSurTousTypesVersements;
    }

    /**
     * @param float|null $tauxMaxFraisSurTousTypesVersements
     *
     * @return self
     */
    public function setTauxMaxFraisSurTousTypesVersements(?float $tauxMaxFraisSurTousTypesVersements): self
    {
        $this->tauxMaxFraisSurTousTypesVersements = $tauxMaxFraisSurTousTypesVersements;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalTauxFraisSurEncoursUC(): ?float
    {
        return $this->totalTauxFraisSurEncoursUC;
    }

    /**
     * @param float|null $totalTauxFraisSurEncoursUC
     *
     * @return self
     */
    public function setTotalTauxFraisSurEncoursUC(?float $totalTauxFraisSurEncoursUC): self
    {
        $this->totalTauxFraisSurEncoursUC = $totalTauxFraisSurEncoursUC;

        return $this;
    }
}
