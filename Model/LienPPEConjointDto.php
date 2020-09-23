<?php

namespace Mpp\ApicilClientBundle\Model;

class LienPPEConjointDto
{
    /**
     * @var FonctionPPEDto|null
     */
    private $fonction;

    /**
     * @var NatureLienDto|null
     */
    private $natureLien;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var PaysDto|null
     */
    private $paysExerce;

    /**
     * @var string|null
     */
    private $ppeFonctionAutre;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @return FonctionPPEDto|null
     */
    public function getFonction(): ?FonctionPPEDto
    {
        return $this->fonction;
    }

    /**
     * @param FonctionPPEDto|null $fonction
     *
     * @return self
     */
    public function setFonction(?FonctionPPEDto $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return NatureLienDto|null
     */
    public function getNatureLien(): ?NatureLienDto
    {
        return $this->natureLien;
    }

    /**
     * @param NatureLienDto|null $natureLien
     *
     * @return self
     */
    public function setNatureLien(?NatureLienDto $natureLien): self
    {
        $this->natureLien = $natureLien;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     *
     * @return self
     */
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return PaysDto|null
     */
    public function getPaysExerce(): ?PaysDto
    {
        return $this->paysExerce;
    }

    /**
     * @param PaysDto|null $paysExerce
     *
     * @return self
     */
    public function setPaysExerce(?PaysDto $paysExerce): self
    {
        $this->paysExerce = $paysExerce;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPpeFonctionAutre(): ?string
    {
        return $this->ppeFonctionAutre;
    }

    /**
     * @param string|null $ppeFonctionAutre
     *
     * @return self
     */
    public function setPpeFonctionAutre(?string $ppeFonctionAutre): self
    {
        $this->ppeFonctionAutre = $ppeFonctionAutre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     *
     * @return self
     */
    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
