<?php

namespace Mpp\ApicilClientBundle\Model;

class ProcedureDto
{
    /**
     * @var CustomAdresseOrganisationDto|null
     */
    private $adresseOrganisationDto;

    /**
     * @var string|null
     */
    private $versementReglementDestinataire;

    /**
     * @return CustomAdresseOrganisationDto|null
     */
    public function getAdresseOrganisationDto(): ?CustomAdresseOrganisationDto
    {
        return $this->adresseOrganisationDto;
    }

    /**
     * @param CustomAdresseOrganisationDto|null $adresseOrganisationDto
     *
     * @return self
     */
    public function setAdresseOrganisationDto(?CustomAdresseOrganisationDto $adresseOrganisationDto): self
    {
        $this->adresseOrganisationDto = $adresseOrganisationDto;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersementReglementDestinataire(): ?string
    {
        return $this->versementReglementDestinataire;
    }

    /**
     * @param string|null $versementReglementDestinataire
     *
     * @return self
     */
    public function setVersementReglementDestinataire(?string $versementReglementDestinataire): self
    {
        $this->versementReglementDestinataire = $versementReglementDestinataire;

        return $this;
    }
}
