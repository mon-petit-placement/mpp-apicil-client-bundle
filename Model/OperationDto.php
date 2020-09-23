<?php

namespace Mpp\ApicilClientBundle\Model;

class OperationDto
{
    /**
     * @var \DateTime|null
     */
    private $dateOperation;

    /**
     * @var \DateTime|null
     */
    private $dateReglement;

    /**
     * @var float|null
     */
    private $montantOperation;

    /**
     * @var array|null
     */
    private $sousOperations;

    /**
     * @var string|null
     */
    private $typeMouvement;

    /**
     * @var string|null
     */
    private $typeOperation;

    /**
     * @return \DateTime|null
     */
    public function getDateOperation(): ?\DateTime
    {
        return $this->dateOperation;
    }

    /**
     * @param \DateTime|null $dateOperation
     *
     * @return self
     */
    public function setDateOperation(?\DateTime $dateOperation): self
    {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateReglement(): ?\DateTime
    {
        return $this->dateReglement;
    }

    /**
     * @param \DateTime|null $dateReglement
     *
     * @return self
     */
    public function setDateReglement(?\DateTime $dateReglement): self
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantOperation(): ?float
    {
        return $this->montantOperation;
    }

    /**
     * @param float|null $montantOperation
     *
     * @return self
     */
    public function setMontantOperation(?float $montantOperation): self
    {
        $this->montantOperation = $montantOperation;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getSousOperations(): ?array
    {
        return $this->sousOperations;
    }

    /**
     * @param array|null $sousOperations
     *
     * @return self
     */
    public function setSousOperations(?array $sousOperations): self
    {
        $this->sousOperations = $sousOperations;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeMouvement(): ?string
    {
        return $this->typeMouvement;
    }

    /**
     * @param string|null $typeMouvement
     *
     * @return self
     */
    public function setTypeMouvement(?string $typeMouvement): self
    {
        $this->typeMouvement = $typeMouvement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeOperation(): ?string
    {
        return $this->typeOperation;
    }

    /**
     * @param string|null $typeOperation
     *
     * @return self
     */
    public function setTypeOperation(?string $typeOperation): self
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }
}
