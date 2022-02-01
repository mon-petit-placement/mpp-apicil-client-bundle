<?php

namespace Mpp\ApicilClientBundle\Model;

class ListProjetItem
{
    public const TYPE_SOUSCRIPTION_SELFCARE = 'SELFCARE';
    public const TYPE_SOUSCRIPTION_PROPOSITION = 'PROPOSITION';

    /**
     * @var int
     */
    private $totalSupports;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $produit;

    /**
     * @var string
     */
    private $numeroDeSouscription;

    /**
     * @var string
     */
    private $montant;

    /**
     * @var string
     */
    private $date;

    /**
     * @var DonneesReferencesDto
     */
    private $status;

    /**
     * @var bool
     */
    private $signeElectroniquement;

    /**
     * @var bool
     */
    private $pdfAEditer;

    /**
     * @var bool
     */
    private $signe;

    /**
     * @var bool
     */
    private $afficherAbandonner;

    /**
     * @var bool
     */
    private $afficherAcquitter;

    /**
     * @var bool
     */
    private $abandonnerEtClonerProjet;

    /**
     * @var bool
     */
    private $affaireAbandonner;

    /**
     * @var bool
     */
    private $clonable;

    /**
     * @var bool
     */
    private $estObjectifInvestissementInactif;

    /**
     * @var bool
     */
    private $estTypesCompatiblesAvecModeElectronique;

    /**
     * @var bool
     */
    private $pjAcompleter;

    /**
     * @var bool
     */
    private $pjComplete;

    /**
     * @var bool
     */
    private $afficherEdition;

    /**
     * @var bool
     */
    private $afficherValidationCabinet;

    /**
     * @var bool
     */
    private $afficherReactiver;

    /**
     * @var string
     */
    private $statutProposition;

    /**
     * @var string
     */
    private $emailClient;

    /**
     * @var string
     */
    private $modeReglement;

    /**
     * @var string
     */
    private $versionProduit;

    /**
     * @var bool
     */
    private $transfertBanque;

    /**
     * @var bool
     */
    private $estPersonneMorale;

    public function getTotalSupports(): int
    {
        return $this->totalSupports;
    }

    public function setTotalSupports(int $totalSupports): ListProjetItem
    {
        $this->totalSupports = $totalSupports;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): ListProjetItem
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): ListProjetItem
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): ListProjetItem
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getProduit(): string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): ListProjetItem
    {
        $this->produit = $produit;

        return $this;
    }

    public function getNumeroDeSouscription(): string
    {
        return $this->numeroDeSouscription;
    }

    public function setNumeroDeSouscription(string $numeroDeSouscription): ListProjetItem
    {
        $this->numeroDeSouscription = $numeroDeSouscription;

        return $this;
    }

    public function getMontant(): string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): ListProjetItem
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): ListProjetItem
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): DonneesReferencesDto
    {
        return $this->status;
    }

    public function setStatus(DonneesReferencesDto $status): ListProjetItem
    {
        $this->status = $status;

        return $this;
    }

    public function isSigneElectroniquement(): bool
    {
        return $this->signeElectroniquement;
    }

    public function setSigneElectroniquement(bool $signeElectroniquement): ListProjetItem
    {
        $this->signeElectroniquement = $signeElectroniquement;

        return $this;
    }

    public function isPdfAEditer(): bool
    {
        return $this->pdfAEditer;
    }

    public function setPdfAEditer(bool $pdfAEditer): ListProjetItem
    {
        $this->pdfAEditer = $pdfAEditer;

        return $this;
    }

    public function isSigne(): bool
    {
        return $this->signe;
    }

    public function setSigne(bool $signe): ListProjetItem
    {
        $this->signe = $signe;

        return $this;
    }

    public function isAfficherAbandonner(): bool
    {
        return $this->afficherAbandonner;
    }

    public function setAfficherAbandonner(bool $afficherAbandonner): ListProjetItem
    {
        $this->afficherAbandonner = $afficherAbandonner;

        return $this;
    }

    public function isAfficherAcquitter(): bool
    {
        return $this->afficherAcquitter;
    }

    public function setAfficherAcquitter(bool $afficherAcquitter): ListProjetItem
    {
        $this->afficherAcquitter = $afficherAcquitter;

        return $this;
    }

    public function isAbandonnerEtClonerProjet(): bool
    {
        return $this->abandonnerEtClonerProjet;
    }

    public function setAbandonnerEtClonerProjet(bool $abandonnerEtClonerProjet): ListProjetItem
    {
        $this->abandonnerEtClonerProjet = $abandonnerEtClonerProjet;

        return $this;
    }

    public function isAffaireAbandonner(): bool
    {
        return $this->affaireAbandonner;
    }

    public function setAffaireAbandonner(bool $affaireAbandonner): ListProjetItem
    {
        $this->affaireAbandonner = $affaireAbandonner;

        return $this;
    }

    public function isClonable(): bool
    {
        return $this->clonable;
    }

    public function setClonable(bool $clonable): ListProjetItem
    {
        $this->clonable = $clonable;

        return $this;
    }

    public function isEstObjectifInvestissementInactif(): bool
    {
        return $this->estObjectifInvestissementInactif;
    }

    public function setEstObjectifInvestissementInactif(bool $estObjectifInvestissementInactif): ListProjetItem
    {
        $this->estObjectifInvestissementInactif = $estObjectifInvestissementInactif;

        return $this;
    }

    public function isEstTypesCompatiblesAvecModeElectronique(): bool
    {
        return $this->estTypesCompatiblesAvecModeElectronique;
    }

    public function setEstTypesCompatiblesAvecModeElectronique(bool $estTypesCompatiblesAvecModeElectronique): ListProjetItem
    {
        $this->estTypesCompatiblesAvecModeElectronique = $estTypesCompatiblesAvecModeElectronique;

        return $this;
    }

    public function isPjAcompleter(): bool
    {
        return $this->pjAcompleter;
    }

    public function setPjAcompleter(bool $pjAcompleter): ListProjetItem
    {
        $this->pjAcompleter = $pjAcompleter;

        return $this;
    }

    public function isPjComplete(): bool
    {
        return $this->pjComplete;
    }

    public function setPjComplete(bool $pjComplete): ListProjetItem
    {
        $this->pjComplete = $pjComplete;

        return $this;
    }

    public function isAfficherEdition(): bool
    {
        return $this->afficherEdition;
    }

    public function setAfficherEdition(bool $afficherEdition): ListProjetItem
    {
        $this->afficherEdition = $afficherEdition;

        return $this;
    }

    public function isAfficherValidationCabinet(): bool
    {
        return $this->afficherValidationCabinet;
    }

    public function setAfficherValidationCabinet(bool $afficherValidationCabinet): ListProjetItem
    {
        $this->afficherValidationCabinet = $afficherValidationCabinet;

        return $this;
    }

    public function isAfficherReactiver(): bool
    {
        return $this->afficherReactiver;
    }

    public function setAfficherReactiver(bool $afficherReactiver): ListProjetItem
    {
        $this->afficherReactiver = $afficherReactiver;

        return $this;
    }

    public function getStatutProposition(): string
    {
        return $this->statutProposition;
    }

    public function setStatutProposition(string $statutProposition): ListProjetItem
    {
        $this->statutProposition = $statutProposition;

        return $this;
    }

    public function getEmailClient(): string
    {
        return $this->emailClient;
    }

    public function setEmailClient(string $emailClient): ListProjetItem
    {
        $this->emailClient = $emailClient;

        return $this;
    }

    public function getModeReglement(): string
    {
        return $this->modeReglement;
    }

    public function setModeReglement(string $modeReglement): ListProjetItem
    {
        $this->modeReglement = $modeReglement;

        return $this;
    }

    public function getVersionProduit(): string
    {
        return $this->versionProduit;
    }

    public function setVersionProduit(string $versionProduit): ListProjetItem
    {
        $this->versionProduit = $versionProduit;

        return $this;
    }

    public function getTransfertBanque(): bool
    {
        return $this->transfertBanque;
    }

    public function setTransfertBanque(bool $transfertBanque): ListProjetItem
    {
        $this->transfertBanque = $transfertBanque;

        return $this;
    }

    public function isEstPersonneMorale(): bool
    {
        return $this->estPersonneMorale;
    }

    public function setEstPersonneMorale(bool $estPersonneMorale): ListProjetItem
    {
        $this->estPersonneMorale = $estPersonneMorale;

        return $this;
    }
}
