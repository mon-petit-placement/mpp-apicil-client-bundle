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

class RevenusDto
{
    /**
     * @var float
     */
    private $montant;

    /**
     * @var string|null
     */
    private $preciserRevenu;

    /**
     * @var TypeRevenuDto
     */
    private $typeRevenu;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('montant')->setAllowedTypes('montant', ['float', 'int'])
            ->setDefault('preciserRevenu', null)->setAllowedTypes('preciserRevenu', ['string', 'null'])
            ->setRequired('typeRevenu')->setAllowedTypes('typeRevenu', ['array', TypeRevenuDto::class])->setNormalizer('typeRevenu', function (Options $options, $value) {
                if ($value instanceof TypeRevenuDto) {
                    return $value;
                }

                return TypeRevenuDto::createFromArray($value);
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
            ->setMontant($resolvedOptions['montant'])
            ->setPreciserRevenu($resolvedOptions['preciserRevenu'])
            ->setTypeRevenu($resolvedOptions['typeRevenu'])
        ;
    }

    /**
     * @return float
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     *
     * @return self
     */
    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreciserRevenu(): ?string
    {
        return $this->preciserRevenu;
    }

    /**
     * @param string|null $preciserRevenu
     *
     * @return self
     */
    public function setPreciserRevenu(?string $preciserRevenu): self
    {
        $this->preciserRevenu = $preciserRevenu;

        return $this;
    }

    /**
     * @return TypeRevenuDto
     */
    public function getTypeRevenu(): TypeRevenuDto
    {
        return $this->typeRevenu;
    }

    /**
     * @param TypeRevenuDto $typeRevenu
     *
     * @return self
     */
    public function setTypeRevenu(TypeRevenuDto $typeRevenu): self
    {
        $this->typeRevenu = $typeRevenu;

        return $this;
    }
}
