<?php

namespace Mpp\ApicilClientBundle\Model;

class SupportContratDto
{
    public const TYPESUPPORT_FONDS_EURO = 'FONDS_EURO';
    public const TYPESUPPORT_SCPI = 'SCPI';
    public const TYPESUPPORT_PRODUIT_STRUCTURE = 'PRODUIT_STRUCTURE';
    public const TYPESUPPORT_OPC = 'OPC';
    public const TYPESUPPORT_AUTRE = 'AUTRE';
    public const TYPESUPPORT_OPC_AUTRE = 'OPC_AUTRE';

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var bool|null
     */
    private $desinvestissement;

    /**
     * @var bool|null
     */
    private $fondsEuroSpecifique;

    /**
     * @var bool|null
     */
    private $investissement;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var bool|null
     */
    private $lienDic;

    /**
     * @var float|null
     */
    private $nombreDeParts;

    /**
     * @var float|null
     */
    private $performance;

    /**
     * @var float|null
     */
    private $repartition;

    /**
     * @var int|null
     */
    private $risque;

    /**
     * @var bool|null
     */
    private $specifique;

    /**
     * @var string|null
     */
    private $typeSupport;

    /**
     * @var string|null
     */
    private $urlExterne;

    /**
     * @var float|null
     */
    private $valeurAchat;

    /**
     * @var float|null
     */
    private $valeurActuelle;

    /**
     * @var float|null
     */
    private $valorisation;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDesinvestissement(): ?bool
    {
        return $this->desinvestissement;
    }

    /**
     * @param bool|null $desinvestissement
     *
     * @return self
     */
    public function setDesinvestissement(?bool $desinvestissement): self
    {
        $this->desinvestissement = $desinvestissement;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFondsEuroSpecifique(): ?bool
    {
        return $this->fondsEuroSpecifique;
    }

    /**
     * @param bool|null $fondsEuroSpecifique
     *
     * @return self
     */
    public function setFondsEuroSpecifique(?bool $fondsEuroSpecifique): self
    {
        $this->fondsEuroSpecifique = $fondsEuroSpecifique;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInvestissement(): ?bool
    {
        return $this->investissement;
    }

    /**
     * @param bool|null $investissement
     *
     * @return self
     */
    public function setInvestissement(?bool $investissement): self
    {
        $this->investissement = $investissement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     *
     * @return self
     */
    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLienDic(): ?bool
    {
        return $this->lienDic;
    }

    /**
     * @param bool|null $lienDic
     *
     * @return self
     */
    public function setLienDic(?bool $lienDic): self
    {
        $this->lienDic = $lienDic;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getNombreDeParts(): ?float
    {
        return $this->nombreDeParts;
    }

    /**
     * @param float|null $nombreDeParts
     *
     * @return self
     */
    public function setNombreDeParts(?float $nombreDeParts): self
    {
        $this->nombreDeParts = $nombreDeParts;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerformance(): ?float
    {
        return $this->performance;
    }

    /**
     * @param float|null $performance
     *
     * @return self
     */
    public function setPerformance(?float $performance): self
    {
        $this->performance = $performance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRepartition(): ?float
    {
        return $this->repartition;
    }

    /**
     * @param float|null $repartition
     *
     * @return self
     */
    public function setRepartition(?float $repartition): self
    {
        $this->repartition = $repartition;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRisque(): ?int
    {
        return $this->risque;
    }

    /**
     * @param int|null $risque
     *
     * @return self
     */
    public function setRisque(?int $risque): self
    {
        $this->risque = $risque;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSpecifique(): ?bool
    {
        return $this->specifique;
    }

    /**
     * @param bool|null $specifique
     *
     * @return self
     */
    public function setSpecifique(?bool $specifique): self
    {
        $this->specifique = $specifique;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeSupport(): ?string
    {
        return $this->typeSupport;
    }

    /**
     * @param string|null $typeSupport
     *
     * @return self
     */
    public function setTypeSupport(?string $typeSupport): self
    {
        $this->typeSupport = $typeSupport;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrlExterne(): ?string
    {
        return $this->urlExterne;
    }

    /**
     * @param string|null $urlExterne
     *
     * @return self
     */
    public function setUrlExterne(?string $urlExterne): self
    {
        $this->urlExterne = $urlExterne;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValeurAchat(): ?float
    {
        return $this->valeurAchat;
    }

    /**
     * @param float|null $valeurAchat
     *
     * @return self
     */
    public function setValeurAchat(?float $valeurAchat): self
    {
        $this->valeurAchat = $valeurAchat;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValeurActuelle(): ?float
    {
        return $this->valeurActuelle;
    }

    /**
     * @param float|null $valeurActuelle
     *
     * @return self
     */
    public function setValeurActuelle(?float $valeurActuelle): self
    {
        $this->valeurActuelle = $valeurActuelle;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorisation(): ?float
    {
        return $this->valorisation;
    }

    /**
     * @param float|null $valorisation
     *
     * @return self
     */
    public function setValorisation(?float $valorisation): self
    {
        $this->valorisation = $valorisation;

        return $this;
    }
}
