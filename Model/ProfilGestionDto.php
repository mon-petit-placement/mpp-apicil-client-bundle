<?php

namespace Mpp\ApicilClientBundle\Model;

class ProfilGestionDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var SocieteGestionDto|null
     */
    private $societe;

    /**
     * @var float|null
     */
    private $surtauxEncours;

    /**
     * @var float|null
     */
    private $surtauxMax;

    /**
     * @var ThematiqueDto|null
     */
    private $thematique;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return SocieteGestionDto|null
     */
    public function getSociete(): ?SocieteGestionDto
    {
        return $this->societe;
    }

    /**
     * @param SocieteGestionDto|null $societe
     *
     * @return self
     */
    public function setSociete(?SocieteGestionDto $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSurtauxEncours(): ?float
    {
        return $this->surtauxEncours;
    }

    /**
     * @param float|null $surtauxEncours
     *
     * @return self
     */
    public function setSurtauxEncours(?float $surtauxEncours): self
    {
        $this->surtauxEncours = $surtauxEncours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSurtauxMax(): ?float
    {
        return $this->surtauxMax;
    }

    /**
     * @param float|null $surtauxMax
     *
     * @return self
     */
    public function setSurtauxMax(?float $surtauxMax): self
    {
        $this->surtauxMax = $surtauxMax;

        return $this;
    }

    /**
     * @return ThematiqueDto|null
     */
    public function getThematique(): ?ThematiqueDto
    {
        return $this->thematique;
    }

    /**
     * @param ThematiqueDto|null $thematique
     *
     * @return self
     */
    public function setThematique(?ThematiqueDto $thematique): self
    {
        $this->thematique = $thematique;

        return $this;
    }
}
