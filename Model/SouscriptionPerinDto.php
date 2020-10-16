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

class SouscriptionPerinDto
{
    /**
     * @var int
     */
    private $ageDepartRetraite;

    /**
     * @var bool|null
     */
    private $deductionVi;

    /**
     * @var bool|null
     */
    private $deductionVp;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('ageDepartRetraite')->setAllowedTypes('ageDepartRetraite', ['int'])
            ->setDefault('deductionVi', null)->setAllowedTypes('deductionVi', ['bool', 'null'])
            ->setDefault('deductionVp', null)->setAllowedTypes('deductionVp', ['bool', 'null'])
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
            ->setAgeDepartRetraite($resolvedOptions['ageDepartRetraite'])
            ->setDeductionVi($resolvedOptions['deductionVi'])
            ->setDeductionVp($resolvedOptions['deductionVp'])
        ;
    }

    /**
     * @return int
     */
    public function getAgeDepartRetraite(): int
    {
        return $this->ageDepartRetraite;
    }

    /**
     * @param int $ageDepartRetraite
     *
     * @return self
     */
    public function setAgeDepartRetraite(int $ageDepartRetraite): self
    {
        $this->ageDepartRetraite = $ageDepartRetraite;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeductionVi(): ?bool
    {
        return $this->deductionVi;
    }

    /**
     * @param bool|null $deductionVi
     *
     * @return self
     */
    public function setDeductionVi(?bool $deductionVi): self
    {
        $this->deductionVi = $deductionVi;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeductionVp(): ?bool
    {
        return $this->deductionVp;
    }

    /**
     * @param bool|null $deductionVp
     *
     * @return self
     */
    public function setDeductionVp(?bool $deductionVp): self
    {
        $this->deductionVp = $deductionVp;

        return $this;
    }
}
