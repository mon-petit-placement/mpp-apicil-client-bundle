<?php

namespace Mpp\ApicilClientBundle\Model;

class SupportDetailDto
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
    private $isinCode;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var bool|null
     */
    private $lienDic;

    /**
     * @var bool|null
     */
    private $lienFiche;

    /**
     * @var string|null
     */
    private $nomSupport;

    /**
     * @var string|null
     */
    private $notation;

    /**
     * @var float|null
     */
    private $perf1a;

    /**
     * @var float|null
     */
    private $perf3a;

    /**
     * @var float|null
     */
    private $perf5a;

    /**
     * @var float|null
     */
    private $perfYtd;

    /**
     * @var array|null
     */
    private $rendementSupport;

    /**
     * @var int|null
     */
    private $risque;

    /**
     * @var string|null
     */
    private $societe;

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
     * @return string|null
     */
    public function getIsinCode(): ?string
    {
        return $this->isinCode;
    }

    /**
     * @param string|null $isinCode
     *
     * @return self
     */
    public function setIsinCode(?string $isinCode): self
    {
        $this->isinCode = $isinCode;

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
     * @return bool|null
     */
    public function getLienFiche(): ?bool
    {
        return $this->lienFiche;
    }

    /**
     * @param bool|null $lienFiche
     *
     * @return self
     */
    public function setLienFiche(?bool $lienFiche): self
    {
        $this->lienFiche = $lienFiche;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomSupport(): ?string
    {
        return $this->nomSupport;
    }

    /**
     * @param string|null $nomSupport
     *
     * @return self
     */
    public function setNomSupport(?string $nomSupport): self
    {
        $this->nomSupport = $nomSupport;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotation(): ?string
    {
        return $this->notation;
    }

    /**
     * @param string|null $notation
     *
     * @return self
     */
    public function setNotation(?string $notation): self
    {
        $this->notation = $notation;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerf1a(): ?float
    {
        return $this->perf1a;
    }

    /**
     * @param float|null $perf1a
     *
     * @return self
     */
    public function setPerf1a(?float $perf1a): self
    {
        $this->perf1a = $perf1a;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerf3a(): ?float
    {
        return $this->perf3a;
    }

    /**
     * @param float|null $perf3a
     *
     * @return self
     */
    public function setPerf3a(?float $perf3a): self
    {
        $this->perf3a = $perf3a;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerf5a(): ?float
    {
        return $this->perf5a;
    }

    /**
     * @param float|null $perf5a
     *
     * @return self
     */
    public function setPerf5a(?float $perf5a): self
    {
        $this->perf5a = $perf5a;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerfYtd(): ?float
    {
        return $this->perfYtd;
    }

    /**
     * @param float|null $perfYtd
     *
     * @return self
     */
    public function setPerfYtd(?float $perfYtd): self
    {
        $this->perfYtd = $perfYtd;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRendementSupport(): ?array
    {
        return $this->rendementSupport;
    }

    /**
     * @param array|null $rendementSupport
     *
     * @return self
     */
    public function setRendementSupport(?array $rendementSupport): self
    {
        $this->rendementSupport = $rendementSupport;

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
     * @return string|null
     */
    public function getSociete(): ?string
    {
        return $this->societe;
    }

    /**
     * @param string|null $societe
     *
     * @return self
     */
    public function setSociete(?string $societe): self
    {
        $this->societe = $societe;

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
}
