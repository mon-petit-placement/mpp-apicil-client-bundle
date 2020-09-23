<?php

namespace Mpp\ApicilClientBundle\Model;

class SocieteGestionDto
{
    /**
     * @var int|null
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
