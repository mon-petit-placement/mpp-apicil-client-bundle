<?php

namespace Mpp\ApicilClientBundle\Model;

class RachatPartielDtoDeConsultation
{
    public const FOMRE_REGLEMENT_CAPITAL = 'CAPITAL';
    public const FORME_REGLEMENT_VIAGERE = 'VIAGERE';
    public const FORME_REGLEMENT_CHOIX = 'CHOIX';

    public const MODE_DESINVESTISSEMENT_CHOIX = 'CHOIX';
    public const MODE_DESINVESTISSEMENT_PRORATA = 'PRORATA';
    public const MODE_DESINVESTISSEMENT_CONTRAT = 'CONTRAT';
    public const MODE_DESINVESTISSEMENT_PROFIL = 'PROFIL';

    public const MODE_PAIEMENT_CHEQUE = 'C';
    public const MODE_PAIEMENT_P = 'P';
    public const MODE_PAIEMENT_VIREMENT = 'V';
    public const MODE_PAIEMENT_T = 'T';

    public const TYPE_RACHAT_PARTIEL_PONCTUEL = 'PONCTUEL';
    public const TYPE_RACHAT_PARTIEL_PROGRAMME = 'PROGRAMME';
    public const TYPE_RACHAT_PARTIEL_SUPPRESSION_PROGRAMME = 'SUPPRESSION_PROGRAMME';

    public const TYPE_RACHAT_BRUT = 'BRUT';
    public const TYPE_RACHAT_NET = 'NET';
    public const TYPE_RACHAT_CHOIX = 'CHOIX';

    public const OPTION_FISCALE_LIBERATOIRE = 'LIBERATOIRE';
    public const OPTION_FISCALE_DECLARATION = 'DECLARATION';

    public const TYPE_SIGNATURE_ELECTRONIQUE = 'ELECTRONIQUE';
    public const TYPE_SIGNATURE_PAPIER = 'PAPIER';

    /**
     * @var string|null
     */
    private $commentaireClientRachatPrecoce;

    /**
     * @var bool|null
     */
    private $conserverIban;

    /**
     * @var int|null
     */
    private $contratId;

    /**
     * @var \DateTime|null
     */
    private $dateEffet;

    /**
     * @var DestinationDesFondsDto|null
     */
    private $destinationDesFonds;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

        /**
     * @var string|null
     */
    private $formeReglement;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $modeDesinvestissement;

    /**
     * @var string|null
     */
    private $modePaiement;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var string|null
     */
    private $optionFiscale;

    /**
     * @var bool|null
     */
    private $rachatRetroActif;

    /**
     * @var array|null
     */
    private $repartitionDesinvestissement;

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
    private $typeRachat;

    /**
     * @var string|null
     */
    private $typeRachatPartiel;

    /**
     * @var string|null
     */
    private $typeSignature;

    /**
     * @return int|null
     */
    public function getContratId(): ?int
    {
        return $this->contratId;
    }

    /**
     * @param int|null $contratId
     *
     * @return self
     */
    public function setContratId(?int $contratId): self
    {
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
     * @return  string|null
     */
    public function getOptionFiscale(): ?string
    {
        return $this->optionFiscale;
    }

    /**
     * @param  string|null  $optionFiscale
     *
     * @return  self
     */
    public function setOptionFiscale(?string $optionFiscale): self
    {
        $this->optionFiscale = $optionFiscale;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCommentaireClientRachatPrecoce(): ?string
    {
        return $this->commentaireClientRachatPrecoce;
    }

    /**
     * @param  string|null  $commentaireClientRachatPrecoce
     *
     * @return  self
     */
    public function setCommentaireClientRachatPrecoce(?string $commentaireClientRachatPrecoce): self
    {
        $this->commentaireClientRachatPrecoce = $commentaireClientRachatPrecoce;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeSignature(): ?string
    {
        return $this->typeSignature;
    }

    /**
     * @param  string|null  $typeSignature
     *
     * @return  self
     */
    public function setTypeSignature(?string $typeSignature): self
    {
        $this->typeSignature = $typeSignature;

        return $this;
    }

    /**
     * @return  int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param  int|null  $id
     *
     * @return  self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getConserverIban(): ?bool
    {
        return $this->conserverIban;
    }

    /**
     * @param  bool|null  $conserverIban
     *
     * @return  self
     */
    public function setConserverIban(?bool $conserverIban): self
    {
        $this->conserverIban = $conserverIban;

        return $this;
    }

    /**
     * @return  \DateTime|null
     */
    public function getDateEffet(): ?\DateTime
    {
        return $this->dateEffet;
    }

    /**
     * @param  \DateTime|null  $dateEffet
     *
     * @return  self
     */
    public function setDateEffet(?\DateTime $dateEffet): self
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * @return  DestinationDesFondsDto|null
     */
    public function getDestinationDesFonds(): ?DestinationDesFondsDto
    {
        return $this->destinationDesFonds;
    }

    /**
     * @param  DestinationDesFondsDto|null  $destinationDesFonds
     *
     * @return  self
     */
    public function setDestinationDesFonds(?DestinationDesFondsDto $destinationDesFonds): self
    {
        $this->destinationDesFonds = $destinationDesFonds;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getFormeReglement(): ?string
    {
        return $this->formeReglement;
    }

    /**
     * @param  string|null  $formeReglement
     *
     * @return  self
     */
    public function setFormeReglement(?string $formeReglement): self
    {
        $this->formeReglement = $formeReglement;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getRachatRetroActif(): ?bool
    {
        return $this->rachatRetroActif;
    }

    /**
     * @param  bool|null  $rachatRetroActif
     *
     * @return  self
     */
    public function setRachatRetroActif(?bool $rachatRetroActif): self
    {
        $this->rachatRetroActif = $rachatRetroActif;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getSigneClient(): ?bool
    {
        return $this->signeClient;
    }

    /**
     * @param  bool|null  $signeClient
     *
     * @return  self
     */
    public function setSigneClient(?bool $signeClient): self
    {
        $this->signeClient = $signeClient;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getStatutActuel(): ?string
    {
        return $this->statutActuel;
    }

    /**
     * @param  string|null  $statutActuel
     *
     * @return  self
     */
    public function setStatutActuel(?string $statutActuel): self
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }

    /**
     * @return  array|null
     */
    public function getRepartitionDesinvestissement(): ?array
    {
        return $this->repartitionDesinvestissement;
    }

    /**
     * @param  array|null  $repartitionDesinvestissement
     *
     * @return  self
     */
    public function setRepartitionDesinvestissement(?array $repartitionDesinvestissement): self
    {
        $this->repartitionDesinvestissement = $repartitionDesinvestissement;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getModeDesinvestissement(): ?string
    {
        return $this->modeDesinvestissement;
    }

    /**
     * @param  string|null  $modeDesinvestissement
     *
     * @return  self
     */
    public function setModeDesinvestissement(?string $modeDesinvestissement): self
    {
        $this->modeDesinvestissement = $modeDesinvestissement;

        return $this;
    }

    /**
     * @return  float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param  float|null  $montant
     *
     * @return  self
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeRachat(): ?string
    {
        return $this->typeRachat;
    }

    /**
     * @param  string|null  $typeRachat
     *
     * @return  self
     */
    public function setTypeRachat(?string $typeRachat): self
    {
        $this->typeRachat = $typeRachat;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeRachatPartiel(): ?string
    {
        return $this->typeRachatPartiel;
    }

    /**
     * @param  string|null  $typeRachatPartiel
     *
     * @return  self
     */
    public function setTypeRachatPartiel(?string $typeRachatPartiel): self
    {
        $this->typeRachatPartiel = $typeRachatPartiel;

        return $this;
    }
}
