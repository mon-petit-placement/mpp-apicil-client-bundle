<?php

namespace Mpp\ApicilClientBundle\Model;

class ContratCollectifDto
{
    /**
     * @var string|null
     */
    private $intituleContrat;

    /**
     * @var string|null
     */
    private $numeroConvention;

    /**
     * @var string|null
     */
    private $raisonSociale;

    /**
     * @var string|null
     */
    private $siret;

    /**
     * @var string|null
     */
    private $statut;

    /**
     * @return string|null
     */
    public function getIntituleContrat(): ?string
    {
        return $this->intituleContrat;
    }

    /**
     * @param string|null $intituleContrat
     *
     * @return self
     */
    public function setIntituleContrat(?string $intituleContrat): self
    {
        $this->intituleContrat = $intituleContrat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroConvention(): ?string
    {
        return $this->numeroConvention;
    }

    /**
     * @param string|null $numeroConvention
     *
     * @return self
     */
    public function setNumeroConvention(?string $numeroConvention): self
    {
        $this->numeroConvention = $numeroConvention;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    /**
     * @param string|null $raisonSociale
     *
     * @return self
     */
    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * @param string|null $siret
     *
     * @return self
     */
    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string|null $statut
     *
     * @return self
     */
    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
