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

class ProfilGestionDto
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var SocieteGestionDto|null
     */
    private $societe;

    /**
     * @var float|null
     */
    private $surtauxEncours;

    /**
     * @var float|null
     */
    private $surtauxMax;

    /**
     * @var ThematiqueDto|null
     */
    private $thematique;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('code')->setAllowedTypes('code', ['string'])
            ->setDefault('societe', null)->setAllowedTypes('societe', ['array', SocieteGestionDto::class, 'null'])->setNormalizer('societe', function (Options $options, $value) {
                if ($value instanceof SocieteGestionDto || null === $value) {
                    return $value;
                }

                return SocieteGestionDto::createFromArray($value);
            })
            ->setDefault('surtauxEncours', null)->setAllowedTypes('surtauxEncours', ['float', 'null'])
            ->setDefault('surtauxMax', null)->setAllowedTypes('surtauxMax', ['float', 'null'])
            ->setDefault('thematique', null)->setAllowedTypes('thematique', ['array', ThematiqueDto::class, 'null'])->setNormalizer('thematique', function (Options $options, $value) {
                if ($value instanceof ThematiqueDto || null === $value) {
                    return $value;
                }

                return ThematiqueDto::createFromArray($value);
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
            ->setCode($resolvedOptions['code'])
            ->setSociete($resolvedOptions['societe'])
            ->setSurtauxEncours($resolvedOptions['surtauxEncours'])
            ->setSurtauxMax($resolvedOptions['surtauxMax'])
            ->setThematique($resolvedOptions['thematique'])
        ;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return SocieteGestionDto|null
     */
    public function getSociete(): ?SocieteGestionDto
    {
        return $this->societe;
    }

    /**
     * @param SocieteGestionDto|null $societe
     *
     * @return self
     */
    public function setSociete(?SocieteGestionDto $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSurtauxEncours(): ?float
    {
        return $this->surtauxEncours;
    }

    /**
     * @param float|null $surtauxEncours
     *
     * @return self
     */
    public function setSurtauxEncours(?float $surtauxEncours): self
    {
        $this->surtauxEncours = $surtauxEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSurtauxMax(): ?float
    {
        return $this->surtauxMax;
    }

    /**
     * @param float|null $surtauxMax
     *
     * @return self
     */
    public function setSurtauxMax(?float $surtauxMax): self
    {
        $this->surtauxMax = $surtauxMax;

        return $this;
    }

    /**
     * @return ThematiqueDto|null
     */
    public function getThematique(): ?ThematiqueDto
    {
        return $this->thematique;
    }

    /**
     * @param ThematiqueDto|null $thematique
     *
     * @return self
     */
    public function setThematique(?ThematiqueDto $thematique): self
    {
        $this->thematique = $thematique;

        return $this;
    }
}
