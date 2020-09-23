<?php

namespace Mpp\ApicilClientBundle\Model;

class BorneTaux
{
    /**
     * @var float|null
     */
    private $max;

    /**
     * @var float|null
     */
    private $min;

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
}
