<?php

namespace Mpp\ApicilClientBundle\Model;

class ListeDesSupports
{
    /**
     * @var array|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array|null
     */
    private $supportDtoImpls;

    /**
     * @var int|null
     */
    private $totalSupports;

    /**
     * @var int|null
     */
    private $totalSupportsTypeAutres;

    /**
     * @var int|null
     */
    private $totalSupportsTypeFondEuro;

    /**
     * @var int|null
     */
    private $totalSupportsTypeProduitsStructures;

    /**
     * @var int|null
     */
    private $totalSupportsTypeSCPI;

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array|null $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getSupportDtoImpls(): ?array
    {
        return $this->supportDtoImpls;
    }

    /**
     * @param array|null $supportDtoImpls
     *
     * @return self
     */
    public function setSupportDtoImpls(?array $supportDtoImpls): self
    {
        $this->supportDtoImpls = $supportDtoImpls;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalSupports(): ?int
    {
        return $this->totalSupports;
    }

    /**
     * @param int|null $totalSupports
     *
     * @return self
     */
    public function setTotalSupports(?int $totalSupports): self
    {
        $this->totalSupports = $totalSupports;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalSupportsTypeAutres(): ?int
    {
        return $this->totalSupportsTypeAutres;
    }

    /**
     * @param int|null $totalSupportsTypeAutres
     *
     * @return self
     */
    public function setTotalSupportsTypeAutres(?int $totalSupportsTypeAutres): self
    {
        $this->totalSupportsTypeAutres = $totalSupportsTypeAutres;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalSupportsTypeFondEuro(): ?int
    {
        return $this->totalSupportsTypeFondEuro;
    }

    /**
     * @param int|null $totalSupportsTypeFondEuro
     *
     * @return self
     */
    public function setTotalSupportsTypeFondEuro(?int $totalSupportsTypeFondEuro): self
    {
        $this->totalSupportsTypeFondEuro = $totalSupportsTypeFondEuro;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalSupportsTypeProduitsStructures(): ?int
    {
        return $this->totalSupportsTypeProduitsStructures;
    }

    /**
     * @param int|null $totalSupportsTypeProduitsStructures
     *
     * @return self
     */
    public function setTotalSupportsTypeProduitsStructures(?int $totalSupportsTypeProduitsStructures): self
    {
        $this->totalSupportsTypeProduitsStructures = $totalSupportsTypeProduitsStructures;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalSupportsTypeSCPI(): ?int
    {
        return $this->totalSupportsTypeSCPI;
    }

    /**
     * @param int|null $totalSupportsTypeSCPI
     *
     * @return self
     */
    public function setTotalSupportsTypeSCPI(?int $totalSupportsTypeSCPI): self
    {
        $this->totalSupportsTypeSCPI = $totalSupportsTypeSCPI;

        return $this;
    }
}
