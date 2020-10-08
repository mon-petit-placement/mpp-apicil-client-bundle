<?php

namespace Mpp\ApicilClientBundle\Model;

class ProfilInvestissementDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $descriptif;

    /**
     * @var bool|null
     */
    private $favori;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $libelle;

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
     * @return string|null
     */
    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    /**
     * @param string|null $descriptif
     *
     * @return self
     */
    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFavori(): ?bool
    {
        return $this->favori;
    }

    /**
     * @param bool|null $favori
     *
     * @return self
     */
    public function setFavori(?bool $favori): self
    {
        $this->favori = $favori;

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
}
