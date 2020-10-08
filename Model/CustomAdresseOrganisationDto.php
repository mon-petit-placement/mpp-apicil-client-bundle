<?php

namespace Mpp\ApicilClientBundle\Model;

class CustomAdresseOrganisationDto
{
    /**
     * @var string|null
     */
    private $adresseOrga1;

    /**
     * @var string|null
     */
    private $adresseOrga2;

    /**
     * @var string|null
     */
    private $cpOrga;

    /**
     * @var string|null
     */
    private $nomOrga;

    /**
     * @var string|null
     */
    private $villeOrga;

    /**
     * @return string|null
     */
    public function getAdresseOrga1(): ?string
    {
        return $this->adresseOrga1;
    }

    /**
     * @param string|null $adresseOrga1
     *
     * @return self
     */
    public function setAdresseOrga1(?string $adresseOrga1): self
    {
        $this->adresseOrga1 = $adresseOrga1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseOrga2(): ?string
    {
        return $this->adresseOrga2;
    }

    /**
     * @param string|null $adresseOrga2
     *
     * @return self
     */
    public function setAdresseOrga2(?string $adresseOrga2): self
    {
        $this->adresseOrga2 = $adresseOrga2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpOrga(): ?string
    {
        return $this->cpOrga;
    }

    /**
     * @param string|null $cpOrga
     *
     * @return self
     */
    public function setCpOrga(?string $cpOrga): self
    {
        $this->cpOrga = $cpOrga;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomOrga(): ?string
    {
        return $this->nomOrga;
    }

    /**
     * @param string|null $nomOrga
     *
     * @return self
     */
    public function setNomOrga(?string $nomOrga): self
    {
        $this->nomOrga = $nomOrga;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVilleOrga(): ?string
    {
        return $this->villeOrga;
    }

    /**
     * @param string|null $villeOrga
     *
     * @return self
     */
    public function setVilleOrga(?string $villeOrga): self
    {
        $this->villeOrga = $villeOrga;

        return $this;
    }
}
