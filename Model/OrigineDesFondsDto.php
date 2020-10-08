<?php

namespace Mpp\ApicilClientBundle\Model;

class OrigineDesFondsDto
{
    /**
     * @var float|null
     */
    private $ofAutre;

    /**
     * @var string|null
     */
    private $ofAutreCommentaire;

    /**
     * @var float|null
     */
    private $ofAutresPlacements;

    /**
     * @var float|null
     */
    private $ofBiensMobiliers;

    /**
     * @var float|null
     */
    private $ofCessionActifs;

    /**
     * @var float|null
     */
    private $ofRevenusPro;

    /**
     * @var float|null
     */
    private $ofSuccessionDonation;

    /**
     * @var float|null
     */
    private $ofVenteImmobiliere;

    /**
     * @return float|null
     */
    public function getOfAutre(): ?float
    {
        return $this->ofAutre;
    }

    /**
     * @param float|null $ofAutre
     *
     * @return self
     */
    public function setOfAutre(?float $ofAutre): self
    {
        $this->ofAutre = $ofAutre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOfAutreCommentaire(): ?string
    {
        return $this->ofAutreCommentaire;
    }

    /**
     * @param string|null $ofAutreCommentaire
     *
     * @return self
     */
    public function setOfAutreCommentaire(?string $ofAutreCommentaire): self
    {
        $this->ofAutreCommentaire = $ofAutreCommentaire;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfAutresPlacements(): ?float
    {
        return $this->ofAutresPlacements;
    }

    /**
     * @param float|null $ofAutresPlacements
     *
     * @return self
     */
    public function setOfAutresPlacements(?float $ofAutresPlacements): self
    {
        $this->ofAutresPlacements = $ofAutresPlacements;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfBiensMobiliers(): ?float
    {
        return $this->ofBiensMobiliers;
    }

    /**
     * @param float|null $ofBiensMobiliers
     *
     * @return self
     */
    public function setOfBiensMobiliers(?float $ofBiensMobiliers): self
    {
        $this->ofBiensMobiliers = $ofBiensMobiliers;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfCessionActifs(): ?float
    {
        return $this->ofCessionActifs;
    }

    /**
     * @param float|null $ofCessionActifs
     *
     * @return self
     */
    public function setOfCessionActifs(?float $ofCessionActifs): self
    {
        $this->ofCessionActifs = $ofCessionActifs;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfRevenusPro(): ?float
    {
        return $this->ofRevenusPro;
    }

    /**
     * @param float|null $ofRevenusPro
     *
     * @return self
     */
    public function setOfRevenusPro(?float $ofRevenusPro): self
    {
        $this->ofRevenusPro = $ofRevenusPro;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfSuccessionDonation(): ?float
    {
        return $this->ofSuccessionDonation;
    }

    /**
     * @param float|null $ofSuccessionDonation
     *
     * @return self
     */
    public function setOfSuccessionDonation(?float $ofSuccessionDonation): self
    {
        $this->ofSuccessionDonation = $ofSuccessionDonation;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOfVenteImmobiliere(): ?float
    {
        return $this->ofVenteImmobiliere;
    }

    /**
     * @param float|null $ofVenteImmobiliere
     *
     * @return self
     */
    public function setOfVenteImmobiliere(?float $ofVenteImmobiliere): self
    {
        $this->ofVenteImmobiliere = $ofVenteImmobiliere;

        return $this;
    }
}
