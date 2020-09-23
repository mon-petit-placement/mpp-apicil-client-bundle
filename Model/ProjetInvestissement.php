<?php

namespace Mpp\ApicilClientBundle\Model;

class ProjetInvestissement
{
    /**
     * @var connaissanceClient|null
     */
    private $connaissanceClient;

    /**
     * @var int|null
     */
    private $courtierId;

    /**
     * @var produit|null
     */
    private $produit;

    /**
     * @var ProfilGestionDto|null
     */
    private $profilGestion;

    /**
     * @var souscription|null
     */
    private $souscription;

    /**
     * @var array|null
     */
    private $typesSouscription;

    /**
     * @return connaissanceClient|null
     */
    public function getConnaissanceClient(): ?connaissanceClient
    {
        return $this->connaissanceClient;
    }

    /**
     * @param connaissanceClient|null $connaissanceClient
     *
     * @return self
     */
    public function setConnaissanceClient(?connaissanceClient $connaissanceClient): self
    {
        $this->connaissanceClient = $connaissanceClient;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCourtierId(): ?int
    {
        return $this->courtierId;
    }

    /**
     * @param int|null $courtierId
     *
     * @return self
     */
    public function setCourtierId(?int $courtierId): self
    {
        $this->courtierId = $courtierId;

        return $this;
    }

    /**
     * @return produit|null
     */
    public function getProduit(): ?produit
    {
        return $this->produit;
    }

    /**
     * @param produit|null $produit
     *
     * @return self
     */
    public function setProduit(?produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * @return ProfilGestionDto|null
     */
    public function getProfilGestion(): ?ProfilGestionDto
    {
        return $this->profilGestion;
    }

    /**
     * @param ProfilGestionDto|null $profilGestion
     *
     * @return self
     */
    public function setProfilGestion(?ProfilGestionDto $profilGestion): self
    {
        $this->profilGestion = $profilGestion;

        return $this;
    }

    /**
     * @return souscription|null
     */
    public function getSouscription(): ?souscription
    {
        return $this->souscription;
    }

    /**
     * @param souscription|null $souscription
     *
     * @return self
     */
    public function setSouscription(?souscription $souscription): self
    {
        $this->souscription = $souscription;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTypesSouscription(): ?array
    {
        return $this->typesSouscription;
    }

    /**
     * @param array|null $typesSouscription
     *
     * @return self
     */
    public function setTypesSouscription(?array $typesSouscription): self
    {
        $this->typesSouscription = $typesSouscription;

        return $this;
    }
}
