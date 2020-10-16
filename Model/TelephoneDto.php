<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TelephoneDto
{
    /**
     * @var string|null
     */
    private $indicatif;

    /**
     * @var string|null
     */
    private $numeroTelephone;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('indicatif', null)->setAllowedTypes('indicatif', ['string', 'null'])
            ->setDefault('numeroTelephone', null)->setAllowedTypes('numeroTelephone', ['string', 'null'])
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
            ->setIndicatif($resolvedOptions['indicatif'])
            ->setNumeroTelephone($resolvedOptions['numeroTelephone'])
        ;
    }

    /**
     * @return string|null
     */
    public function getIndicatif(): ?string
    {
        return $this->indicatif;
    }

    /**
     * @param string|null $indicatif
     *
     * @return self
     */
    public function setIndicatif(?string $indicatif): self
    {
        $this->indicatif = $indicatif;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    /**
     * @param string|null $numeroTelephone
     *
     * @return self
     */
    public function setNumeroTelephone(?string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }
}
