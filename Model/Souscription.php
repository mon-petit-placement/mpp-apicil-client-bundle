<?php

namespace Mpp\ApicilClientBundle\Model;

class Souscription
{
    /**
     * @var ClauseBeneficiaireDto|null
     */
    private $clauseBeneficiaire;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var string|null
     */
    private $dureeContrat;

    /**
     * @var FraisSurContratDto|null
     */
    private $fraisSurContrat;

    /**
     * @var bool|null
     */
    private $garantiePlancher;

    /**
     * @var ObjectifInvestissementDto|null
     */
    private $objectifInvestissement;

    /**
     * @var int|null
     */
    private $precisionDureeContrat;

    /**
     * @var SouscriptionMadelinDto|null
     */
    private $souscriptionMadelin;

    /**
     * @var SouscriptionPerpDto|null
     */
    private $souscriptionPerp;

    /**
     * @var StopLossDto|null
     */
    private $stopLoss;

    /**
     * @var ModeleDeVersementInitial|null
     */
    private $versementInitial;

    /**
     * @var ModeleDeVersement|null
     */
    private $versementProgramme;

    /**
     * @return ClauseBeneficiaireDto|null
     */
    public function getClauseBeneficiaire(): ?ClauseBeneficiaireDto
    {
        return $this->clauseBeneficiaire;
    }

    /**
     * @param ClauseBeneficiaireDto|null $clauseBeneficiaire
     *
     * @return self
     */
    public function setClauseBeneficiaire(?ClauseBeneficiaireDto $clauseBeneficiaire): self
    {
        $this->clauseBeneficiaire = $clauseBeneficiaire;

        return $this;
    }

    /**
     * @return DonneesBancairesDto|null
     */
    public function getDonneesBancaires(): ?DonneesBancairesDto
    {
        return $this->donneesBancaires;
    }

    /**
     * @param DonneesBancairesDto|null $donneesBancaires
     *
     * @return self
     */
    public function setDonneesBancaires(?DonneesBancairesDto $donneesBancaires): self
    {
        $this->donneesBancaires = $donneesBancaires;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDureeContrat(): ?string
    {
        return $this->dureeContrat;
    }

    /**
     * @param string|null $dureeContrat
     *
     * @return self
     */
    public function setDureeContrat(?string $dureeContrat): self
    {
        $this->dureeContrat = $dureeContrat;

        return $this;
    }

    /**
     * @return FraisSurContratDto|null
     */
    public function getFraisSurContrat(): ?FraisSurContratDto
    {
        return $this->fraisSurContrat;
    }

    /**
     * @param FraisSurContratDto|null $fraisSurContrat
     *
     * @return self
     */
    public function setFraisSurContrat(?FraisSurContratDto $fraisSurContrat): self
    {
        $this->fraisSurContrat = $fraisSurContrat;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGarantiePlancher(): ?bool
    {
        return $this->garantiePlancher;
    }

    /**
     * @param bool|null $garantiePlancher
     *
     * @return self
     */
    public function setGarantiePlancher(?bool $garantiePlancher): self
    {
        $this->garantiePlancher = $garantiePlancher;

        return $this;
    }

    /**
     * @return ObjectifInvestissementDto|null
     */
    public function getObjectifInvestissement(): ?ObjectifInvestissementDto
    {
        return $this->objectifInvestissement;
    }

    /**
     * @param ObjectifInvestissementDto|null $objectifInvestissement
     *
     * @return self
     */
    public function setObjectifInvestissement(?ObjectifInvestissementDto $objectifInvestissement): self
    {
        $this->objectifInvestissement = $objectifInvestissement;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrecisionDureeContrat(): ?int
    {
        return $this->precisionDureeContrat;
    }

    /**
     * @param int|null $precisionDureeContrat
     *
     * @return self
     */
    public function setPrecisionDureeContrat(?int $precisionDureeContrat): self
    {
        $this->precisionDureeContrat = $precisionDureeContrat;

        return $this;
    }

    /**
     * @return SouscriptionMadelinDto|null
     */
    public function getSouscriptionMadelin(): ?SouscriptionMadelinDto
    {
        return $this->souscriptionMadelin;
    }

    /**
     * @param SouscriptionMadelinDto|null $souscriptionMadelin
     *
     * @return self
     */
    public function setSouscriptionMadelin(?SouscriptionMadelinDto $souscriptionMadelin): self
    {
        $this->souscriptionMadelin = $souscriptionMadelin;

        return $this;
    }

    /**
     * @return SouscriptionPerpDto|null
     */
    public function getSouscriptionPerp(): ?SouscriptionPerpDto
    {
        return $this->souscriptionPerp;
    }

    /**
     * @param SouscriptionPerpDto|null $souscriptionPerp
     *
     * @return self
     */
    public function setSouscriptionPerp(?SouscriptionPerpDto $souscriptionPerp): self
    {
        $this->souscriptionPerp = $souscriptionPerp;

        return $this;
    }

    /**
     * @return StopLossDto|null
     */
    public function getStopLoss(): ?StopLossDto
    {
        return $this->stopLoss;
    }

    /**
     * @param StopLossDto|null $stopLoss
     *
     * @return self
     */
    public function setStopLoss(?StopLossDto $stopLoss): self
    {
        $this->stopLoss = $stopLoss;

        return $this;
    }

    /**
     * @return modeleDeVersementInitial|null
     */
    public function getVersementInitial(): ?modeleDeVersementInitial
    {
        return $this->versementInitial;
    }

    /**
     * @param modeleDeVersementInitial|null $versementInitial
     *
     * @return self
     */
    public function setVersementInitial(?modeleDeVersementInitial $versementInitial): self
    {
        $this->versementInitial = $versementInitial;

        return $this;
    }

    /**
     * @return modeleDeVersement|null
     */
    public function getVersementProgramme(): ?modeleDeVersement
    {
        return $this->versementProgramme;
    }

    /**
     * @param modeleDeVersement|null $versementProgramme
     *
     * @return self
     */
    public function setVersementProgramme(?modeleDeVersement $versementProgramme): self
    {
        $this->versementProgramme = $versementProgramme;

        return $this;
    }
}
