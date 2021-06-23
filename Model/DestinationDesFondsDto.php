<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

class DestinationDesFondsDto
{
    /**
     * @var float|null
     */
    private $destinationAutres;

    /**
     * @var string|null
     */
    private $destinationAutresCommentaire;

    /**
     * @var float|null
     */
    private $destinationImmobilier;

    /**
     * @var float|null
     */
    private $destinationImpots;

    /**
     * @var float|null
     */
    private $destinationMobilier;

    /**
     * @var float|null
     */
    private $destinationRestructuration;

    /**
     * @var float|null
     */
    private $destinationTravaux;

    /**
     * @var float|null
     */
    private $destinationTresorie;

    /**
     * @var string|null
     */
    private $destinationTresorieCommentaire;

    /**
     * @var float|null
     */
    private $destinationVacances;

    /**
     * @var float|null
     */
    private $destinationVehicule;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('destinationAutres', null)->setAllowedTypes('destinationAutres', ['float', 'null'])
            ->setDefault('destinationAutresCommentaire', null)->setAllowedTypes('destinationAutresCommentaire', ['string', 'null'])
            ->setDefault('destinationImmobilier', null)->setAllowedTypes('destinationImmobilier', ['float', 'null'])
            ->setDefault('destinationImpots', null)->setAllowedTypes('destinationImpots', ['float', 'null'])
            ->setDefault('destinationMobilier', null)->setAllowedTypes('destinationMobilier', ['float', 'null'])
            ->setDefault('destinationRestructuration', null)->setAllowedTypes('destinationRestructuration', ['float', 'null'])
            ->setDefault('destinationTravaux', null)->setAllowedTypes('destinationTravaux', ['float', 'null'])
            ->setDefault('destinationTresorie', null)->setAllowedTypes('destinationTresorie', ['float', 'null'])
            ->setDefault('destinationTresorieCommentaire', null)->setAllowedTypes('destinationTresorieCommentaire', ['string', 'null'])
            ->setDefault('destinationVacances', null)->setAllowedTypes('destinationVacances', ['float', 'null'])
            ->setDefault('destinationVehicule', null)->setAllowedTypes('destinationVehicule', ['float', 'null'])
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
            ->setDestinationAutres($resolvedOptions['destinationAutres'])
            ->setDestinationAutresCommentaire($resolvedOptions['destinationAutresCommentaire'])
            ->setDestinationImmobilier($resolvedOptions['destinationImmobilier'])
            ->setDestinationImpots($resolvedOptions['destinationImpots'])
            ->setDestinationMobilier($resolvedOptions['destinationMobilier'])
            ->setDestinationRestructuration($resolvedOptions['destinationRestructuration'])
            ->setDestinationTravaux($resolvedOptions['destinationTravaux'])
            ->setDestinationTresorie($resolvedOptions['destinationTresorie'])
            ->setDestinationTresorieCommentaire($resolvedOptions['destinationTresorieCommentaire'])
            ->setDestinationVacances($resolvedOptions['destinationVacances'])
            ->setDestinationVehicule($resolvedOptions['destinationVehicule'])
        ;
    }

    /**
     * @return  float|null
     */
    public function getDestinationAutres(): ?float
    {
        return $this->destinationAutres;
    }

    /**
     * @param  float|null  $destinationAutres
     *
     * @return  self
     */
    public function setDestinationAutres(?float $destinationAutres): self
    {
        $this->destinationAutres = $destinationAutres;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getDestinationAutresCommentaire(): ?string
    {
        return $this->destinationAutresCommentaire;
    }

    /**
     * @param  string|null  $destinationAutresCommentaire
     *
     * @return  self
     */
    public function setDestinationAutresCommentaire(?string $destinationAutresCommentaire): self
    {
        $this->destinationAutresCommentaire = $destinationAutresCommentaire;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationImmobilier(): ?float
    {
        return $this->destinationImmobilier;
    }

    /**
     * @param  float|null  $destinationImmobilier
     *
     * @return  self
     */
    public function setDestinationImmobilier(?float $destinationImmobilier): self
    {
        $this->destinationImmobilier = $destinationImmobilier;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationImpots(): ?float
    {
        return $this->destinationImpots;
    }

    /**
     * @param  float|null  $destinationImpots
     *
     * @return  self
     */
    public function setDestinationImpots(?float $destinationImpots): self
    {
        $this->destinationImpots = $destinationImpots;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationMobilier(): ?float
    {
        return $this->destinationMobilier;
    }

    /**
     * @param  float|null  $destinationMobilier
     *
     * @return  self
     */
    public function setDestinationMobilier(?float $destinationMobilier): self
    {
        $this->destinationMobilier = $destinationMobilier;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationRestructuration(): ?float
    {
        return $this->destinationRestructuration;
    }

    /**
     * @param  float|null  $destinationRestructuration
     *
     * @return  self
     */
    public function setDestinationRestructuration(?float $destinationRestructuration): self
    {
        $this->destinationRestructuration = $destinationRestructuration;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationTravaux(): ?float
    {
        return $this->destinationTravaux;
    }

    /**
     * @param  float|null  $destinationTravaux
     *
     * @return  self
     */
    public function setDestinationTravaux(?float $destinationTravaux): self
    {
        $this->destinationTravaux = $destinationTravaux;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationTresorie(): ?float
    {
        return $this->destinationTresorie;
    }

    /**
     * @param  float|null  $destinationTresorie
     *
     * @return  self
     */
    public function setDestinationTresorie(?float $destinationTresorie): self
    {
        $this->destinationTresorie = $destinationTresorie;
        return $this;
    }

    /**
     * @return  string|null
     */
    public function getDestinationTresorieCommentaire(): ?string
    {
        return $this->destinationTresorieCommentaire;
    }

    /**
     * @param  string|null  $destinationTresorieCommentaire
     *
     * @return  self
     */
    public function setDestinationTresorieCommentaire(?string $destinationTresorieCommentaire): self
    {
        $this->destinationTresorieCommentaire = $destinationTresorieCommentaire;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationVacances(): ?float
    {
        return $this->destinationVacances;
    }

    /**
     * @param  float|null  $destinationVacances
     *
     * @return  self
     */
    public function setDestinationVacances(?float $destinationVacances): self
    {
        $this->destinationVacances = $destinationVacances;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getDestinationVehicule(): ?float
    {
        return $this->destinationVehicule;
    }

    /**
     * @param  float|null  $destinationVehicule
     *
     * @return  self
     */
    public function setDestinationVehicule(?float $destinationVehicule): self
    {
        $this->destinationVehicule = $destinationVehicule;

        return $this;
    }
}
