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

class DonneesBancairesDto
{
    /**
     * @var string|null
     */
    private $bic;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var bool|null
     */
    private $ibanOcr;
    
    /**
     * @var string|null
     */
    private $titulaire;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('bic', null)->setAllowedTypes('bic', ['string', 'null'])
            ->setDefault('iban', null)->setAllowedTypes('iban', ['string', 'null'])
            ->setDefault('ibanOcr', null)->setAllowedTypes('ibanOcr', ['bool', 'null'])
            ->setDefault('titulaire', null)->setAllowedTypes('titulaire', ['string', 'null'])
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
            ->setBic($resolvedOptions['bic'])
            ->setIban($resolvedOptions['iban'])
            ->setIbanOcr($resolvedOptions['ibanOcr'])
            ->setTitulaire($resolvedOptions['titulaire'])
        ;
    }

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @param string|null $bic
     *
     * @return self
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param string|null $iban
     *
     * @return self
     */
    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIbanOcr(): ?bool
    {
        return $this->ibanOcr;
    }

    /**
     * @param bool|null $ibanOcr
     * @return self
     */
    public function setIbanOcr(?bool $ibanOcr): DonneesBancairesDto
    {
        $this->ibanOcr = $ibanOcr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitulaire(): ?string
    {
        return $this->titulaire;
    }

    /**
     * @param string|null $titulaire
     *
     * @return self
     */
    public function setTitulaire(?string $titulaire): self
    {
        $this->titulaire = $titulaire;

        return $this;
    }
}
