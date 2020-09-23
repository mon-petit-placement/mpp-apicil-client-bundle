<?php

namespace Mpp\ApicilClientBundle\Model;

class TelephoneDto
{
    /**
     * @var string|null
     */
    private $indicatif;

    /**
     * @var string|null
     */
    private $numeroTelephone;

    /**
     * @return string|null
     */
    public function getIndicatif(): ?string
    {
        return $this->indicatif;
    }

    /**
     * @param string|null $indicatif
     *
     * @return self
     */
    public function setIndicatif(?string $indicatif): self
    {
        $this->indicatif = $indicatif;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    /**
     * @param string|null $numeroTelephone
     *
     * @return self
     */
    public function setNumeroTelephone(?string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }
}
