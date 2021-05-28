<?php

namespace Mpp\ApicilClientBundle\Model;

class OperationEnCoursDto
{
    /**
     * @var array|null
     */
    private $actesEncours;

    /**
     * @var string|null
     */
    private $compartiment;

    /**
     * @var \DateTime|null
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     */
    private $dateValidite;

    /**
     * @var int|null
     */
    private $id;

     /**
     * @var string|null
     */
    private $statutActuel;

    /**
     * @return \DateTime|null
     */
    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime|null $dateCreation
     *
     * @return self
     */
    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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
     * @return  array|null
     */
    public function getActesEncours(): ?array
    {
        return $this->actesEncours;
    }

    /**
     * @param  array|null  $actesEncours
     *
     * @return  self
     */
    public function setActesEncours(?array $actesEncours): self
    {
        $this->actesEncours = $actesEncours;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCompartiment(): ?string
    {
        return $this->compartiment;
    }

    /**
     * @param  string|null  $compartiment
     *
     * @return  self
     */
    public function setCompartiment(?string $compartiment): self
    {
        $this->compartiment = $compartiment;

        return $this;
    }

    /**
     * @return  \DateTime|null
     */
    public function getDateValidite(): ?\DateTime
    {
        return $this->dateValidite;
    }

    /**
     * @param  \DateTime|null  $dateValidite
     *
     * @return  self
     */
    public function setDateValidite(?\DateTime $dateValidite): self
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getStatutActuel(): ?string
    {
        return $this->statutActuel;
    }

    /**
     * @param  string|null  $statutActuel
     *
     * @return  self
     */
    public function setStatutActuel(?string $statutActuel): self
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }
}
