<?php

namespace Mpp\ApicilClientBundle\Model;

class DonneesBancairesDto
{
    /**
     * @var string|null
     */
    private $bic;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var string|null
     */
    private $titulaire;

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
}
