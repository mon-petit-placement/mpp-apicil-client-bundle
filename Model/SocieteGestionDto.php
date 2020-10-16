<?php

namespace Mpp\ApicilClientBundle\Model;

class SocieteGestionDto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var OrientationDto|null
     */
    private $orientation;

    /**
     * @var float|null
     */
    private $surtauxEncours;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('id')->setAllowedTypes('id', ['int'])
            ->setDefault('orientation', null)->setAllowedTypes('orientation', ['array', OrientationDto::class, 'null'])->setNormalizer('orientation', function (Options $options, $value) {
                if ($value instanceof OrientationDto || null === $value) {
                    return $value;
                }

                return OrientationDto::createFromArray($value);
            })
            ->setDefault('surtauxEncours', null)->setAllowedTypes('surtauxEncours', ['float', 'null'])
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
            ->setId($resolvedOptions['id'])
            ->setOrientation($resolvedOptions['orientation'])
            ->setSurtauxEncours($resolvedOptions['surtauxEncours'])
        ;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return OrientationDto|null
     */
    public function getOrientation(): ?OrientationDto
    {
        return $this->orientation;
    }

    /**
     * @param OrientationDto|null $orientation
     *
     * @return self
     */
    public function setOrientation(?OrientationDto $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSurtauxEncours(): ?float
    {
        return $this->surtauxEncours;
    }

    /**
     * @param float|null $surtauxEncours
     *
     * @return self
     */
    public function setSurtauxEncours(?float $surtauxEncours): self
    {
        $this->surtauxEncours = $surtauxEncours;

        return $this;
    }
}
