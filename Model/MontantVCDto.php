<?php

namespace Mpp\ApicilClientBundle\Model;

class MontantVCDto
{
    /**
     * @var \DateTime|null
     */
    private $dateLimiteDeVirementMadelin;

    /**
     * @var FraisTauxDto|null
     */
    private $fraisTaux;

    /**
     * @var float|null
     */
    private $max;

    /**
     * @var float|null
     */
    private $maxDeroge;

    /**
     * @var float|null
     */
    private $min;

    /**
     * @var float|null
     */
    private $minDeroge;

    /**
     * @var float|null
     */
    private $plafondOrigineDesFonds;

    /**
     * @var VersementMinDto|null
     */
    private $versementMinProfilGestion;

    /**
     * @return \DateTime|null
     */
    public function getDateLimiteDeVirementMadelin(): ?\DateTime
    {
        return $this->dateLimiteDeVirementMadelin;
    }

    /**
     * @param \DateTime|null $dateLimiteDeVirementMadelin
     *
     * @return self
     */
    public function setDateLimiteDeVirementMadelin(?\DateTime $dateLimiteDeVirementMadelin): self
    {
        $this->dateLimiteDeVirementMadelin = $dateLimiteDeVirementMadelin;

        return $this;
    }

    /**
     * @return FraisTauxDto|null
     */
    public function getFraisTaux(): ?FraisTauxDto
    {
        return $this->fraisTaux;
    }

    /**
     * @param FraisTauxDto|null $fraisTaux
     *
     * @return self
     */
    public function setFraisTaux(?FraisTauxDto $fraisTaux): self
    {
        $this->fraisTaux = $fraisTaux;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * @param float|null $max
     *
     * @return self
     */
    public function setMax(?float $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxDeroge(): ?float
    {
        return $this->maxDeroge;
    }

    /**
     * @param float|null $maxDeroge
     *
     * @return self
     */
    public function setMaxDeroge(?float $maxDeroge): self
    {
        $this->maxDeroge = $maxDeroge;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @param float|null $min
     *
     * @return self
     */
    public function setMin(?float $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinDeroge(): ?float
    {
        return $this->minDeroge;
    }

    /**
     * @param float|null $minDeroge
     *
     * @return self
     */
    public function setMinDeroge(?float $minDeroge): self
    {
        $this->minDeroge = $minDeroge;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPlafondOrigineDesFonds(): ?float
    {
        return $this->plafondOrigineDesFonds;
    }

    /**
     * @param float|null $plafondOrigineDesFonds
     *
     * @return self
     */
    public function setPlafondOrigineDesFonds(?float $plafondOrigineDesFonds): self
    {
        $this->plafondOrigineDesFonds = $plafondOrigineDesFonds;

        return $this;
    }

    /**
     * @return VersementMinDto|null
     */
    public function getVersementMinProfilGestion(): ?VersementMinDto
    {
        return $this->versementMinProfilGestion;
    }

    /**
     * @param VersementMinDto|null $versementMinProfilGestion
     *
     * @return self
     */
    public function setVersementMinProfilGestion(?VersementMinDto $versementMinProfilGestion): self
    {
        $this->versementMinProfilGestion = $versementMinProfilGestion;

        return $this;
    }
}
