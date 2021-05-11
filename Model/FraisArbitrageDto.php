<?php

namespace Mpp\ApicilClientBundle\Model;

class FraisArbitrageDto
{
    /**
     * @var bool|null
     */
    private $arbitrageGratuitParAn;

    /**
     * @var bool|null
     */
    private $fraisDerogatoireAutorise;

    /**
     * @var float|null
     */
    private $max;

    /**
     * @var float|null
     */
    private $min;

    /**
     * @var bool|null
     */
    private $tauxDerogatoireAutorise;

    /**
     * @return bool|null
     */
    public function getArbitrageGratuitParAn(): ?bool
    {
        return $this->arbitrageGratuitParAn;
    }

    /**
     * @param bool|null $arbitrageGratuitParAn
     *
     * @return self
     */
    public function setArbitrageGratuitParAn(?bool $arbitrageGratuitParAn): self
    {
        $this->arbitrageGratuitParAn = $arbitrageGratuitParAn;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * @param float|null $max
     *
     * @return self
     */
    public function setMax(?float $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @param float|null $min
     *
     * @return self
     */
    public function setMin(?float $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getFraisDerogatoireAutorise(): ?bool
    {
        return $this->fraisDerogatoireAutorise;
    }

    /**
     * @param  bool|null  $fraisDerogatoireAutorise
     *
     * @return  self
     */
    public function setFraisDerogatoireAutorise(?bool $fraisDerogatoireAutorise): self
    {
        $this->fraisDerogatoireAutorise = $fraisDerogatoireAutorise;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getTauxDerogatoireAutorise(): ?bool
    {
        return $this->tauxDerogatoireAutorise;
    }

    /**
     * @param  bool|null  $tauxDerogatoireAutorise
     *
     * @return  self
     */
    public function setTauxDerogatoireAutorise(?bool $tauxDerogatoireAutorise): self
    {
        $this->tauxDerogatoireAutorise = $tauxDerogatoireAutorise;

        return $this;
    }
}
