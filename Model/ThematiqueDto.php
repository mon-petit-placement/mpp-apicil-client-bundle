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

class ThematiqueDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var ProfilInvestissementDto|null
     */
    private $profilInvestissement;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('code', null)->setAllowedTypes('code', ['string', 'null'])
            ->setDefault('id', null)->setAllowedTypes('id', ['int', 'null'])
            ->setDefault('libelle', null)->setAllowedTypes('libelle', ['string', 'null'])
            ->setDefault('profilInvestissement', null)->setAllowedTypes('profilInvestissement', ['array', ProfilInvestissementDto::class, 'null'])->setNormalizer('profilInvestissement', function (Options $options, $value) {
                if ($value instanceof ProfilInvestissementDto || null === $value) {
                    return $value;
                }

                return ProfilInvestissementDto::createFromArray($value);
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
            ->setCode($resolvedOptions['code'])
            ->setId($resolvedOptions['id'])
            ->setLibelle($resolvedOptions['libelle'])
            ->setProfilInvestissement($resolvedOptions['profilInvestissement'])
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
     * @return ProfilInvestissementDto|null
     */
    public function getProfilInvestissement(): ?ProfilInvestissementDto
    {
        return $this->profilInvestissement;
    }

    /**
     * @param ProfilInvestissementDto|null $profilInvestissement
     *
     * @return self
     */
    public function setProfilInvestissement(?ProfilInvestissementDto $profilInvestissement): self
    {
        $this->profilInvestissement = $profilInvestissement;

        return $this;
    }
}
