<?php

namespace Mpp\ApicilClientBundle\Model;

class ModeleDeVersementInitial
{
    public const MODEPAIEMENT_C = 'C';
    public const MODEPAIEMENT_P = 'P';
    public const MODEPAIEMENT_V = 'V';

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
     * @var array|null
     */
    private $portefeuille;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var float|null
     */
    private $tauxDerogatoire;

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
     * @return array|null
     */
    public function getPortefeuille(): ?array
    {
        return $this->portefeuille;
    }

    /**
     * @param array|null $portefeuille
     *
     * @return self
     */
    public function setPortefeuille(?array $portefeuille): self
    {
        $this->portefeuille = $portefeuille;

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
     * @return float|null
     */
    public function getTauxDerogatoire(): ?float
    {
        return $this->tauxDerogatoire;
    }

    /**
     * @param float|null $tauxDerogatoire
     *
     * @return self
     */
    public function setTauxDerogatoire(?float $tauxDerogatoire): self
    {
        $this->tauxDerogatoire = $tauxDerogatoire;

        return $this;
    }
}
