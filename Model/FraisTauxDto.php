<?php

namespace Mpp\ApicilClientBundle\Model;

class FraisTauxDto
{
    /**
     * @var BorneTaux|null
     */
    private $borneApporteur;

    /**
     * @var BorneTaux|null
     */
    private $borneCompagnie;

    /**
     * @var BorneTaux|null
     */
    private $borneGlobal;

    /**
     * @var float|null
     */
    private $tauxApporteur;

    /**
     * @var float|null
     */
    private $tauxCompagnie;

    /**
     * @return BorneTaux|null
     */
    public function getBorneApporteur(): ?BorneTaux
    {
        return $this->borneApporteur;
    }

    /**
     * @param BorneTaux|null $borneApporteur
     *
     * @return self
     */
    public function setBorneApporteur(?BorneTaux $borneApporteur): self
    {
        $this->borneApporteur = $borneApporteur;

        return $this;
    }

    /**
     * @return BorneTaux|null
     */
    public function getBorneCompagnie(): ?BorneTaux
    {
        return $this->borneCompagnie;
    }

    /**
     * @param BorneTaux|null $borneCompagnie
     *
     * @return self
     */
    public function setBorneCompagnie(?BorneTaux $borneCompagnie): self
    {
        $this->borneCompagnie = $borneCompagnie;

        return $this;
    }

    /**
     * @return BorneTaux|null
     */
    public function getBorneGlobal(): ?BorneTaux
    {
        return $this->borneGlobal;
    }

    /**
     * @param BorneTaux|null $borneGlobal
     *
     * @return self
     */
    public function setBorneGlobal(?BorneTaux $borneGlobal): self
    {
        $this->borneGlobal = $borneGlobal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxApporteur(): ?float
    {
        return $this->tauxApporteur;
    }

    /**
     * @param float|null $tauxApporteur
     *
     * @return self
     */
    public function setTauxApporteur(?float $tauxApporteur): self
    {
        $this->tauxApporteur = $tauxApporteur;

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
