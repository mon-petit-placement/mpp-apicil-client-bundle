<?php

namespace Mpp\ApicilClientBundle\Model;

class CoordonneesDto
{
    /**
     * @var AdresseDto|null
     */
    private $adresse;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var TelephoneDto|null
     */
    private $telephoneDomicile;

    /**
     * @var TelephoneDto|null
     */
    private $telephoneMobile;

    /**
     * @return AdresseDto|null
     */
    public function getAdresse(): ?AdresseDto
    {
        return $this->adresse;
    }

    /**
     * @param AdresseDto|null $adresse
     *
     * @return self
     */
    public function setAdresse(?AdresseDto $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return TelephoneDto|null
     */
    public function getTelephoneDomicile(): ?TelephoneDto
    {
        return $this->telephoneDomicile;
    }

    /**
     * @param TelephoneDto|null $telephoneDomicile
     *
     * @return self
     */
    public function setTelephoneDomicile(?TelephoneDto $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    /**
     * @return TelephoneDto|null
     */
    public function getTelephoneMobile(): ?TelephoneDto
    {
        return $this->telephoneMobile;
    }

    /**
     * @param TelephoneDto|null $telephoneMobile
     *
     * @return self
     */
    public function setTelephoneMobile(?TelephoneDto $telephoneMobile): self
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }
}
