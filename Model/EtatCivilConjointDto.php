<?php

namespace Mpp\ApicilClientBundle\Model;

class EtatCivilConjointDto
{
    /**
     * @var CiviliteDto|null
     */
    private $civilite;

    /**
     * @var \DateTime|null
     */
    private $dateNaissance;

    /**
     * @var DepartementDto|null
     */
    private $departementNaissance;

    /**
     * @var NationaliteDto|null
     */
    private $nationalite;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var VilleNaissanceDto|null
     */
    private $villeNaissance;

    /**
     * @return CiviliteDto|null
     */
    public function getCivilite(): ?CiviliteDto
    {
        return $this->civilite;
    }

    /**
     * @param CiviliteDto|null $civilite
     *
     * @return self
     */
    public function setCivilite(?CiviliteDto $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime|null $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(?\DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return DepartementDto|null
     */
    public function getDepartementNaissance(): ?DepartementDto
    {
        return $this->departementNaissance;
    }

    /**
     * @param DepartementDto|null $departementNaissance
     *
     * @return self
     */
    public function setDepartementNaissance(?DepartementDto $departementNaissance): self
    {
        $this->departementNaissance = $departementNaissance;

        return $this;
    }

    /**
     * @return NationaliteDto|null
     */
    public function getNationalite(): ?NationaliteDto
    {
        return $this->nationalite;
    }

    /**
     * @param NationaliteDto|null $nationalite
     *
     * @return self
     */
    public function setNationalite(?NationaliteDto $nationalite): self
    {
        $this->nationalite = $nationalite;

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
    public function getPays(): ?PaysDto
    {
        return $this->pays;
    }

    /**
     * @param PaysDto|null $pays
     *
     * @return self
     */
    public function setPays(?PaysDto $pays): self
    {
        $this->pays = $pays;

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

    /**
     * @return VilleNaissanceDto|null
     */
    public function getVilleNaissance(): ?VilleNaissanceDto
    {
        return $this->villeNaissance;
    }

    /**
     * @param VilleNaissanceDto|null $villeNaissance
     *
     * @return self
     */
    public function setVilleNaissance(?VilleNaissanceDto $villeNaissance): self
    {
        $this->villeNaissance = $villeNaissance;

        return $this;
    }
}
