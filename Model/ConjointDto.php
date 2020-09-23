<?php

namespace Mpp\ApicilClientBundle\Model;

class ConjointDto
{
    /**
     * @var EtatCivilConjointDto|null
     */
    private $etatCivil;

    /**
     * @var array|null
     */
    private $patrimoine;

    /**
     * @var array|null
     */
    private $revenus;

    /**
     * @var SituationProfessionnelleConjointDto|null
     */
    private $situationProfessionnelle;

    /**
     * @return EtatCivilConjointDto|null
     */
    public function getEtatCivil(): ?EtatCivilConjointDto
    {
        return $this->etatCivil;
    }

    /**
     * @param EtatCivilConjointDto|null $etatCivil
     *
     * @return self
     */
    public function setEtatCivil(?EtatCivilConjointDto $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPatrimoine(): ?array
    {
        return $this->patrimoine;
    }

    /**
     * @param array|null $patrimoine
     *
     * @return self
     */
    public function setPatrimoine(?array $patrimoine): self
    {
        $this->patrimoine = $patrimoine;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRevenus(): ?array
    {
        return $this->revenus;
    }

    /**
     * @param array|null $revenus
     *
     * @return self
     */
    public function setRevenus(?array $revenus): self
    {
        $this->revenus = $revenus;

        return $this;
    }

    /**
     * @return SituationProfessionnelleConjointDto|null
     */
    public function getSituationProfessionnelle(): ?SituationProfessionnelleConjointDto
    {
        return $this->situationProfessionnelle;
    }

    /**
     * @param SituationProfessionnelleConjointDto|null $situationProfessionnelle
     *
     * @return self
     */
    public function setSituationProfessionnelle(?SituationProfessionnelleConjointDto $situationProfessionnelle): self
    {
        $this->situationProfessionnelle = $situationProfessionnelle;

        return $this;
    }
}
