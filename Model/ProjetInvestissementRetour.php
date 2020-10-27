<?php

namespace Mpp\ApicilClientBundle\Model;

class ProjetInvestissementRetour
{
    public const STATUT_A_COMPLETER = 'Pièces jointes à compléter';
    public const STATUT_AFFAIRES_ABANDONNEES = 'Affaires abandonnées';
    public const STATUT_CONTRAT_OUVERT = 'Contrat ouvert';
    public const STATUT_ELABORATION = 'Élaboration du projet';
    public const STATUT_TRAITEMENT_EN_COURS = 'Traitement du dossier chez l\'assureur';

    /**
     * @var ConnaissanceClient|null
     */
    private $connaissanceClient;

    /**
     * @var string|null
     */
    private $contratId;

    /**
     * @var int|null
     */
    private $courtierId;

    /**
     * @var Produit|null
     */
    private $produit;

    /**
     * @var ProfilGestionDto|null
     */
    private $profilGestion;

    /**
     * @var Souscription|null
     */
    private $souscription;

    /**
     * @var string|null
     */
    private $statut;

    /**
     * @var array|null
     */
    private $typesSouscription;

    /**
     * @return connaissanceClient|null
     */
    public function getConnaissanceClient(): ?connaissanceClient
    {
        return $this->connaissanceClient;
    }

    /**
     * @param connaissanceClient|null $connaissanceClient
     *
     * @return self
     */
    public function setConnaissanceClient(?connaissanceClient $connaissanceClient): self
    {
        $this->connaissanceClient = $connaissanceClient;

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
     * @param string|null $contratId
     *
     * @return self
     */
    public function setContratId(?string $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCourtierId(): ?int
    {
        return $this->courtierId;
    }

    /**
     * @param int|null $courtierId
     *
     * @return self
     */
    public function setCourtierId(?int $courtierId): self
    {
        $this->courtierId = $courtierId;

        return $this;
    }

    /**
     * @return produit|null
     */
    public function getProduit(): ?produit
    {
        return $this->produit;
    }

    /**
     * @param produit|null $produit
     *
     * @return self
     */
    public function setProduit(?produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * @return ProfilGestionDto|null
     */
    public function getProfilGestion(): ?ProfilGestionDto
    {
        return $this->profilGestion;
    }

    /**
     * @param ProfilGestionDto|null $profilGestion
     *
     * @return self
     */
    public function setProfilGestion(?ProfilGestionDto $profilGestion): self
    {
        $this->profilGestion = $profilGestion;

        return $this;
    }

    /**
     * @return souscription|null
     */
    public function getSouscription(): ?souscription
    {
        return $this->souscription;
    }

    /**
     * @param souscription|null $souscription
     *
     * @return self
     */
    public function setSouscription(?souscription $souscription): self
    {
        $this->souscription = $souscription;

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
     * @return array|null
     */
    public function getTypesSouscription(): ?array
    {
        return $this->typesSouscription;
    }

    /**
     * @param array|null $typesSouscription
     *
     * @return self
     */
    public function setTypesSouscription(?array $typesSouscription): self
    {
        $this->typesSouscription = $typesSouscription;

        return $this;
    }
}
