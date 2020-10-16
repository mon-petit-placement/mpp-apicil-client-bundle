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

class InfoFiscalesDto
{
    /**
     * @var AdresseDto|null
     */
    private $adresseFiscale;

    /**
     * @var bool|null
     */
    private $adressePrincipaleEtResidenceDifferents;

    /**
     * @var string|null
     */
    private $numeroIdentificationFiscale;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('adresseFiscale', null)->setAllowedTypes('adresseFiscale', ['array', AdresseDto::class, 'null'])->setNormalizer('adresseFiscale', function (Options $options, $value) {
                if ($value instanceof AdresseDto ||  null === $value) {
                    return $value;
                }

                return AdresseDto::createFromArray($value);
            })
            ->setDefault('adressePrincipaleEtResidenceDifferents', null)->setAllowedTypes('adressePrincipaleEtResidenceDifferents', ['bool', 'null'])
            ->setDefault('numeroIdentificationFiscale', null)->setAllowedTypes('numeroIdentificationFiscale', ['string', 'null'])
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
            ->setAdresseFiscale($resolvedOptions['adresseFiscale'])
            ->setAdressePrincipaleEtResidenceDifferents($resolvedOptions['adressePrincipaleEtResidenceDifferents'])
            ->setNumeroIdentificationFiscale($resolvedOptions['$numeroIdentificationFiscale'])
        ;
    }

    /**
     * @return AdresseDto|null
     */
    public function getAdresseFiscale(): ?AdresseDto
    {
        return $this->adresseFiscale;
    }

    /**
     * @param AdresseDto|null $adresseFiscale
     *
     * @return self
     */
    public function setAdresseFiscale(?AdresseDto $adresseFiscale): self
    {
        $this->adresseFiscale = $adresseFiscale;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAdressePrincipaleEtResidenceDifferents(): ?bool
    {
        return $this->adressePrincipaleEtResidenceDifferents;
    }

    /**
     * @param bool|null $adressePrincipaleEtResidenceDifferents
     *
     * @return self
     */
    public function setAdressePrincipaleEtResidenceDifferents(?bool $adressePrincipaleEtResidenceDifferents): self
    {
        $this->adressePrincipaleEtResidenceDifferents = $adressePrincipaleEtResidenceDifferents;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentificationFiscale(): ?string
    {
        return $this->numeroIdentificationFiscale;
    }

    /**
     * @param string|null $numeroIdentificationFiscale
     *
     * @return self
     */
    public function setNumeroIdentificationFiscale(?string $numeroIdentificationFiscale): self
    {
        $this->numeroIdentificationFiscale = $numeroIdentificationFiscale;

        return $this;
    }
}
