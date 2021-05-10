<?php

namespace Mpp\ApicilClientBundle\Model;

class RepartitionReponseDto
{
    /**
     * @var TrClasseActifDto|null
     */
    private $classeActif;

    /**
     * @var string|null
     */
    private $codeIsinSupport;

    /**
     * @var bool|null
     */
    private $desinvestissement;

    /**
     * @var bool|null
     */
    private $eligibleVP;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var float|null
     */
    private $pourcentage;

    /**
     * @return string|null
     */
    public function getCodeIsinSupport(): ?string
    {
        return $this->codeIsinSupport;
    }

    /**
     * @param string|null $codeIsinSupport
     *
     * @return self
     */
    public function setCodeIsinSupport(?string $codeIsinSupport): self
    {
        $this->codeIsinSupport = $codeIsinSupport;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    /**
     * @param float|null $pourcentage
     *
     * @return self
     */
    public function setPourcentage(?float $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

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
     * @return  bool|null
     */
    public function getDesinvestissement(): ?bool
    {
        return $this->desinvestissement;
    }

    /**
     * @param  bool|null  $desinvestissement
     *
     * @return  self
     */
    public function setDesinvestissement(?bool $desinvestissement): self
    {
        $this->desinvestissement = $desinvestissement;

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
     * @return  float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param  float|null  $montant
     *
     * @return  self
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
