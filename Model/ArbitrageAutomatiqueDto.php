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

class ArbitrageAutomatiqueDto
{
    public const NIVEAU_10 = 'NIVEAU_10';
    public const NIVEAU_15 = 'NIVEAU_15';
    public const NIVEAU_20 = 'NIVEAU_20';

    public const TYPE_SECURISATION_PLUS_VALUE = 'SECURISATION_PLUS_VALUE';
    public const TYPE_DYNAMISATION_DES_INTERETS = 'DYNAMISATION_DES_INTERETS';

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var string
     */
    private $type;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('niveau')->setAllowedValues('niveau', [self::NIVEAU_10, self::NIVEAU_15, self::NIVEAU_20])
            ->setRequired('type')->setAllowedValues('type', [self::TYPE_SECURISATION_PLUS_VALUE, self::TYPE_DYNAMISATION_DES_INTERETS])
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
            ->setNiveau($resolvedOptions['niveau'])
            ->setType($resolvedOptions['type'])
        ;
    }

    /**
     * @return string
     */
    public function getNiveau(): string
    {
        return $this->niveau;
    }

    /**
     * @param string $niveau
     *
     * @return self
     */
    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
