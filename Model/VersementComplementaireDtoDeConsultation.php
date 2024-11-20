<?php

namespace Mpp\ApicilClientBundle\Model;

class VersementComplementaireDtoDeConsultation
{
    public const MODEINVESTISSEMENT_CHOIX = 'CHOIX';
    public const MODEINVESTISSEMENT_PRORATA = 'PRORATA';

    public const MODEPAIEMENT_C = 'C';
    public const MODEPAIEMENT_P = 'P';
    public const MODEPAIEMENT_V = 'V';

    public const TYPEVERSEMENT_COMPLEMENTAIRE = 'COMPLEMENTAIRE';
    public const TYPEVERSEMENT_PROGRAMME = 'PROGRAMME';

    /**
     * @var string|null
     */
    private $alliance;

    /**
     * @var bool|null
     */
    private $bulletinPartenaire;

    /**
     * @var bool|null
     */
    private $conserverIban;

    /**
     * @var int|string|null
     */
    private $contratId;

    /**
     * @var \DateTime|null
     */
    private $dateSignatureSepa;

    /**
     * @var bool|null
     */
    private $deduction;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var TrHorizonInvestissementDto|null
     */
    private $horizonInvestissement;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $modeInvestissement;

    /**
     * @var string|null
     */
    private $modePaiement;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var OrigineDesFondsDto|null
     */
    private $origineDesFonds;

    /**
     * @var PayeurDto|null
     */
    private $payeur;

    /**
     * @var string|null
     */
    private $periodicite;

    /**
     * @var array|null
     */
    private $repartitionInvestissement;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var string|null
     */
    private $rum;

    /**
     * @var bool|null
     */
    private $signeClient;

    /**
     * @var string|null
     */
    private $statutActuel;

    /**
     * @var string|null
     */
    private $typeVersement;

    /**
     * @return string|null
     */
    public function getAlliance(): ?string
    {
        return $this->alliance;
    }

    /**
     * @param string|null $alliance
     *
     * @return self
     */
    public function setAlliance(?string $alliance): self
    {
        $this->alliance = $alliance;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getConserverIban(): ?bool
    {
        return $this->conserverIban;
    }

    /**
     * @param bool|null $conserverIban
     *
     * @return self
     */
    public function setConserverIban(?bool $conserverIban): self
    {
        $this->conserverIban = $conserverIban;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContratId(): ?string
    {
        return $this->contratId;
    }

    /**
     * @param int|string|null $contratId
     *
     * @return self
     */
    public function setContratId(int|string|null $contratId): self
    {
        if (is_int($contratId)) {
            $contratId = (string) $contratId;
        }

        $this->contratId = $contratId;

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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModeInvestissement(): ?string
    {
        return $this->modeInvestissement;
    }

    /**
     * @param string|null $modeInvestissement
     *
     * @return self
     */
    public function setModeInvestissement(?string $modeInvestissement): self
    {
        $this->modeInvestissement = $modeInvestissement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModePaiement(): ?string
    {
        return $this->modePaiement;
    }

    /**
     * @param string|null $modePaiement
     *
     * @return self
     */
    public function setModePaiement(?string $modePaiement): self
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param float|null $montant
     *
     * @return self
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return OrigineDesFondsDto|null
     */
    public function getOrigineDesFonds(): ?OrigineDesFondsDto
    {
        return $this->origineDesFonds;
    }

    /**
     * @param OrigineDesFondsDto|null $origineDesFonds
     *
     * @return self
     */
    public function setOrigineDesFonds(?OrigineDesFondsDto $origineDesFonds): self
    {
        $this->origineDesFonds = $origineDesFonds;

        return $this;
    }

    /**
     * @return PayeurDto|null
     */
    public function getPayeur(): ?PayeurDto
    {
        return $this->payeur;
    }

    /**
     * @param PayeurDto|null $payeur
     *
     * @return self
     */
    public function setPayeur(?PayeurDto $payeur): self
    {
        $this->payeur = $payeur;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    /**
     * @param string|null $periodicite
     *
     * @return self
     */
    public function setPeriodicite(?string $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRepartitionInvestissement(): ?array
    {
        return $this->repartitionInvestissement;
    }

    /**
     * @param array|null $repartitionInvestissement
     *
     * @return self
     */
    public function setRepartitionInvestissement(?array $repartitionInvestissement): self
    {
        $this->repartitionInvestissement = $repartitionInvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReponsesSupportStructure(): ?array
    {
        return $this->reponsesSupportStructure;
    }

    /**
     * @param array|null $reponsesSupportStructure
     *
     * @return self
     */
    public function setReponsesSupportStructure(?array $reponsesSupportStructure): self
    {
        $this->reponsesSupportStructure = $reponsesSupportStructure;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSigneClient(): ?bool
    {
        return $this->signeClient;
    }

    /**
     * @param bool|null $signeClient
     *
     * @return self
     */
    public function setSigneClient(?bool $signeClient): self
    {
        $this->signeClient = $signeClient;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutActuel(): ?string
    {
        return $this->statutActuel;
    }

    /**
     * @param string|null $statutActuel
     *
     * @return self
     */
    public function setStatutActuel(?string $statutActuel): self
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeVersement(): ?string
    {
        return $this->typeVersement;
    }

    /**
     * @param string|null $typeVersement
     *
     * @return self
     */
    public function setTypeVersement(?string $typeVersement): self
    {
        $this->typeVersement = $typeVersement;

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
    public function getDateSignatureSepa(): ?\DateTime
    {
        return $this->dateSignatureSepa;
    }

    /**
     * @param  \DateTime|null  $dateSignatureSepa
     *
     * @return  self
     */
    public function setDateSignatureSepa(?\DateTime $dateSignatureSepa): self
    {
        $this->dateSignatureSepa = $dateSignatureSepa;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getDeduction(): ?bool
    {
        return $this->deduction;
    }

    /**
     * @param  bool|null  $deduction
     *
     * @return  self
     */
    public function setDeduction(?bool $deduction): self
    {
        $this->deduction = $deduction;

        return $this;
    }

    /**
     * @return  TrHorizonInvestissementDto|null
     */
    public function getHorizonInvestissement(): ?TrHorizonInvestissementDto
    {
        return $this->horizonInvestissement;
    }

    /**
     * @param  TrHorizonInvestissementDto|null  $horizonInvestissement
     *
     * @return  self
     */
    public function setHorizonInvestissement(?TrHorizonInvestissementDto $horizonInvestissement): self
    {
        $this->horizonInvestissement = $horizonInvestissement;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getRum(): ?string
    {
        return $this->rum;
    }

    /**
     * @param  string|null  $rum
     *
     * @return  self
     */
    public function setRum(?string $rum): self
    {
        $this->rum = $rum;

        return $this;
    }
}
