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

class IdentiteFiscaleDto
{
    /**
     * @var string|null
     */
    private $numeroIdentiteFiscale;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('numeroIdentiteFiscale', null)->setAllowedTypes('numeroIdentiteFiscale', ['string', 'null'])
            ->setDefault('pays', null)->setAllowedTypes('pays', ['array', PaysDto::class, 'null'])->setNormalizer('pays', function (Options $options, $value) {
                if ($value instanceof PaysDto ||  null === $value) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
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
            ->setNumeroIdentiteFiscale($resolvedOptions['numeroIdentiteFiscale'])
            ->setPays($resolvedOptions['pays'])
        ;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentiteFiscale(): ?string
    {
        return $this->numeroIdentiteFiscale;
    }

    /**
     * @param string|null $numeroIdentiteFiscale
     *
     * @return self
     */
    public function setNumeroIdentiteFiscale(?string $numeroIdentiteFiscale): self
    {
        $this->numeroIdentiteFiscale = $numeroIdentiteFiscale;

        return $this;
    }

    /**
     * @return PaysDto|null
     */
    public function getPays(): ?PaysDto
    {
        return $this->pays;
    }

    /**
     * @param PaysDto|null $pays
     *
     * @return self
     */
    public function setPays(?PaysDto $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
