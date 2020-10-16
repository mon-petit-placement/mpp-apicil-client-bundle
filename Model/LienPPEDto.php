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

class LienPPEDto
{
    /**
     * @var FonctionPPEDto
     */
    private $fonction;

    /**
     * @var NatureLienDto
     */
    private $natureLien;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var PaysDto
     */
    private $paysExerce;

    /**
     * @var string|null
     */
    private $ppeFonctionAutre;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('fonction')->setAllowedTypes('fonction', ['array', FonctionPPEDto::class])->setNormalizer('fonction', function (Options $options, $value) {
                if ($value instanceof FonctionPPEDto) {
                    return $value;
                }

                return FonctionPPEDto::createFromArray($value);
            })
            ->setRequired('natureLien')->setAllowedTypes('natureLien', ['array', NatureLienDto::class])->setNormalizer('natureLien', function (Options $options, $value) {
                if ($value instanceof NatureLienDto) {
                    return $value;
                }

                return NatureLienDto::createFromArray($value);
            })
            ->setRequired('nom')->setAllowedTypes('nom', ['string'])
            ->setRequired('paysExerce')->setAllowedTypes('paysExerce', ['array', PaysDto::class])->setNormalizer('paysExerce', function (Options $options, $value) {
                if ($value instanceof PaysDto) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
            })
            ->setDefault('ppeFonctionAutre', null)->setAllowedTypes('ppeFonctionAutre', ['string', 'null'])
            ->setRequired('prenom')->setAllowedTypes('prenom', ['string'])
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
            ->setFonction($resolvedOptions['fonction'])
            ->setNatureLien($resolvedOptions['natureLien'])
            ->setNom($resolvedOptions['nom'])
            ->setPaysExerce($resolvedOptions['paysExerce'])
            ->setPpeFonctionAutre($resolvedOptions['ppeFonctionAutre'])
            ->setPrenom($resolvedOptions['prenom'])
        ;
    }

    /**
     * @return FonctionPPEDto
     */
    public function getFonction(): FonctionPPEDto
    {
        return $this->fonction;
    }

    /**
     * @param FonctionPPEDto $fonction
     *
     * @return self
     */
    public function setFonction(FonctionPPEDto $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return NatureLienDto
     */
    public function getNatureLien(): NatureLienDto
    {
        return $this->natureLien;
    }

    /**
     * @param NatureLienDto $natureLien
     *
     * @return self
     */
    public function setNatureLien(NatureLienDto $natureLien): self
    {
        $this->natureLien = $natureLien;

        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return PaysDto
     */
    public function getPaysExerce(): PaysDto
    {
        return $this->paysExerce;
    }

    /**
     * @param PaysDto $paysExerce
     *
     * @return self
     */
    public function setPaysExerce(PaysDto $paysExerce): self
    {
        $this->paysExerce = $paysExerce;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPpeFonctionAutre(): ?string
    {
        return $this->ppeFonctionAutre;
    }

    /**
     * @param string|null $ppeFonctionAutre
     *
     * @return self
     */
    public function setPpeFonctionAutre(?string $ppeFonctionAutre): self
    {
        $this->ppeFonctionAutre = $ppeFonctionAutre;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
