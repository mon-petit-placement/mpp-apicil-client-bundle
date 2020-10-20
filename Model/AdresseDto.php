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

class AdresseDto
{
    /**
     * @var string|null
     */
    private $adresseComplementaire;

    /**
     * @var string
     */
    private $adressePrincipale;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var PaysDto
     */
    private $pays;

    /**
     * @var VilleAdresseDto
     */
    private $ville;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('adresseComplementaire', null)->setAllowedTypes('adresseComplementaire', ['string', 'null'])
            ->setRequired('adressePrincipale', null)->setAllowedTypes('adressePrincipale', ['string'])
            ->setRequired('codePostal', null)->setAllowedTypes('codePostal', ['string'])
            ->setRequired('pays')->setAllowedTypes('pays', ['array', PaysDto::class])->setNormalizer('pays', function (Options $options, $value) {
                if ($value instanceof PaysDto) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
            })
            ->setRequired('ville')->setAllowedTypes('ville', ['array', VilleAdresseDto::class])->setNormalizer('ville', function (Options $options, $value) {
                if ($value instanceof VilleAdresseDto) {
                    return $value;
                }

                return VilleAdresseDto::createFromArray($value);
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
            ->setAdresseComplementaire($resolvedOptions['adresseComplementaire'])
            ->setAdressePrincipale($resolvedOptions['adressePrincipale'])
            ->setCodePostal($resolvedOptions['codePostal'])
            ->setPays($resolvedOptions['pays'])
            ->setVille($resolvedOptions['ville'])
        ;
    }

    /**
     * @return string|null
     */
    public function getAdresseComplementaire(): ?string
    {
        return $this->adresseComplementaire;
    }

    /**
     * @param string|null $adresseComplementaire
     *
     * @return self
     */
    public function setAdresseComplementaire(?string $adresseComplementaire): self
    {
        $this->adresseComplementaire = $adresseComplementaire;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdressePrincipale(): string
    {
        return $this->adressePrincipale;
    }

    /**
     * @param string $adressePrincipale
     *
     * @return self
     */
    public function setAdressePrincipale(string $adressePrincipale): self
    {
        $this->adressePrincipale = $adressePrincipale;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     *
     * @return self
     */
    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * @return PaysDto
     */
    public function getPays(): PaysDto
    {
        return $this->pays;
    }

    /**
     * @param PaysDto $pays
     *
     * @return self
     */
    public function setPays(PaysDto $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return VilleAdresseDto
     */
    public function getVille(): VilleAdresseDto
    {
        return $this->ville;
    }

    /**
     * @param VilleAdresseDto $ville
     *
     * @return self
     */
    public function setVille(VilleAdresseDto $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}
