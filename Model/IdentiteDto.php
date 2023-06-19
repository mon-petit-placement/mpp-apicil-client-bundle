<?php

namespace Mpp\ApicilClientBundle\Model;

class IdentiteDto
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
    private $civilite;

    /**
     * @var string|null
     */
    private $codePostal;

    /**
     * @var \DateTime|null
     */
    private $dateNaissance;

    /**
     * @var string|null
     */
    private $identifiant;

    /**
     * @var string|null
     */
    private $lieudDeNaissance;

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
    private $ville;

    /**
     * @var string|null
     */
    private $email;

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
    public function getLieudDeNaissance(): ?string
    {
        return $this->lieudDeNaissance;
    }

    /**
     * @param string|null $lieudDeNaissance
     *
     * @return self
     */
    public function setLieudDeNaissance(?string $lieudDeNaissance): self
    {
        $this->lieudDeNaissance = $lieudDeNaissance;

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

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
