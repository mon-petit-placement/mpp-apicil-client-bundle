<?php

namespace Mpp\ApicilClientBundle\Model;

class IdentiteFiscaleDto
{
    /**
     * @var string|null
     */
    private $numeroIdentiteFiscale;

    /**
     * @var PaysDto|null
     */
    private $pays;

    /**
     * @return string|null
     */
    public function getNumeroIdentiteFiscale(): ?string
    {
        return $this->numeroIdentiteFiscale;
    }

    /**
     * @param string|null $numeroIdentiteFiscale
     *
     * @return self
     */
    public function setNumeroIdentiteFiscale(?string $numeroIdentiteFiscale): self
    {
        $this->numeroIdentiteFiscale = $numeroIdentiteFiscale;

        return $this;
    }

    /**
     * @return PaysDto|null
     */
    public function getPays(): ?PaysDto
    {
        return $this->pays;
    }

    /**
     * @param PaysDto|null $pays
     *
     * @return self
     */
    public function setPays(?PaysDto $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
