<?php

namespace Mpp\ApicilClientBundle\Model;

class TrIndicatifDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $codePays;

    /**
     * @var string|null
     */
    private $libelle;

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
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * @param string|null $codePays
     *
     * @return self
     */
    public function setCodePays(?string $codePays): self
    {
        $this->codePays = $codePays;

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
}
