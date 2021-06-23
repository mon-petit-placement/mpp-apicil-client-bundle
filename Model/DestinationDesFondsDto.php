<?php

namespace Mpp\ApicilClientBundle\Model;

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
