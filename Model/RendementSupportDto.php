<?php

namespace Mpp\ApicilClientBundle\Model;

class RendementSupportDto
{
    /**
     * @var int|null
     */
    private $annee;

    /**
     * @var float|null
     */
    private $rendement;

    /**
     * @return int|null
     */
    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    /**
     * @param int|null $annee
     *
     * @return self
     */
    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRendement(): ?float
    {
        return $this->rendement;
    }

    /**
     * @param float|null $rendement
     *
     * @return self
     */
    public function setRendement(?float $rendement): self
    {
        $this->rendement = $rendement;

        return $this;
    }
}
