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

class FraisSurContratDto
{
    /**
     * @var float|null
     */
    private $surtauxSurEncours;

    /**
     * @var float|null
     */
    private $tauxFraisGestionEncoursEuro;

    /**
     * @var float|null
     */
    private $tauxFraisSurArbitrage;

    /**
     * @var float|null
     */
    private $tauxFraisSurEncoursUC;

    /**
     * @var float|null
     */
    private $tauxFraisSurEncoursUP;

    /**
     * @var float|null
     */
    private $tauxMaxFraisSurTousTypesVersements;

    /**
     * @var float|null
     */
    private $totalTauxFraisSurEncoursUC;

    /**
     * @var float|null
     */
    private $totalTauxFraisSurEncoursUP;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('surtauxSurEncours', null)->setAllowedTypes('surtauxSurEncours', ['float', 'null'])
            ->setDefault('tauxFraisGestionEncoursEuro', null)->setAllowedTypes('tauxFraisGestionEncoursEuro', ['float', 'null'])
            ->setDefault('tauxFraisSurArbitrage', null)->setAllowedTypes('tauxFraisSurArbitrage', ['float', 'null'])
            ->setDefault('tauxFraisSurEncoursUC', null)->setAllowedTypes('tauxFraisSurEncoursUC', ['float', 'null'])
            ->setDefault('tauxFraisSurEncoursUP', null)->setAllowedTypes('tauxFraisSurEncoursUP', ['float', 'null'])
            ->setDefault('tauxMaxFraisSurTousTypesVersements', null)->setAllowedTypes('tauxMaxFraisSurTousTypesVersements', ['float', 'null'])
            ->setDefault('totalTauxFraisSurEncoursUC', null)->setAllowedTypes('totalTauxFraisSurEncoursUC', ['float', 'null'])
            ->setDefault('totalTauxFraisSurEncoursUP', null)->setAllowedTypes('totalTauxFraisSurEncoursUP', ['float', 'null'])
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
            ->setSurtauxSurEncours($resolvedOptions['surtauxSurEncours'])
            ->setTauxFraisGestionEncoursEuro($resolvedOptions['tauxFraisGestionEncoursEuro'])
            ->setTauxFraisSurArbitrage($resolvedOptions['tauxFraisSurArbitrage'])
            ->setTauxFraisSurEncoursUC($resolvedOptions['tauxFraisSurEncoursUC'])
            ->setTauxFraisSurEncoursUP($resolvedOptions['tauxFraisSurEncoursUP'])
            ->setTauxMaxFraisSurTousTypesVersements($resolvedOptions['tauxMaxFraisSurTousTypesVersements'])
            ->setTotalTauxFraisSurEncoursUC($resolvedOptions['totalTauxFraisSurEncoursUC'])
            ->setTotalTauxFraisSurEncoursUP($resolvedOptions['totalTauxFraisSurEncoursUP'])
        ;
    }

    /**
     * @return float|null
     */
    public function getSurtauxSurEncours(): ?float
    {
        return $this->surtauxSurEncours;
    }

    /**
     * @param float|null $surtauxSurEncours
     *
     * @return self$resolvedOptions['tauxFraisSurEncoursUC']
     */
    public function setSurtauxSurEncours(?float $surtauxSurEncours): self
    {
        $this->surtauxSurEncours = $surtauxSurEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisGestionEncoursEuro(): ?float
    {
        return $this->tauxFraisGestionEncoursEuro;
    }

    /**
     * @param float|null $tauxFraisGestionEncoursEuro
     *
     * @return self
     */
    public function setTauxFraisGestionEncoursEuro(?float $tauxFraisGestionEncoursEuro): self
    {
        $this->tauxFraisGestionEncoursEuro = $tauxFraisGestionEncoursEuro;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisSurArbitrage(): ?float
    {
        return $this->tauxFraisSurArbitrage;
    }

    /**
     * @param float|null $tauxFraisSurArbitrageC
     *
     * @return self
     */
    public function setTauxFraisSurArbitrage(?float $tauxFraisSurArbitrage): self
    {
        $this->tauxFraisSurArbitrage = $tauxFraisSurArbitrage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisSurEncoursUC(): ?float
    {
        return $this->tauxFraisSurEncoursUC;
    }

    /**
     * @param float|null $tauxFraisSurEncoursUC
     *
     * @return self
     */
    public function setTauxFraisSurEncoursUC(?float $tauxFraisSurEncoursUC): self
    {
        $this->tauxFraisSurEncoursUC = $tauxFraisSurEncoursUC;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxFraisSurEncoursUP(): ?float
    {
        return $this->tauxFraisSurEncoursUP;
    }

    /**
     * @param float|null $tauxFraisSurEncoursUP
     *
     * @return self
     */
    public function setTauxFraisSurEncoursUP(?float $tauxFraisSurEncoursUP): self
    {
        $this->tauxFraisSurEncoursUP = $tauxFraisSurEncoursUP;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxMaxFraisSurTousTypesVersements(): ?float
    {
        return $this->tauxMaxFraisSurTousTypesVersements;
    }

    /**
     * @param float|null $tauxMaxFraisSurTousTypesVersements
     *
     * @return self
     */
    public function setTauxMaxFraisSurTousTypesVersements(?float $tauxMaxFraisSurTousTypesVersements): self
    {
        $this->tauxMaxFraisSurTousTypesVersements = $tauxMaxFraisSurTousTypesVersements;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalTauxFraisSurEncoursUC(): ?float
    {
        return $this->totalTauxFraisSurEncoursUC;
    }

    /**
     * @param float|null $totalTauxFraisSurEncoursUC
     *
     * @return self
     */
    public function setTotalTauxFraisSurEncoursUC(?float $totalTauxFraisSurEncoursUC): self
    {
        $this->totalTauxFraisSurEncoursUC = $totalTauxFraisSurEncoursUC;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalTauxFraisSurEncoursUP(): ?float
    {
        return $this->totalTauxFraisSurEncoursUP;
    }

    /**
     * @param float|null $totalTauxFraisSurEncoursUP
     *
     * @return self
     */
    public function setTotalTauxFraisSurEncoursUP(?float $totalTauxFraisSurEncoursUP): self
    {
        $this->totalTauxFraisSurEncoursUP = $totalTauxFraisSurEncoursUP;

        return $this;
    }
}
