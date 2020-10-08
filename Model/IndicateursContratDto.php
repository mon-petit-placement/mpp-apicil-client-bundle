<?php

namespace Mpp\ApicilClientBundle\Model;

class IndicateursContratDto
{
    /**
     * @var string|null
     */
    private $cumulRachatPartiel;

    /**
     * @var string|null
     */
    private $cumulRachatTotal;

    /**
     * @var string|null
     */
    private $cumulVersementComplementaire;

    /**
     * @var string|null
     */
    private $cumulVersementComplementaireAn;

    /**
     * @var string|null
     */
    private $dateVersement;

    /**
     * @var string|null
     */
    private $versementInitial;

    /**
     * @return string|null
     */
    public function getCumulRachatPartiel(): ?string
    {
        return $this->cumulRachatPartiel;
    }

    /**
     * @param string|null $cumulRachatPartiel
     *
     * @return self
     */
    public function setCumulRachatPartiel(?string $cumulRachatPartiel): self
    {
        $this->cumulRachatPartiel = $cumulRachatPartiel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCumulRachatTotal(): ?string
    {
        return $this->cumulRachatTotal;
    }

    /**
     * @param string|null $cumulRachatTotal
     *
     * @return self
     */
    public function setCumulRachatTotal(?string $cumulRachatTotal): self
    {
        $this->cumulRachatTotal = $cumulRachatTotal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCumulVersementComplementaire(): ?string
    {
        return $this->cumulVersementComplementaire;
    }

    /**
     * @param string|null $cumulVersementComplementaire
     *
     * @return self
     */
    public function setCumulVersementComplementaire(?string $cumulVersementComplementaire): self
    {
        $this->cumulVersementComplementaire = $cumulVersementComplementaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCumulVersementComplementaireAn(): ?string
    {
        return $this->cumulVersementComplementaireAn;
    }

    /**
     * @param string|null $cumulVersementComplementaireAn
     *
     * @return self
     */
    public function setCumulVersementComplementaireAn(?string $cumulVersementComplementaireAn): self
    {
        $this->cumulVersementComplementaireAn = $cumulVersementComplementaireAn;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateVersement(): ?string
    {
        return $this->dateVersement;
    }

    /**
     * @param string|null $dateVersement
     *
     * @return self
     */
    public function setDateVersement(?string $dateVersement): self
    {
        $this->dateVersement = $dateVersement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersementInitial(): ?string
    {
        return $this->versementInitial;
    }

    /**
     * @param string|null $versementInitial
     *
     * @return self
     */
    public function setVersementInitial(?string $versementInitial): self
    {
        $this->versementInitial = $versementInitial;

        return $this;
    }
}
