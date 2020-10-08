<?php

namespace Mpp\ApicilClientBundle\Model;

class PeriodiciteDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var string|null
     */
    private $minVersement;

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
     * @return string|null
     */
    public function getMinVersement(): ?string
    {
        return $this->minVersement;
    }

    /**
     * @param string|null $minVersement
     *
     * @return self
     */
    public function setMinVersement(?string $minVersement): self
    {
        $this->minVersement = $minVersement;

        return $this;
    }
}
