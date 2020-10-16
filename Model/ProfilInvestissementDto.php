<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilInvestissementDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $descriptif;

    /**
     * @var bool|null
     */
    private $favori;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var int|null
     */
    private $ordre;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('code', null)->setAllowedTypes('code', ['string', 'null'])
            ->setDefault('descriptif', null)->setAllowedTypes('descriptif', ['string', 'null'])
            ->setDefault('favori', null)->setAllowedTypes('favori', ['bool', 'null'])
            ->setDefault('id', null)->setAllowedTypes('id', ['int', 'null'])
            ->setDefault('libelle', null)->setAllowedTypes('libelle', ['string', 'null'])
            ->setDefault('ordre', null)->setAllowedTypes('ordre', ['int', 'null'])
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
            ->setDescriptif($resolvedOptions['descriptif'])
            ->setFavori($resolvedOptions['favori'])
            ->setId($resolvedOptions['id'])
            ->setLibelle($resolvedOptions['libelle'])
            ->setOrdre($resolvedOptions['ordre'])
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
    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    /**
     * @param string|null $descriptif
     *
     * @return self
     */
    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFavori(): ?bool
    {
        return $this->favori;
    }

    /**
     * @param bool|null $favori
     *
     * @return self
     */
    public function setFavori(?bool $favori): self
    {
        $this->favori = $favori;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

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
     * @return int|null
     */
    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    /**
     * @param int|null $ordre
     *
     * @return self
     */
    public function setOrdre(?int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }
}
