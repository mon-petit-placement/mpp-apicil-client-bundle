<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrClasseActifDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $codeCouleur;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var bool|null
     */
    private $seuilCheck;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('code', null)->setAllowedTypes('code', ['string', 'null'])
            ->setDefault('codeCouleur', null)->setAllowedTypes('codeCouleur', ['string', 'null'])
            ->setDefault('libelle', null)->setAllowedTypes('libelle', ['string', 'null'])
            ->setDefault('seuilCheck', null)->setAllowedTypes('seuilCheck', ['bool', 'null'])
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
            ->setCode($resolvedOptions['code'])
            ->setCodeCouleur($resolvedOptions['codeCouleur'])
            ->setLibelle($resolvedOptions['libelle'])
            ->setSeuilCheck($resolvedOptions['seuilCheck'])
        ;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeCouleur(): ?string
    {
        return $this->codeCouleur;
    }

    /**
     * @param string|null $codeCouleur
     *
     * @return self
     */
    public function setCodeCouleur(?string $codeCouleur): self
    {
        $this->codeCouleur = $codeCouleur;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getSeuilCheck(): ?bool
    {
        return $this->seuilCheck;
    }

    /**
     * @param  bool|null  $seuilCheck
     *
     * @return  self
     */
    public function setSeuilCheck(?bool $seuilCheck): self
    {
        $this->seuilCheck = $seuilCheck;

        return $this;
    }
}
