<?php

namespace Mpp\ApicilClientBundle\Model;

class SouscriptionMadelinDto
{
    public const STATUTFISCAL_AR62 = 'AR62';
    public const STATUTFISCAL_BIC = 'BIC';
    public const STATUTFISCAL_BNC = 'BNC';

    public const STATUTPERSONNEL_CCNS = 'CCNS';
    public const STATUTPERSONNEL_GEAS = 'GEAS';
    public const STATUTPERSONNEL_XIND = 'XIND';

    /**
     * @var ArbitrageAutomatiqueDto|null
     */
    private $arbitrageAutomatique;

    /**
     * @var ClasseCotisationDto|null
     */
    private $classeCotisation;

    /**
     * @var bool|null
     */
    private $controleMedical;

    /**
     * @var CoordonneesProfessionnellesMadelinDto|null
     */
    private $coordonneesProfessionnelles;

    /**
     * @var bool|null
     */
    private $cotisationAUA;

    /**
     * @var string|null
     */
    private $moisClotureExerciceFiscal;

    /**
     * @var float|null
     */
    private $montantCotisationComplemetaire;

    /**
     * @var string|null
     */
    private $packSecurisationCotisations;

    /**
     * @var RegimeSocialDto|null
     */
    private $regimeSocial;

    /**
     * @var string|null
     */
    private $statutFiscal;

    /**
     * @var string|null
     */
    private $statutPersonnel;

    /**
     * @return ArbitrageAutomatiqueDto|null
     */
    public function getArbitrageAutomatique(): ?ArbitrageAutomatiqueDto
    {
        return $this->arbitrageAutomatique;
    }

    /**
     * @param ArbitrageAutomatiqueDto|null $arbitrageAutomatique
     *
     * @return self
     */
    public function setArbitrageAutomatique(?ArbitrageAutomatiqueDto $arbitrageAutomatique): self
    {
        $this->arbitrageAutomatique = $arbitrageAutomatique;

        return $this;
    }

    /**
     * @return ClasseCotisationDto|null
     */
    public function getClasseCotisation(): ?ClasseCotisationDto
    {
        return $this->classeCotisation;
    }

    /**
     * @param ClasseCotisationDto|null $classeCotisation
     *
     * @return self
     */
    public function setClasseCotisation(?ClasseCotisationDto $classeCotisation): self
    {
        $this->classeCotisation = $classeCotisation;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getControleMedical(): ?bool
    {
        return $this->controleMedical;
    }

    /**
     * @param bool|null $controleMedical
     *
     * @return self
     */
    public function setControleMedical(?bool $controleMedical): self
    {
        $this->controleMedical = $controleMedical;

        return $this;
    }

    /**
     * @return CoordonneesProfessionnellesMadelinDto|null
     */
    public function getCoordonneesProfessionnelles(): ?CoordonneesProfessionnellesMadelinDto
    {
        return $this->coordonneesProfessionnelles;
    }

    /**
     * @param CoordonneesProfessionnellesMadelinDto|null $coordonneesProfessionnelles
     *
     * @return self
     */
    public function setCoordonneesProfessionnelles(?CoordonneesProfessionnellesMadelinDto $coordonneesProfessionnelles): self
    {
        $this->coordonneesProfessionnelles = $coordonneesProfessionnelles;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCotisationAUA(): ?bool
    {
        return $this->cotisationAUA;
    }

    /**
     * @param bool|null $cotisationAUA
     *
     * @return self
     */
    public function setCotisationAUA(?bool $cotisationAUA): self
    {
        $this->cotisationAUA = $cotisationAUA;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoisClotureExerciceFiscal(): ?string
    {
        return $this->moisClotureExerciceFiscal;
    }

    /**
     * @param string|null $moisClotureExerciceFiscal
     *
     * @return self
     */
    public function setMoisClotureExerciceFiscal(?string $moisClotureExerciceFiscal): self
    {
        $this->moisClotureExerciceFiscal = $moisClotureExerciceFiscal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantCotisationComplemetaire(): ?float
    {
        return $this->montantCotisationComplemetaire;
    }

    /**
     * @param float|null $montantCotisationComplemetaire
     *
     * @return self
     */
    public function setMontantCotisationComplemetaire(?float $montantCotisationComplemetaire): self
    {
        $this->montantCotisationComplemetaire = $montantCotisationComplemetaire;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPackSecurisationCotisations(): ?string
    {
        return $this->packSecurisationCotisations;
    }

    /**
     * @param string|null $packSecurisationCotisations
     *
     * @return self
     */
    public function setPackSecurisationCotisations(?string $packSecurisationCotisations): self
    {
        $this->packSecurisationCotisations = $packSecurisationCotisations;

        return $this;
    }

    /**
     * @return RegimeSocialDto|null
     */
    public function getRegimeSocial(): ?RegimeSocialDto
    {
        return $this->regimeSocial;
    }

    /**
     * @param RegimeSocialDto|null $regimeSocial
     *
     * @return self
     */
    public function setRegimeSocial(?RegimeSocialDto $regimeSocial): self
    {
        $this->regimeSocial = $regimeSocial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutFiscal(): ?string
    {
        return $this->statutFiscal;
    }

    /**
     * @param string|null $statutFiscal
     *
     * @return self
     */
    public function setStatutFiscal(?string $statutFiscal): self
    {
        $this->statutFiscal = $statutFiscal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutPersonnel(): ?string
    {
        return $this->statutPersonnel;
    }

    /**
     * @param string|null $statutPersonnel
     *
     * @return self
     */
    public function setStatutPersonnel(?string $statutPersonnel): self
    {
        $this->statutPersonnel = $statutPersonnel;

        return $this;
    }
}
