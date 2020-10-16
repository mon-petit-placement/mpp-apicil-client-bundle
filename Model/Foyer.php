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

class Foyer
{
    /**
     * @var array
     */
    private $patrimoine;

    /**
     * @var array
     */
    private $revenus;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('patrimoine', [])->setAllowedTypes('patrimoine', ['array'])->setNormalizer('reponses', function (Options $options, $value) {
                foreach ($value as &$reponse) {
                    if ($reponse instanceof PatrimoineDto) {
                        continue;
                    }

                    $reponse = PatrimoineDto::createFromArray($reponse);
                }

                return $value;
            })
            ->setDefault('revenus', [])->setAllowedTypes('revenus', ['array'])->setNormalizer('reponses', function (Options $options, $value) {
                foreach ($value as &$reponse) {
                    if ($reponse instanceof RevenusDto) {
                        continue;
                    }

                    $reponse = RevenusDto::createFromArray($reponse);
                }

                return $value;
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
            ->setPatrimoine($resolvedOptions['patrimoine'])
            ->setRevenus($resolvedOptions['revenus'])
        ;
    }

    /**
     * @return array
     */
    public function getPatrimoine(): array
    {
        return $this->patrimoine;
    }

    /**
     * @param array $patrimoine
     *
     * @return self
     */
    public function setPatrimoine(array $patrimoine): self
    {
        $this->patrimoine = $patrimoine;

        return $this;
    }

    /**
     * @return array
     */
    public function getRevenus(): ?array
    {
        return $this->revenus;
    }

    /**
     * @param array $revenus
     *
     * @return self
     */
    public function setRevenus(array $revenus): self
    {
        $this->revenus = $revenus;

        return $this;
    }
}
