<?php

namespace Mpp\ApicilClientBundle\Model;

class IBANContratEntity
{
    public const TYPE_CLIENT = 'CLIENT';
    public const TYPE_CONTRAT = 'CONTRAT';

    public const UTILISATION_D = 'D';
    public const UTILISATION_P = 'P';
    public const UTILISATION_S = 'S';

    /**
     * @var string|null
     */
    private $bic;

    /**
     * @var string|null
     */
    private $domiciliation;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var string|null
     */
    private $numeroIdentite;

    /**
     * @var string|null
     */
    private $numeroSinistre;

    /**
     * @var string|null
     */
    private $titulaire;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $utilisation;

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @param string|null $bic
     *
     * @return self
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDomiciliation(): ?string
    {
        return $this->domiciliation;
    }

    /**
     * @param string|null $domiciliation
     *
     * @return self
     */
    public function setDomiciliation(?string $domiciliation): self
    {
        $this->domiciliation = $domiciliation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param string|null $iban
     *
     * @return self
     */
    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentite(): ?string
    {
        return $this->numeroIdentite;
    }

    /**
     * @param string|null $numeroIdentite
     *
     * @return self
     */
    public function setNumeroIdentite(?string $numeroIdentite): self
    {
        $this->numeroIdentite = $numeroIdentite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroSinistre(): ?string
    {
        return $this->numeroSinistre;
    }

    /**
     * @param string|null $numeroSinistre
     *
     * @return self
     */
    public function setNumeroSinistre(?string $numeroSinistre): self
    {
        $this->numeroSinistre = $numeroSinistre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitulaire(): ?string
    {
        return $this->titulaire;
    }

    /**
     * @param string|null $titulaire
     *
     * @return self
     */
    public function setTitulaire(?string $titulaire): self
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUtilisation(): ?string
    {
        return $this->utilisation;
    }

    /**
     * @param string|null $utilisation
     *
     * @return self
     */
    public function setUtilisation(?string $utilisation): self
    {
        $this->utilisation = $utilisation;

        return $this;
    }
}
