<?php

namespace Mpp\ApicilClientBundle\Model;

class RevenusDto
{
    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var string|null
     */
    private $preciserRevenu;

    /**
     * @var TypeRevenuDto|null
     */
    private $typeRevenu;

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
    public function getPreciserRevenu(): ?string
    {
        return $this->preciserRevenu;
    }

    /**
     * @param string|null $preciserRevenu
     *
     * @return self
     */
    public function setPreciserRevenu(?string $preciserRevenu): self
    {
        $this->preciserRevenu = $preciserRevenu;

        return $this;
    }

    /**
     * @return TypeRevenuDto|null
     */
    public function getTypeRevenu(): ?TypeRevenuDto
    {
        return $this->typeRevenu;
    }

    /**
     * @param TypeRevenuDto|null $typeRevenu
     *
     * @return self
     */
    public function setTypeRevenu(?TypeRevenuDto $typeRevenu): self
    {
        $this->typeRevenu = $typeRevenu;

        return $this;
    }
}
