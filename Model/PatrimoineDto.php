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

class PatrimoineDto
{
    /**
     * @var float
     */
    private $montant;

    /**
     * @var string|null
     */
    private $preciserPatrimoine;

    /**
     * @var TypePatrimoineDto
     */
    private $typePatrimoine;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
           ->setRequired('montant')->setAllowedTypes('montant', ['float', 'int'])
           ->setDefault('preciserPatrimoine', null)->setAllowedTypes('preciserPatrimoine', ['string', 'null'])
           ->setRequired('typePatrimoine')->setAllowedTypes('typePatrimoine', ['array', TypePatrimoineDto::class])->setNormalizer('typePatrimoine', function (Options $options, $value) {
               if ($value instanceof TypePatrimoineDto) {
                   return $value;
               }

               return TypePatrimoineDto::createFromArray($value);
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
            ->setPreciserPatrimoine($resolvedOptions['preciserPatrimoine'])
            ->setTypePatrimoine($resolvedOptions['typePatrimoine'])
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
    public function getPreciserPatrimoine(): ?string
    {
        return $this->preciserPatrimoine;
    }

    /**
     * @param string|null $preciserPatrimoine
     *
     * @return self
     */
    public function setPreciserPatrimoine(?string $preciserPatrimoine): self
    {
        $this->preciserPatrimoine = $preciserPatrimoine;

        return $this;
    }

    /**
     * @return TypePatrimoineDto
     */
    public function getTypePatrimoine(): TypePatrimoineDto
    {
        return $this->typePatrimoine;
    }

    /**
     * @param TypePatrimoineDto $typePatrimoine
     *
     * @return self
     */
    public function setTypePatrimoine(TypePatrimoineDto $typePatrimoine): self
    {
        $this->typePatrimoine = $typePatrimoine;

        return $this;
    }
}
