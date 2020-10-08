<?php

namespace Mpp\ApicilClientBundle\Model;

class CoordonneesProfessionnellesMadelinDto
{
    /**
     * @var string|null
     */
    private $adresse;

    /**
     * @var string|null
     */
    private $adresseComplementaire;

    /**
     * @var string|null
     */
    private $codePostal;

    /**
     * @var string|null
     */
    private $nomCommercial;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @var string|null
     */
    private $ville;

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string|null $adresse
     *
     * @return self
     */
    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseComplementaire(): ?string
    {
        return $this->adresseComplementaire;
    }

    /**
     * @param string|null $adresseComplementaire
     *
     * @return self
     */
    public function setAdresseComplementaire(?string $adresseComplementaire): self
    {
        $this->adresseComplementaire = $adresseComplementaire;

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
    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    /**
     * @param string|null $nomCommercial
     *
     * @return self
     */
    public function setNomCommercial(?string $nomCommercial): self
    {
        $this->nomCommercial = $nomCommercial;

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
