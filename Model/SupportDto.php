<?php

namespace Mpp\ApicilClientBundle\Model;

class SupportDto
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
    private $fondsEuroSpecifique;

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
