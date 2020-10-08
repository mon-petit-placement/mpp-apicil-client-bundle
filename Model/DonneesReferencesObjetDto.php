<?php

namespace Mpp\ApicilClientBundle\Model;

class DonneesReferencesObjetDto
{
    /**
     * @var string|null
     */
    private $ccGroupement;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @return string|null
     */
    public function getCcGroupement(): ?string
    {
        return $this->ccGroupement;
    }

    /**
     * @param string|null $ccGroupement
     *
     * @return self
     */
    public function setCcGroupement(?string $ccGroupement): self
    {
        $this->ccGroupement = $ccGroupement;

        return $this;
    }

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
}
