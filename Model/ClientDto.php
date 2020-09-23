<?php

namespace Mpp\ApicilClientBundle\Model;

class ClientDto
{
    /**
     * @var SituationProfessionnelleDto|null
     */
    private $situationProfessionnelle;

    /**
     * @var EtatCivilDto|null
     */
    private $etatCivil;

    /**
     * @var InfoFiscalesDto|null
     */
    private $informationsFiscales;

    /**
     * @var IdentiteFiscaleDto|null
     */
    private $identiteFiscaleHorsFranceEtUSA1;

    /**
     * @var IdentiteFiscaleDto|null
     */
    private $identiteFiscaleHorsFranceEtUSA2;

    /**
     * @var string|null
     */
    private $numeroIdentificationFiscalUS;

    /**
     * @var bool|null
     */
    private $residentFiscalOuCitoyenUs;

    /**
     * @var array|null
     */
    private $patrimoine;

    /**
     * @var array|null
     */
    private $revenus;

    /**
     * @return SituationProfessionnelleDto|null
     */
    public function getSituationProfessionnelle(): ?SituationProfessionnelleDto
    {
        return $this->situationProfessionnelle;
    }

    /**
     * @param SituationProfessionnelleDto|null $situationProfessionnelle
     *
     * @return self
     */
    public function setSituationProfessionnelle(?SituationProfessionnelleDto $situationProfessionnelle): self
    {
        $this->situationProfessionnelle = $situationProfessionnelle;

        return $this;
    }

    /**
     * @return EtatCivilDto|null
     */
    public function getEtatCivil(): ?EtatCivilDto
    {
        return $this->etatCivil;
    }

    /**
     * @param EtatCivilDto|null $etatCivil
     *
     * @return self
     */
    public function setEtatCivil(?EtatCivilDto $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * @return InfoFiscalesDto|null
     */
    public function getInformationsFiscales(): ?InfoFiscalesDto
    {
        return $this->informationsFiscales;
    }

    /**
     * @param InfoFiscalesDto|null $informationsFiscales
     *
     * @return self
     */
    public function setInformationsFiscales(?InfoFiscalesDto $informationsFiscales): self
    {
        $this->informationsFiscales = $informationsFiscales;

        return $this;
    }

    /**
     * @return IdentiteFiscaleDto|null
     */
    public function getIdentiteFiscaleHorsFranceEtUSA1(): ?IdentiteFiscaleDto
    {
        return $this->identiteFiscaleHorsFranceEtUSA1;
    }

    /**
     * @param IdentiteFiscaleDto|null $identiteFiscaleHorsFranceEtUSA1
     *
     * @return self
     */
    public function setIdentiteFiscaleHorsFranceEtUSA1(?IdentiteFiscaleDto $identiteFiscaleHorsFranceEtUSA1): self
    {
        $this->identiteFiscaleHorsFranceEtUSA1 = $identiteFiscaleHorsFranceEtUSA1;

        return $this;
    }

    /**
     * @return IdentiteFiscaleDto|null
     */
    public function getIdentiteFiscaleHorsFranceEtUSA2(): ?IdentiteFiscaleDto
    {
        return $this->identiteFiscaleHorsFranceEtUSA2;
    }

    /**
     * @param IdentiteFiscaleDto|null $identiteFiscaleHorsFranceEtUSA2
     *
     * @return self
     */
    public function setIdentiteFiscaleHorsFranceEtUSA2(?IdentiteFiscaleDto $identiteFiscaleHorsFranceEtUSA2): self
    {
        $this->identiteFiscaleHorsFranceEtUSA2 = $identiteFiscaleHorsFranceEtUSA2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentificationFiscalUS(): ?string
    {
        return $this->numeroIdentificationFiscalUS;
    }

    /**
     * @param string|null $numeroIdentificationFiscalUS
     *
     * @return self
     */
    public function setNumeroIdentificationFiscalUS(?string $numeroIdentificationFiscalUS): self
    {
        $this->numeroIdentificationFiscalUS = $numeroIdentificationFiscalUS;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResidentFiscalOuCitoyenUs(): ?bool
    {
        return $this->residentFiscalOuCitoyenUs;
    }

    /**
     * @param bool|null $residentFiscalOuCitoyenUs
     *
     * @return self
     */
    public function setResidentFiscalOuCitoyenUs(?bool $residentFiscalOuCitoyenUs): self
    {
        $this->residentFiscalOuCitoyenUs = $residentFiscalOuCitoyenUs;

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
}
