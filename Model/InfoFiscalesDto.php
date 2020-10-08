<?php

namespace Mpp\ApicilClientBundle\Model;

class InfoFiscalesDto
{
    /**
     * @var AdresseDto|null
     */
    private $adresseFiscale;

    /**
     * @var string|null
     */
    private $numeroIdentificationFiscale;

    /**
     * @return AdresseDto|null
     */
    public function getAdresseFiscale(): ?AdresseDto
    {
        return $this->adresseFiscale;
    }

    /**
     * @param AdresseDto|null $adresseFiscale
     *
     * @return self
     */
    public function setAdresseFiscale(?AdresseDto $adresseFiscale): self
    {
        $this->adresseFiscale = $adresseFiscale;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentificationFiscale(): ?string
    {
        return $this->numeroIdentificationFiscale;
    }

    /**
     * @param string|null $numeroIdentificationFiscale
     *
     * @return self
     */
    public function setNumeroIdentificationFiscale(?string $numeroIdentificationFiscale): self
    {
        $this->numeroIdentificationFiscale = $numeroIdentificationFiscale;

        return $this;
    }
}
