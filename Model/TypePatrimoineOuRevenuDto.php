<?php

namespace Mpp\ApicilClientBundle\Model;

class TypePatrimoineOuRevenuDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $infobulle;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var bool|null
     */
    private $precision;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfobulle(): ?string
    {
        return $this->infobulle;
    }

    /**
     * @param string|null $infobulle
     *
     * @return self
     */
    public function setInfobulle(?string $infobulle): self
    {
        $this->infobulle = $infobulle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPrecision(): ?bool
    {
        return $this->precision;
    }

    /**
     * @param bool|null $precision
     *
     * @return self
     */
    public function setPrecision(?bool $precision): self
    {
        $this->precision = $precision;

        return $this;
    }
}
