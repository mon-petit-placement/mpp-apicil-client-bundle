<?php

namespace Mpp\ApicilClientBundle\Model;

class SituationProfessionnelleDto
{
    /**
     * @var CategorieSocioProfessionnelleDto|null
     */
    private $categorieSocioProfessionnelle;

    /**
     * @var InformationsPPEDto|null
     */
    private $informationsPPE;

    /**
     * @var LienPPEDto|null
     */
    private $lienPPE;

    /**
     * @var string|null
     */
    private $nomEntreprise;

    /**
     * @var string|null
     */
    private $professionActuelle;

    /**
     * @var SecteurActiviteDto|null
     */
    private $secteurActivite;

    /**
     * @var SituationActuelleDto|null
     */
    private $situationActuelle;

    /**
     * @var bool|null
     */
    private $travailleurNonSalarie;

    /**
     * @return CategorieSocioProfessionnelleDto|null
     */
    public function getCategorieSocioProfessionnelle(): ?CategorieSocioProfessionnelleDto
    {
        return $this->categorieSocioProfessionnelle;
    }

    /**
     * @param CategorieSocioProfessionnelleDto|null $categorieSocioProfessionnelle
     *
     * @return self
     */
    public function setCategorieSocioProfessionnelle(?CategorieSocioProfessionnelleDto $categorieSocioProfessionnelle): self
    {
        $this->categorieSocioProfessionnelle = $categorieSocioProfessionnelle;

        return $this;
    }

    /**
     * @return InformationsPPEDto|null
     */
    public function getInformationsPPE(): ?InformationsPPEDto
    {
        return $this->informationsPPE;
    }

    /**
     * @param InformationsPPEDto|null $informationsPPE
     *
     * @return self
     */
    public function setInformationsPPE(?InformationsPPEDto $informationsPPE): self
    {
        $this->informationsPPE = $informationsPPE;

        return $this;
    }

    /**
     * @return LienPPEDto|null
     */
    public function getLienPPE(): ?LienPPEDto
    {
        return $this->lienPPE;
    }

    /**
     * @param LienPPEDto|null $lienPPE
     *
     * @return self
     */
    public function setLienPPE(?LienPPEDto $lienPPE): self
    {
        $this->lienPPE = $lienPPE;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * @param string|null $nomEntreprise
     *
     * @return self
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfessionActuelle(): ?string
    {
        return $this->professionActuelle;
    }

    /**
     * @param string|null $professionActuelle
     *
     * @return self
     */
    public function setProfessionActuelle(?string $professionActuelle): self
    {
        $this->professionActuelle = $professionActuelle;

        return $this;
    }

    /**
     * @return SecteurActiviteDto|null
     */
    public function getSecteurActivite(): ?SecteurActiviteDto
    {
        return $this->secteurActivite;
    }

    /**
     * @param SecteurActiviteDto|null $secteurActivite
     *
     * @return self
     */
    public function setSecteurActivite(?SecteurActiviteDto $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

    /**
     * @return SituationActuelleDto|null
     */
    public function getSituationActuelle(): ?SituationActuelleDto
    {
        return $this->situationActuelle;
    }

    /**
     * @param SituationActuelleDto|null $situationActuelle
     *
     * @return self
     */
    public function setSituationActuelle(?SituationActuelleDto $situationActuelle): self
    {
        $this->situationActuelle = $situationActuelle;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTravailleurNonSalarie(): ?bool
    {
        return $this->travailleurNonSalarie;
    }

    /**
     * @param bool|null $travailleurNonSalarie
     *
     * @return self
     */
    public function setTravailleurNonSalarie(?bool $travailleurNonSalarie): self
    {
        $this->travailleurNonSalarie = $travailleurNonSalarie;

        return $this;
    }
}
