<?php

namespace Mpp\ApicilClientBundle\Model;

class VersementMinDto
{
    /**
     * @var float|null
     */
    private $minVersementProgrammeAnnuel;

    /**
     * @var float|null
     */
    private $minVersementProgrammeMensuel;

    /**
     * @var float|null
     */
    private $minVersementProgrammeSemestriel;

    /**
     * @var float|null
     */
    private $minVersementProgrammeTrimestriel;

    /**
     * @var float|null
     */
    private $versementInitialMinimum;

    /**
     * @return float|null
     */
    public function getMinVersementProgrammeAnnuel(): ?float
    {
        return $this->minVersementProgrammeAnnuel;
    }

    /**
     * @param float|null $minVersementProgrammeAnnuel
     *
     * @return self
     */
    public function setMinVersementProgrammeAnnuel(?float $minVersementProgrammeAnnuel): self
    {
        $this->minVersementProgrammeAnnuel = $minVersementProgrammeAnnuel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinVersementProgrammeMensuel(): ?float
    {
        return $this->minVersementProgrammeMensuel;
    }

    /**
     * @param float|null $minVersementProgrammeMensuel
     *
     * @return self
     */
    public function setMinVersementProgrammeMensuel(?float $minVersementProgrammeMensuel): self
    {
        $this->minVersementProgrammeMensuel = $minVersementProgrammeMensuel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinVersementProgrammeSemestriel(): ?float
    {
        return $this->minVersementProgrammeSemestriel;
    }

    /**
     * @param float|null $minVersementProgrammeSemestriel
     *
     * @return self
     */
    public function setMinVersementProgrammeSemestriel(?float $minVersementProgrammeSemestriel): self
    {
        $this->minVersementProgrammeSemestriel = $minVersementProgrammeSemestriel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinVersementProgrammeTrimestriel(): ?float
    {
        return $this->minVersementProgrammeTrimestriel;
    }

    /**
     * @param float|null $minVersementProgrammeTrimestriel
     *
     * @return self
     */
    public function setMinVersementProgrammeTrimestriel(?float $minVersementProgrammeTrimestriel): self
    {
        $this->minVersementProgrammeTrimestriel = $minVersementProgrammeTrimestriel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getVersementInitialMinimum(): ?float
    {
        return $this->versementInitialMinimum;
    }

    /**
     * @param float|null $versementInitialMinimum
     *
     * @return self
     */
    public function setVersementInitialMinimum(?float $versementInitialMinimum): self
    {
        $this->versementInitialMinimum = $versementInitialMinimum;

        return $this;
    }
}
