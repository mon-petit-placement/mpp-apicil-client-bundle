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

class CoordonneesDto
{
    /**
     * @var AdresseDto|null
     */
    private $adresse;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var TelephoneDto|null
     */
    private $telephoneDomicile;

    /**
     * @var TelephoneDto|null
     */
    private $telephoneMobile;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('adresse', null)->setAllowedTypes('adresse', ['array', AdresseDto::class, 'null'])->setNormalizer('adresse', function (Options $options, $value) {
                if ($value instanceof AdresseDto || null === $value) {
                    return $value;
                }

                return AdresseDto::createFromArray($value);
            })
            ->setDefault('email', null)->setAllowedTypes('email', ['string', 'null'])
            ->setDefault('telephoneDomicile', null)->setAllowedTypes('telephoneDomicile', ['array', TelephoneDto::class, 'null'])->setNormalizer('telephoneDomicile', function (Options $options, $value) {
                if ($value instanceof TelephoneDto || null === $value) {
                    return $value;
                }

                return TelephoneDto::createFromArray($value);
            })
            ->setDefault('telephoneMobile', null)->setAllowedTypes('telephoneMobile', ['array', TelephoneDto::class, 'null'])->setNormalizer('telephoneMobile', function (Options $options, $value) {
                if ($value instanceof TelephoneDto || null === $value) {
                    return $value;
                }

                return TelephoneDto::createFromArray($value);
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
            ->setAdresse($resolvedOptions['adresse'])
            ->setEmail($resolvedOptions['email'])
            ->setTelephoneDomicile($resolvedOptions['telephoneDomicile'])
            ->setTelephoneMobile($resolvedOptions['telephoneMobile'])
        ;
    }

    /**
     * @return AdresseDto|null
     */
    public function getAdresse(): ?AdresseDto
    {
        return $this->adresse;
    }

    /**
     * @param AdresseDto|null $adresse
     *
     * @return self
     */
    public function setAdresse(?AdresseDto $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return TelephoneDto|null
     */
    public function getTelephoneDomicile(): ?TelephoneDto
    {
        return $this->telephoneDomicile;
    }

    /**
     * @param TelephoneDto|null $telephoneDomicile
     *
     * @return self
     */
    public function setTelephoneDomicile(?TelephoneDto $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    /**
     * @return TelephoneDto|null
     */
    public function getTelephoneMobile(): ?TelephoneDto
    {
        return $this->telephoneMobile;
    }

    /**
     * @param TelephoneDto|null $telephoneMobile
     *
     * @return self
     */
    public function setTelephoneMobile(?TelephoneDto $telephoneMobile): self
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }
}
