<?php

namespace Mpp\ApicilClientBundle\Model;

class PatrimoineDto
{
    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var string|null
     */
    private $preciserPatrimoine;

    /**
     * @var TypePatrimoineDto|null
     */
    private $typePatrimoine;

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
    public function getPreciserPatrimoine(): ?string
    {
        return $this->preciserPatrimoine;
    }

    /**
     * @param string|null $preciserPatrimoine
     *
     * @return self
     */
    public function setPreciserPatrimoine(?string $preciserPatrimoine): self
    {
        $this->preciserPatrimoine = $preciserPatrimoine;

        return $this;
    }

    /**
     * @return TypePatrimoineDto|null
     */
    public function getTypePatrimoine(): ?TypePatrimoineDto
    {
        return $this->typePatrimoine;
    }

    /**
     * @param TypePatrimoineDto|null $typePatrimoine
     *
     * @return self
     */
    public function setTypePatrimoine(?TypePatrimoineDto $typePatrimoine): self
    {
        $this->typePatrimoine = $typePatrimoine;

        return $this;
    }
}
