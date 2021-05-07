<?php

namespace Mpp\ApicilClientBundle\Model;

class ReponseConnaissanceClient
{
    /**
     * @var ClientDto
     */
    private $client;

    /**
     * @var string|null
     */
    private $commentaire;

    /**
     * @var ConjointDto|null
     */
    private $conjoint;

    /**
     * @var CoordonneesDto
     */
    private $coordonnees;

    /**
     * @var \DateTime|null
     */
    private $dateSignatureClient;

    /**
     * @var Foyer|null
     */
    private $foyer;

    /**
     * @var bool|null
     */
    private $saisirCommentaire;

    /**
     * @var bool|null
     */
    private $parcoursKyc;

    /**
     * @var bool|null
     */
    private $adresseResidenceFiscaleDifferente;

    /**
     * @var bool|null
     */
    private $professionSensible;

    /**
     * @var bool|null
     */
    private $bulletinPartenaire;

    /**
     * @var \DateTime|null
     */
    private $dateSaisie;

    /**
     * @var bool|null
     */
    private $ccIncomplete;

    /**
     * @var \DateTime|null
     */
    private $dateValidationActualisation;

    /**
     * @var bool|null
     */
    private $residenceFiscaleHorsFranceAmerique;

    /**
     * @var bool|null
     */
    private $ppeClient;

    /**
     * @var bool|null
     */
    private $ppeConjoint;

    /**
     * @var bool|null
     */
    private $ppeLienFamilialeConjoint;

    /**
     * @var bool|null
     */
    private $ppeLienFamiliale;

    /**
     * @var bool|null
     */
    private $devoirConseilCourtier;

    /**
     * @var string|null
     */
    private $statut;

    /**
     * @var bool|null
     */
    private $obsolete;

    /**
     * @var bool|null
     */
    private $saisieParClient;

    /**
     * @return ClientDto
     */
    public function getClient(): ClientDto
    {
        return $this->client;
    }

    /**
     * @param ClientDto $client
     *
     * @return self
     */
    public function setClient(ClientDto $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    /**
     * @param string|null $commentaire
     *
     * @return self
     */
    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return ConjointDto|null
     */
    public function getConjoint(): ?ConjointDto
    {
        return $this->conjoint;
    }

    /**
     * @param ConjointDto|null $conjoint
     *
     * @return self
     */
    public function setConjoint(?ConjointDto $conjoint): self
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * @return CoordonneesDto
     */
    public function getCoordonnees(): CoordonneesDto
    {
        return $this->coordonnees;
    }

    /**
     * @param CoordonneesDto $coordonnees
     *
     * @return self
     */
    public function setCoordonnees(CoordonneesDto $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateSignatureClient(): ?\DateTime
    {
        return $this->dateSignatureClient;
    }

    /**
     * @param \DateTime|null $dateSignatureClient
     *
     * @return self
     */
    public function setDateSignatureClient(?\DateTime $dateSignatureClient): self
    {
        $this->dateSignatureClient = $dateSignatureClient;

        return $this;
    }

    /**
     * @return Foyer|null
     */
    public function getFoyer(): ?Foyer
    {
        return $this->foyer;
    }

    /**
     * @param Foyer|null $foyer
     *
     * @return self
     */
    public function setFoyer(?Foyer $foyer): self
    {
        $this->foyer = $foyer;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getProfessionSensible(): ?bool
    {
        return $this->professionSensible;
    }

    /**
     * @param bool|null $professionSensible
     *
     * @return self
     */
    public function setProfessionSensible(?bool $professionSensible): self
    {
        $this->professionSensible = $professionSensible;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string|null $statut
     *
     * @return self
     */
    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getSaisirCommentaire(): ?bool
    {
        return $this->saisirCommentaire;
    }

    /**
     * @param  bool|null  $saisirCommentaire
     *
     * @return  self
     */
    public function setSaisirCommentaire(?bool $saisirCommentaire): self
    {
        $this->saisirCommentaire = $saisirCommentaire;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getParcoursKyc(): ?bool
    {
        return $this->parcoursKyc;
    }

    /**
     * @param  bool|null  $parcoursKyc
     *
     * @return  self
     */
    public function setParcoursKyc(?bool $parcoursKyc): self
    {
        $this->parcoursKyc = $parcoursKyc;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getAdresseResidenceFiscaleDifferente(): ?bool
    {
        return $this->adresseResidenceFiscaleDifferente;
    }

    /**
     * @param  bool|null  $adresseResidenceFiscaleDifferente
     *
     * @return  self
     */
    public function setAdresseResidenceFiscaleDifferente(?bool $adresseResidenceFiscaleDifferente): self
    {
        $this->adresseResidenceFiscaleDifferente = $adresseResidenceFiscaleDifferente;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getBulletinPartenaire(): ?bool
    {
        return $this->bulletinPartenaire;
    }

    /**
     * @param  bool|null  $bulletinPartenaire
     *
     * @return  self
     */
    public function setBulletinPartenaire(?bool $bulletinPartenaire): self
    {
        $this->bulletinPartenaire = $bulletinPartenaire;

        return $this;
    }

    /**
     * @return  \DateTime|null
     */
    public function getDateSaisie(): ?\DateTime
    {
        return $this->dateSaisie;
    }

    /**
     * @param  \DateTime|null  $dateSaisie
     *
     * @return  self
     */
    public function setDateSaisie(?\DateTime $dateSaisie): self
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getCcIncomplete(): ?bool
    {
        return $this->ccIncomplete;
    }

    /**
     * @param  bool|null  $ccIncomplete
     *
     * @return  self
     */
    public function setCcIncomplete(?bool $ccIncomplete): self
    {
        $this->ccIncomplete = $ccIncomplete;

        return $this;
    }

    /**
     * @return  \DateTime|null
     */
    public function getDateValidationActualisation(): ?\DateTime
    {
        return $this->dateValidationActualisation;
    }

    /**
     * @param  \DateTime|null  $dateValidationActualisation
     *
     * @return  self
     */
    public function setDateValidationActualisation(?\DateTime $dateValidationActualisation): self
    {
        $this->dateValidationActualisation = $dateValidationActualisation;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getResidenceFiscaleHorsFranceAmerique(): ?bool
    {
        return $this->residenceFiscaleHorsFranceAmerique;
    }

    /**
     * @param  bool|null  $residenceFiscaleHorsFranceAmerique
     *
     * @return  self
     */
    public function setResidenceFiscaleHorsFranceAmerique(?bool $residenceFiscaleHorsFranceAmerique): self
    {
        $this->residenceFiscaleHorsFranceAmerique = $residenceFiscaleHorsFranceAmerique;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getPpeClient(): ?bool
    {
        return $this->ppeClient;
    }

    /**
     * @param  bool|null  $ppeClient
     *
     * @return  self
     */
    public function setPpeClient(?bool $ppeClient): self
    {
        $this->ppeClient = $ppeClient;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getPpeConjoint(): ?bool
    {
        return $this->ppeConjoint;
    }

    /**
     * @param  bool|null  $ppeConjoint
     *
     * @return  self
     */
    public function setPpeConjoint(?bool $ppeConjoint): self
    {
        $this->ppeConjoint = $ppeConjoint;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getPpeLienFamilialeConjoint(): ?bool
    {
        return $this->ppeLienFamilialeConjoint;
    }

    /**
     * @param  bool|null  $ppeLienFamilialeConjoint
     *
     * @return  self
     */
    public function setPpeLienFamilialeConjoint(?bool $ppeLienFamilialeConjoint): self
    {
        $this->ppeLienFamilialeConjoint = $ppeLienFamilialeConjoint;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getPpeLienFamiliale(): ?bool
    {
        return $this->ppeLienFamiliale;
    }

    /**
     * @param  bool|null  $ppeLienFamiliale
     *
     * @return  self
     */
    public function setPpeLienFamiliale(?bool $ppeLienFamiliale): self
    {
        $this->ppeLienFamiliale = $ppeLienFamiliale;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getDevoirConseilCourtier(): ?bool
    {
        return $this->devoirConseilCourtier;
    }

    /**
     * @param  bool|null  $devoirConseilCourtier
     *
     * @return  self
     */
    public function setDevoirConseilCourtier(?bool $devoirConseilCourtier): self
    {
        $this->devoirConseilCourtier = $devoirConseilCourtier;

        return $this;
    }

    /**
     * @return  bool|null
     */ 
    public function getObsolete(): ?bool
    {
        return $this->obsolete;
    }

    /**
     * @param  bool|null  $obsolete
     *
     * @return  self
     */ 
    public function setObsolete(?bool $obsolete): self
    {
        $this->obsolete = $obsolete;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getSaisieParClient(): ?bool
    {
        return $this->saisieParClient;
    }

    /**
     * @param  bool|null  $saisieParClient
     *
     * @return  self
     */
    public function setSaisieParClient(?bool $saisieParClient): self
    {
        $this->saisieParClient = $saisieParClient;

        return $this;
    }
}
