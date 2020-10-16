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

class SouscriptionPerpDto
{
    /**
     * @var bool|null
     */
    private $adhesionVictoria;

    /**
     * @var ArbitrageAutomatiqueDto|null
     */
    private $arbitrageAutomatique;

    /**
     * @var bool|null
     */
    private $connaissanceDocument;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('adhesionVictoria')->setAllowedTypes('adhesionVictoria', ['bool', 'null'])
            ->setDefault('arbitrageAutomatique', null)->setAllowedTypes('arbitrageAutomatique', ['array', ArbitrageAutomatiqueDto::class, 'null'])->setNormalizer('arbitrageAutomatique', function (Options $options, $value) {
                if ($value instanceof ArbitrageAutomatiqueDto || null === $value) {
                    return $value;
                }

                return ArbitrageAutomatiqueDto::createFromArray($value);
            })
            ->setDefault('connaissanceDocument', null)->setAllowedTypes('connaissanceDocument', ['bool', 'null'])
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
            ->setAdhesionVictoria($resolvedOptions['adhesionVictoria'])
            ->setArbitrageAutomatique($resolvedOptions['arbitrageAutomatique'])
            ->setConnaissanceDocument($resolvedOptions['connaissanceDocument'])
        ;
    }

    /**
     * @return bool|null
     */
    public function getAdhesionVictoria(): ?bool
    {
        return $this->adhesionVictoria;
    }

    /**
     * @param bool|null $adhesionVictoria
     *
     * @return self
     */
    public function setAdhesionVictoria(?bool $adhesionVictoria): self
    {
        $this->adhesionVictoria = $adhesionVictoria;

        return $this;
    }

    /**
     * @return ArbitrageAutomatiqueDto|null
     */
    public function getArbitrageAutomatique(): ?ArbitrageAutomatiqueDto
    {
        return $this->arbitrageAutomatique;
    }

    /**
     * @param ArbitrageAutomatiqueDto|null $arbitrageAutomatique
     *
     * @return self
     */
    public function setArbitrageAutomatique(?ArbitrageAutomatiqueDto $arbitrageAutomatique): self
    {
        $this->arbitrageAutomatique = $arbitrageAutomatique;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getConnaissanceDocument(): ?bool
    {
        return $this->connaissanceDocument;
    }

    /**
     * @param bool|null $connaissanceDocument
     *
     * @return self
     */
    public function setConnaissanceDocument(?bool $connaissanceDocument): self
    {
        $this->connaissanceDocument = $connaissanceDocument;

        return $this;
    }
}
