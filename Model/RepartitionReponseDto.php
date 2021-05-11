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

class RepartitionReponseDto
{
    /**
     * @var TrClasseActifDto|null
     */
    private $classeActif;

    /**
     * @var string|null
     */
    private $codeIsinSupport;

    /**
     * @var bool|null
     */
    private $desinvestissement;

    /**
     * @var bool|null
     */
    private $eligibleVP;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var float|null
     */
    private $pourcentage;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('classeActif', null)->setAllowedTypes('classeActif', ['array', TrClasseActifDto::class, 'null'])->setNormalizer('classeActif', function (Options $options, $value) {
                if ($value instanceof TrClasseActifDto || null == $value) {
                    return $value;
                }

                return TrClasseActifDto::createFromArray($value);
            })
            ->setRequired('codeIsinSupport')->setAllowedTypes('codeIsinSupport', ['string'])
            ->setDefault('desinvestissement', null)->setAllowedTypes('desinvestissement', ['bool', 'null'])
            ->setDefault('eligibleVP', null)->setAllowedTypes('eligibleVP', ['bool', 'null'])
            ->setRequired('montant')->setAllowedTypes('montant', ['float'])
            ->setRequired('pourcentage')->setAllowedTypes('pourcentage', ['float'])
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
            ->setClasseActif($resolvedOptions['classeActif'])
            ->setCodeIsinSupport($resolvedOptions['codeIsinSupport'])
            ->setDesinvestissement($resolvedOptions['desinvestissement'])
            ->setEligibleVP($resolvedOptions['eligibleVP'])
            ->setMontant($resolvedOptions['montant'])
            ->setPourcentage($resolvedOptions['pourcentage'])
        ;
    }

    /**
     * @return string|null
     */
    public function getCodeIsinSupport(): ?string
    {
        return $this->codeIsinSupport;
    }

    /**
     * @param string|null $codeIsinSupport
     *
     * @return self
     */
    public function setCodeIsinSupport(?string $codeIsinSupport): self
    {
        $this->codeIsinSupport = $codeIsinSupport;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    /**
     * @param float|null $pourcentage
     *
     * @return self
     */
    public function setPourcentage(?float $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * @return  TrClasseActifDto|null
     */
    public function getClasseActif(): ?TrClasseActifDto
    {
        return $this->classeActif;
    }

    /**
     * @param  TrClasseActifDto|null  $classeActif
     *
     * @return  self
     */
    public function setClasseActif(?TrClasseActifDto $classeActif): self
    {
        $this->classeActif = $classeActif;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getDesinvestissement(): ?bool
    {
        return $this->desinvestissement;
    }

    /**
     * @param  bool|null  $desinvestissement
     *
     * @return  self
     */
    public function setDesinvestissement(?bool $desinvestissement): self
    {
        $this->desinvestissement = $desinvestissement;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getEligibleVP(): ?bool
    {
        return $this->eligibleVP;
    }

    /**
     * @param  bool|null  $eligibleVP
     *
     * @return  self
     */
    public function setEligibleVP(?bool $eligibleVP): self
    {
        $this->eligibleVP = $eligibleVP;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param  float|null  $montant
     *
     * @return  self
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
