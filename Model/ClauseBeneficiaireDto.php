<?php

declare(strict_types=1);

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('choixBeneficiaire', null)->setAllowedValues('choixBeneficiaire', [self::CHOIX_BENEFICIAIRE_CONJOINT, self::CHOIX_BENEFICIAIRE_ENFANTS, self::CHOIX_BENEFICIAIRE_HERITIERS, self::CHOIX_BENEFICIAIRE_MANUSCRITE, self::CHOIX_BENEFICIAIRE_NOTAIRE])
            ->setDefault('clauseBeneficiaireLibre', null)->setAllowedTypes('clauseBeneficiaireLibre', ['string', 'null'])
            ->setDefault('codePostalNotaire', null)->setAllowedTypes('clauseBeneficiaireLibre', ['string', 'null'])
            ->setDefault('nomNotaire', null)->setAllowedTypes('clauseBeneficiaireLibre', ['string', 'null'])
            ->setDefault('prenomNotaire', null)->setAllowedTypes('clauseBeneficiaireLibre', ['string', 'null'])
            ->setDefault('villeNotaire', null)->setAllowedTypes('clauseBeneficiaireLibre', ['string', 'null'])
        ;
    }

    /**
     * @param array $options
     *
     * @return self
     *
     * @throws UndefinedOptionsException If an option name is undefined
     * @throws InvalidOptionsException   If an option doesn't fulfill the language specified validation rules
     * @throws MissingOptionsException   If a required option is missing
     * @throws OptionDefinitionException If there is a cyclic dependency between lazy options and/or normalizers
     * @throws NoSuchOptionException     If a lazy option reads an unavailable option
     * @throws AccessException           If called from a lazy option or normalizer
     */
    public static function createFromArray(array $options): self
    {
        $resolver = new OptionsResolver();
        self::configureData($resolver);
        $resolvedOptions = $resolver->resolve($options);

        return (new self())
            ->setChoixBeneficiaire($resolvedOptions['choixBeneficiaire'])
            ->setClauseBeneficiaireLibre($resolvedOptions['clauseBeneficiaireLibre'])
            ->setCodePostalNotaire($resolvedOptions['codePostalNotaire'])
            ->setNomNotaire($resolvedOptions['nomNotaire'])
            ->setPrenomNotaire($resolvedOptions['prenomNotaire'])
            ->setVilleNotaire($resolvedOptions['villeNotaire'])
        ;
    }

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
    public function setPrenomNotaire(?string $prenomNotairesetCodePostalNotaire): self
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
