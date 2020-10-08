<?php

namespace Mpp\ApicilClientBundle\Model;

class SousCategorieDocumentDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $codeCategorie;

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var string|null
     */
    private $libelleCategorie;

    /**
     * @var SousCategorieDocumentDto|null
     */
    private $parent;

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
    public function getCodeCategorie(): ?string
    {
        return $this->codeCategorie;
    }

    /**
     * @param string|null $codeCategorie
     *
     * @return self
     */
    public function setCodeCategorie(?string $codeCategorie): self
    {
        $this->codeCategorie = $codeCategorie;

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
     * @return string|null
     */
    public function getLibelleCategorie(): ?string
    {
        return $this->libelleCategorie;
    }

    /**
     * @param string|null $libelleCategorie
     *
     * @return self
     */
    public function setLibelleCategorie(?string $libelleCategorie): self
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * @return SousCategorieDocumentDto|null
     */
    public function getParent(): ?SousCategorieDocumentDto
    {
        return $this->parent;
    }

    /**
     * @param SousCategorieDocumentDto|null $parent
     *
     * @return self
     */
    public function setParent(?SousCategorieDocumentDto $parent): self
    {
        $this->parent = $parent;

        return $this;
    }
}
