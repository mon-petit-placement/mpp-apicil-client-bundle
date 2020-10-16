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

class PortefeuilleDto
{
    /**
     * @var bool|null
     */
    private $eligibleVP;

    /**
     * @var string
     */
    private $isinCode;

    /**
     * @var float
     */
    private $repartition;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('eligibleVP', null)->setAllowedTypes('eligibleVP', ['bool', 'null'])
            ->setRequired('isinCode')->setAllowedTypes('isinCode', ['string'])
            ->setRequired('repartition')->setAllowedTypes('repartition', ['float'])
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
            ->setEligibleVP($resolvedOptions['eligibleVP'])
            ->setIsinCode($resolvedOptions['isinCode'])
            ->setRepartition($resolvedOptions['repartition'])
        ;
    }

    /**
     * @return bool|null
     */
    public function getEligibleVP(): ?bool
    {
        return $this->eligibleVP;
    }

    /**
     * @param bool|null $eligibleVP
     *
     * @return self
     */
    public function setEligibleVP(?bool $eligibleVP): self
    {
        $this->eligibleVP = $eligibleVP;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsinCode(): string
    {
        return $this->isinCode;
    }

    /**
     * @param string $isinCode
     *
     * @return self
     */
    public function setIsinCode(string $isinCode): self
    {
        $this->isinCode = $isinCode;

        return $this;
    }

    /**
     * @return float
     */
    public function getRepartition(): float
    {
        return $this->repartition;
    }

    /**
     * @param float $repartition
     *
     * @return self
     */
    public function setRepartition(float $repartition): self
    {
        $this->repartition = $repartition;

        return $this;
    }
}
