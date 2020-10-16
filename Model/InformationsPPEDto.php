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

class InformationsPPEDto
{
    /**
     * @var FonctionPPEDto
     */
    private $fonction;

    /**
     * @var PaysDto
     */
    private $paysExerce;

    /**
     * @var string|null
     */
    private $ppeFonctionAutre;

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
            ->setRequired('paysExerce')->setAllowedTypes('paysExerce', ['array', PaysDto::class])->setNormalizer('paysExerce', function (Options $options, $value) {
                if ($value instanceof PaysDto) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
            })
            ->setDefault('ppeFonctionAutre', null)->setAllowedTypes('ppeFonctionAutre', ['string', 'null'])
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
            ->setPaysExerce($resolvedOptions['paysExerce'])
            ->setPpeFonctionAutre($resolvedOptions['ppeFonctionAutre'])
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
}
