<?php

declare(strict_types=1);

namespace Mpp\ApicilClientBundle\Model;

class ClauseBeneficiaireDto
{
    public const CHOIX_BENEFICIAIRE_CONJOINT = 'conjoint';
    public const CHOIX_BENEFICIAIRE_ENFANTS = 'enfants';
    public const CHOIX_BENEFICIAIRE_HERITIERS = 'heritiers';
    public const CHOIX_BENEFICIAIRE_MANUSCRITE = 'manuscrite';
    public const CHOIX_BENEFICIAIRE_NOTAIRE = 'notaire';

    /**
     * @var string|null
     */
    private $choixBeneficiaire;

    /**
     * @var string|null
     */
    private $clauseBeneficiaireLibre;

    /**
     * @var string|null
     */
    private $codePostalNotaire;

    /**
     * @var string|null
     */
    private $nomNotaire;

    /**
     * @var string|null
     */
    private $prenomNotaire;

    /**
     * @var string|null
     */
    private $villeNotaire;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @return string|null
     */
    public function getChoixBeneficiaire(): ?string
    {
        return $this->choixBeneficiaire;
    }

    /**
     * @param string|null $choixBeneficiaire
     *
     * @return self
     */
    public function setChoixBeneficiaire(?string $choixBeneficiaire): self
    {
        $this->choixBeneficiaire = $choixBeneficiaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClauseBeneficiaireLibre(): ?string
    {
        return $this->clauseBeneficiaireLibre;
    }

    /**
     * @param string|null $clauseBeneficiaireLibre
     *
     * @return self
     */
    public function setClauseBeneficiaireLibre(?string $clauseBeneficiaireLibre): self
    {
        $this->clauseBeneficiaireLibre = $clauseBeneficiaireLibre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodePostalNotaire(): ?string
    {
        return $this->codePostalNotaire;
    }

    /**
     * @param string|null $codePostalNotaire
     *
     * @return self
     */
    public function setCodePostalNotaire(?string $codePostalNotaire): self
    {
        $this->codePostalNotaire = $codePostalNotaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomNotaire(): ?string
    {
        return $this->nomNotaire;
    }

    /**
     * @param string|null $nomNotaire
     *
     * @return self
     */
    public function setNomNotaire(?string $nomNotaire): self
    {
        $this->nomNotaire = $nomNotaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenomNotaire(): ?string
    {
        return $this->prenomNotaire;
    }

    /**
     * @param string|null $prenomNotaire
     *
     * @return self
     */
    public function setPrenomNotaire(?string $prenomNotaire): self
    {
        $this->prenomNotaire = $prenomNotaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVilleNotaire(): ?string
    {
        return $this->villeNotaire;
    }

    /**
     * @param string|null $villeNotaire
     *
     * @return self
     */
    public function setVilleNotaire(?string $villeNotaire): self
    {
        $this->villeNotaire = $villeNotaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
}
