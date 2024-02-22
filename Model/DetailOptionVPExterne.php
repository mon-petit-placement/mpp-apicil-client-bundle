<?php

namespace Mpp\ApicilClientBundle\Model;

class DetailOptionVPExterne
{
    public const TYPEOPTION_ARBITRAGE_PROGRAMME = 'ARBITRAGE_PROGRAMME';
    public const TYPEOPTION_GARANTIE = 'GARANTIE';
    public const TYPEOPTION_RACHAT_PROGRAMME = 'RACHAT_PROGRAMME';
    public const TYPEOPTION_SECURISATION_PLUS_AU_MOINS_VALUE = 'SECURISATION_PLUS_AU_MOINS_VALUE';
    public const TYPEOPTION_VERSEMENT_PROGRAMMEE = 'VERSEMENT_PROGRAMMEE';
    public const TYPEOPTION_DYNAMISATION_INTERET = 'DYNAMISATION_INTERET';

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var string|null
     */
    private $periodicite;

    /**
     * @var array|null
     */
    private $supports;

    /**
     * @var array|null
     */
    private $typeGarantie;

    /**
     * @var string|null
     */
    private $typeOption;

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
     * @return array|null
     */
    public function getTypeGarantie(): ?array
    {
        return $this->typeGarantie;
    }

    /**
     * @param array|null $typeGarantie
     *
     * @return self
     */
    public function setTypeGarantie(?array $typeGarantie): self
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
}
