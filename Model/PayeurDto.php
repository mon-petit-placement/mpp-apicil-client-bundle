<?php

namespace Mpp\ApicilClientBundle\Model;

class PayeurDto
{
    /**
     * @var \DateTime|null
     */
    private $dateNaissance;

    /**
     * @var string|null
     */
    private $lienSiAutre;

    /**
     * @var LienParenteDto|null
     */
    private $lienSouscripteur;

    /**
     * @var VilleDto|null
     */
    private $lieuNaissance;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $prenom;

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
    public function getLienSiAutre(): ?string
    {
        return $this->lienSiAutre;
    }

    /**
     * @param string|null $lienSiAutre
     *
     * @return self
     */
    public function setLienSiAutre(?string $lienSiAutre): self
    {
        $this->lienSiAutre = $lienSiAutre;

        return $this;
    }

    /**
     * @return LienParenteDto|null
     */
    public function getLienSouscripteur(): ?LienParenteDto
    {
        return $this->lienSouscripteur;
    }

    /**
     * @param LienParenteDto|null $lienSouscripteur
     *
     * @return self
     */
    public function setLienSouscripteur(?LienParenteDto $lienSouscripteur): self
    {
        $this->lienSouscripteur = $lienSouscripteur;

        return $this;
    }

    /**
     * @return VilleDto|null
     */
    public function getLieuNaissance(): ?VilleDto
    {
        return $this->lieuNaissance;
    }

    /**
     * @param VilleDto|null $lieuNaissance
     *
     * @return self
     */
    public function setLieuNaissance(?VilleDto $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

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
