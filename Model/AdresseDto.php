<?php

namespace Mpp\ApicilClientBundle\Model;

class AdresseDto
{
    /**
     * @var string|null
     */
    private $adresseComplementaire;

    /**
     * @var string|null
     */
    private $adressePrincipale;

    /**
     * @var string|null
     */
    private $codePostal;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @var VilleDto|null
     */
    private $ville;

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
    public function getAdressePrincipale(): ?string
    {
        return $this->adressePrincipale;
    }

    /**
     * @param string|null $adressePrincipale
     *
     * @return self
     */
    public function setAdressePrincipale(?string $adressePrincipale): self
    {
        $this->adressePrincipale = $adressePrincipale;

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
     * @return VilleDto|null
     */
    public function getVille(): ?VilleDto
    {
        return $this->ville;
    }

    /**
     * @param VilleDto|null $ville
     *
     * @return self
     */
    public function setVille(?VilleDto $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}
