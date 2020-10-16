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

class SouscriptionRetraiteDto
{
    /**
     * @var SouscriptionPerinDto|null
     */
    private $souscriptionPerin;

    /**
     * @var SouscriptionPerpDto|null
     */
    private $souscriptionPerp;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('souscriptionPerin', null)->setAllowedTypes('souscriptionPerin', ['array', SouscriptionPerin::class, 'null'])->setNormalizer('souscriptionPerin', function (Options $options, $value) {
                if ($value instanceof SouscriptionPerin || null === $value) {
                    return $value;
                }

                return SouscriptionPerin::createFromArray($value);
            })
            ->setDefault('souscriptionPerp', null)->setAllowedTypes('souscriptionPerp', ['array', SouscriptionPerp::class, 'null'])->setNormalizer('souscriptionPerp', function (Options $options, $value) {
                if ($value instanceof SouscriptionPerp || null === $value) {
                    return $value;
                }

                return SouscriptionPerp::createFromArray($value);
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
            ->setSouscriptionPerinDto($resolvedOptions['souscriptionPerin'])
            ->setSouscriptionPerpDto($resolvedOptions['souscriptionPerp'])
        ;
    }

    /**
     * @return SouscriptionPerinDto|null
     */
    public function getSouscriptionPerinDto(): ?SouscriptionPerinDto
    {
        return $this->souscriptionPerin;
    }

    /**
     * @param SouscriptionPerinDto|null $souscriptionPerin
     *
     * @return self
     */
    public function setSouscriptionPerinDto(?SouscriptionPerinDto $souscriptionPerin): self
    {
        $this->souscriptionPerin = $souscriptionPerin;

        return $this;
    }

    /**
     * @return SouscriptionPerpDto|null
     */
    public function getSouscriptionPerpDto(): ?SouscriptionPerpDto
    {
        return $this->souscriptionPerp;
    }

    /**
     * @param SouscriptionPerpDto|null $souscriptionPerp
     *
     * @return self
     */
    public function setSouscriptionPerpDto(?SouscriptionPerpDto $souscriptionPerp): self
    {
        $this->souscriptionPerp = $souscriptionPerp;

        return $this;
    }
}
