<?php

namespace Mpp\ApicilClientBundle\Model;

class FraisEncoursDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var float|null
     */
    private $taux;

    /**
     * @var float|null
     */
    private $tauxCompagnie;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaux(): ?float
    {
        return $this->taux;
    }

    /**
     * @param float|null $taux
     *
     * @return self
     */
    public function setTaux(?float $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxCompagnie(): ?float
    {
        return $this->tauxCompagnie;
    }

    /**
     * @param float|null $tauxCompagnie
     *
     * @return self
     */
    public function setTauxCompagnie(?float $tauxCompagnie): self
    {
        $this->tauxCompagnie = $tauxCompagnie;

        return $this;
    }
}
