<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('civilite', null)->setAllowedTypes('civilite', ['array', CiviliteDto::class, 'null'])->setNormalizer('civilite', function (Options $options, $value) {
                if ($value instanceof CiviliteDto || null === $value) {
                    return $value;
                }

                return CiviliteDto::createFromArray($value);
            })
            ->setDefault('dateNaissance', null)->setAllowedTypes('dateNaissance', [\DateTime::class, 'string', null])->setNormalizer('dateNaissance', function (Options $options, $value) {
                if ($value instanceof \DateTime ||  null === $value) {
                    return $value;
                }

                return \DateTime::createFromFormat('Y-m-d', $value);
            })
            ->setDefault('departementNaissance', null)->setAllowedTypes('departementNaissance', ['array', DepartementDto::class, 'null'])->setNormalizer('departementNaissance', function (Options $options, $value) {
                if ($value instanceof DepartementDto || null === $value) {
                    return $value;
                }

                return DepartementDto::createFromArray($value);
            })
            ->setDefault('nationalite', null)->setAllowedTypes('nationalite', ['array', NationaliteDto::class, 'null'])->setNormalizer('nationalite', function (Options $options, $value) {
                if ($value instanceof NationaliteDto || null === $value) {
                    return $value;
                }

                return NationaliteDto::createFromArray($value);
            })
            ->setDefault('nom', null)->setAllowedTypes('nom', ['string', 'null'])
            ->setDefault('pays', null)->setAllowedTypes('pays', ['array', PaysDto::class, 'null'])->setNormalizer('pays', function (Options $options, $value) {
                if ($value instanceof PaysDto || null === $value) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
            })
            ->setDefault('prenom', null)->setAllowedTypes('prenom', ['string', 'null'])
            ->setDefault('villeNaissance', null)->setAllowedTypes('villeNaissance', ['array', VilleNaissanceDto::class, 'null'])->setNormalizer('villeNaissance', function (Options $options, $value) {
                if ($value instanceof VilleNaissanceDto || null === $value) {
                    return $value;
                }

                return VilleNaissanceDto::createFromArray($value);
            })
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
            ->setCivilite($resolvedOptions['civilite'])
            ->setDateNaissance($resolvedOptions['dateNaissance'])
            ->setDepartementNaissance($resolvedOptions['departementNaissance'])
            ->setNom($resolvedOptions['nom'])
            ->setPays($resolvedOptions['pays'])
            ->setPrenom($resolvedOptions['prenom'])
            ->setVilleNaissance($resolvedOptions['villeNaissance'])
        ;
    }

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
