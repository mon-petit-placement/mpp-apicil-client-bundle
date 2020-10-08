<?php

namespace Mpp\ApicilClientBundle\Model;

class EtatCivilDto
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
     * @var string|null
     */
    private $nomNaissance;

    /**
     * @var int|null
     */
    private $nombrePersonnesACharge;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @var array|null
     */
    private $personnesACharge;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var RegimeMatrimonialDto|null
     */
    private $regimeMatrimonial;

    /**
     * @var SituationFamilialeDto|null
     */
    private $situationFamiliale;

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
     * @return string|null
     */
    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    /**
     * @param string|null $nomNaissance
     *
     * @return self
     */
    public function setNomNaissance(?string $nomNaissance): self
    {
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombrePersonnesACharge(): ?int
    {
        return $this->nombrePersonnesACharge;
    }

    /**
     * @param int|null $nombrePersonnesACharge
     *
     * @return self
     */
    public function setNombrePersonnesACharge(?int $nombrePersonnesACharge): self
    {
        $this->nombrePersonnesACharge = $nombrePersonnesACharge;

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
     * @return array|null
     */
    public function getPersonnesACharge(): ?array
    {
        return $this->personnesACharge;
    }

    /**
     * @param array|null $personnesACharge
     *
     * @return self
     */
    public function setPersonnesACharge(?array $personnesACharge): self
    {
        $this->personnesACharge = $personnesACharge;

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
     * @return RegimeMatrimonialDto|null
     */
    public function getRegimeMatrimonial(): ?RegimeMatrimonialDto
    {
        return $this->regimeMatrimonial;
    }

    /**
     * @param RegimeMatrimonialDto|null $regimeMatrimonial
     *
     * @return self
     */
    public function setRegimeMatrimonial(?RegimeMatrimonialDto $regimeMatrimonial): self
    {
        $this->regimeMatrimonial = $regimeMatrimonial;

        return $this;
    }

    /**
     * @return SituationFamilialeDto|null
     */
    public function getSituationFamiliale(): ?SituationFamilialeDto
    {
        return $this->situationFamiliale;
    }

    /**
     * @param SituationFamilialeDto|null $situationFamiliale
     *
     * @return self
     */
    public function setSituationFamiliale(?SituationFamilialeDto $situationFamiliale): self
    {
        $this->situationFamiliale = $situationFamiliale;

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
