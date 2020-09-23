<?php

namespace Mpp\ApicilClientBundle\Model;

class PortefeuilleDto
{
    /**
     * @var string|null
     */
    private $isinCode;

    /**
     * @var float|null
     */
    private $repartition;

    /**
     * @return string|null
     */
    public function getIsinCode(): ?string
    {
        return $this->isinCode;
    }

    /**
     * @param string|null $isinCode
     *
     * @return self
     */
    public function setIsinCode(?string $isinCode): self
    {
        $this->isinCode = $isinCode;

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
}
