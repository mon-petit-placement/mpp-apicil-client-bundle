<?php

namespace Mpp\ApicilClientBundle\Model;

class CourtierDto
{
    /**
     * @var string|null
     */
    private $adresse1;

    /**
     * @var string|null
     */
    private $adresse2;

    /**
     * @var string|null
     */
    private $adresse3;

    /**
     * @var string|null
     */
    private $civilite;

    /**
     * @var string|null
     */
    private $codePostal;

    /**
     * @var string|null
     */
    private $dateConnexion;

    /**
     * @var string|null
     */
    private $dateDerniereConnexion;

    /**
     * @var string|null
     */
    private $dateNaissance;

    /**
     * @var string|null
     */
    private $entrepriseReferenceEditique;

    /**
     * @var int|null
     */
    private $idOrgaLiferay;

    /**
     * @var string|null
     */
    private $identifiant;

    /**
     * @var string|null
     */
    private $lieuDeNaissance;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $nomNaissance;

    /**
     * @var string|null
     */
    private $pays;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var string|null
     */
    private $representantLegal;

    /**
     * @var string|null
     */
    private $telephoneResponsable;

    /**
     * @var string|null
     */
    private $ville;

    /**
     * @return string|null
     */
    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    /**
     * @param string|null $adresse1
     *
     * @return self
     */
    public function setAdresse1(?string $adresse1): self
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    /**
     * @param string|null $adresse2
     *
     * @return self
     */
    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresse3(): ?string
    {
        return $this->adresse3;
    }

    /**
     * @param string|null $adresse3
     *
     * @return self
     */
    public function setAdresse3(?string $adresse3): self
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    /**
     * @param string|null $civilite
     *
     * @return self
     */
    public function setCivilite(?string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * @param string|null $codePostal
     *
     * @return self
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateConnexion(): ?string
    {
        return $this->dateConnexion;
    }

    /**
     * @param string|null $dateConnexion
     *
     * @return self
     */
    public function setDateConnexion(?string $dateConnexion): self
    {
        $this->dateConnexion = $dateConnexion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateDerniereConnexion(): ?string
    {
        return $this->dateDerniereConnexion;
    }

    /**
     * @param string|null $dateDerniereConnexion
     *
     * @return self
     */
    public function setDateDerniereConnexion(?string $dateDerniereConnexion): self
    {
        $this->dateDerniereConnexion = $dateDerniereConnexion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    /**
     * @param string|null $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(?string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntrepriseReferenceEditique(): ?string
    {
        return $this->entrepriseReferenceEditique;
    }

    /**
     * @param string|null $entrepriseReferenceEditique
     *
     * @return self
     */
    public function setEntrepriseReferenceEditique(?string $entrepriseReferenceEditique): self
    {
        $this->entrepriseReferenceEditique = $entrepriseReferenceEditique;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdOrgaLiferay(): ?int
    {
        return $this->idOrgaLiferay;
    }

    /**
     * @param int|null $idOrgaLiferay
     *
     * @return self
     */
    public function setIdOrgaLiferay(?int $idOrgaLiferay): self
    {
        $this->idOrgaLiferay = $idOrgaLiferay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    /**
     * @param string|null $identifiant
     *
     * @return self
     */
    public function setIdentifiant(?string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLieuDeNaissance(): ?string
    {
        return $this->lieuDeNaissance;
    }

    /**
     * @param string|null $lieuDeNaissance
     *
     * @return self
     */
    public function setLieuDeNaissance(?string $lieuDeNaissance): self
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

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
     * @return string|null
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * @param string|null $pays
     *
     * @return self
     */
    public function setPays(?string $pays): self
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
     * @return string|null
     */
    public function getRepresentantLegal(): ?string
    {
        return $this->representantLegal;
    }

    /**
     * @param string|null $representantLegal
     *
     * @return self
     */
    public function setRepresentantLegal(?string $representantLegal): self
    {
        $this->representantLegal = $representantLegal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephoneResponsable(): ?string
    {
        return $this->telephoneResponsable;
    }

    /**
     * @param string|null $telephoneResponsable
     *
     * @return self
     */
    public function setTelephoneResponsable(?string $telephoneResponsable): self
    {
        $this->telephoneResponsable = $telephoneResponsable;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string|null $ville
     *
     * @return self
     */
    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}
