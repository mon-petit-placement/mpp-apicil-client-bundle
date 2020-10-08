<?php

namespace Mpp\ApicilClientBundle\Model;

class SituationProfessionnelleConjointDto
{
    /**
     * @var CategorieSocioProfessionnelleDto|null
     */
    private $categorieSocioProfessionnelle;

    /**
     * @var InformationsPPEConjointDto|null
     */
    private $informationsPPE;

    /**
     * @var LienPPEConjointDto|null
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
     * @return InformationsPPEConjointDto|null
     */
    public function getInformationsPPE(): ?InformationsPPEConjointDto
    {
        return $this->informationsPPE;
    }

    /**
     * @param InformationsPPEConjointDto|null $informationsPPE
     *
     * @return self
     */
    public function setInformationsPPE(?InformationsPPEConjointDto $informationsPPE): self
    {
        $this->informationsPPE = $informationsPPE;

        return $this;
    }

    /**
     * @return LienPPEConjointDto|null
     */
    public function getLienPPE(): ?LienPPEConjointDto
    {
        return $this->lienPPE;
    }

    /**
     * @param LienPPEConjointDto|null $lienPPE
     *
     * @return self
     */
    public function setLienPPE(?LienPPEConjointDto $lienPPE): self
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
