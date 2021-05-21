<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DtoDeLaSuppressionDeLOption
{
    /**
     * @var int|null
     */
    private $contratId;

    /**
     * @var string|null
     */
    private $typeSignature;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('contratId')->setAllowedTypes('contratId', ['int', 'null'])
            ->setRequired('typeSignature', null)->setAllowedTypes('typeSignature', ['string', 'null'])
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
            ->setContratId($resolvedOptions['contratId'])
            ->setTypeSignature($resolvedOptions['typeSignature'])
        ;
    }

    /**
     * @return int|null
     */
    public function getContratId(): ?int
    {
        return $this->contratId;
    }

    /**
     * @param int|null $contratId
     *
     * @return self
     */
    public function setContratId(?int $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeSignature(): ?string
    {
        return $this->typeSignature;
    }

    /**
     * @param  string|null  $typeSignature
     *
     * @return  self
     */
    public function setTypeSignature(?string $typeSignature): self
    {
        $this->typeSignature = $typeSignature;

        return $this;
    }
}
