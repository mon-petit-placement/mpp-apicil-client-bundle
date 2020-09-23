<?php

namespace Mpp\ApicilClientBundle\Model;

class ThematiqueDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var ProfilInvestissementDto|null
     */
    private $profilInvestissement;

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

    /**
     * @return ProfilInvestissementDto|null
     */
    public function getProfilInvestissement(): ?ProfilInvestissementDto
    {
        return $this->profilInvestissement;
    }

    /**
     * @param ProfilInvestissementDto|null $profilInvestissement
     *
     * @return self
     */
    public function setProfilInvestissement(?ProfilInvestissementDto $profilInvestissement): self
    {
        $this->profilInvestissement = $profilInvestissement;

        return $this;
    }
}
