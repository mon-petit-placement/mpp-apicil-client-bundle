<?php

namespace Mpp\ApicilClientBundle\Model;

class DocumentMetadataDto
{
    public const DIRECTION_IN = 'ENTRANT';
    public const DIRECTION_OUT = 'SORTANT';

    /**
     * @var string|null
     */
    private $catDoc;

    /**
     * @var string|null
     */
    private $codeTypeDoc;

    /**
     * @var string|null
     */
    private $dateFinValidite;

    /**
     * @var string|null
     */
    private $dateNumerisation;

    /**
     * @var string|null
     */
    private $direction;

    /**
     * @var string|null
     */
    private $docId;

    /**
     * @var string|null
     */
    private $extension;

    /**
     * @var string|null
     */
    private $idAssure;

    /**
     * @var string|null
     */
    private $idTiers;

    /**
     * @var bool|null
     */
    private $isDocValid;

    /**
     * @var bool|null
     */
    private $isDocVisible;

    /**
     * @var string|null
     */
    private $labelCosy;

    /**
     * @var string|null
     */
    private $labelTypeDoc;

    /**
     * @var int|null
     */
    private $numContrat;

    /**
     * @var string|null
     */
    private $numDemandeCosy;

    /**
     * @var string|null
     */
    private $sousCategorieDocument;

    /**
     * @return string|null
     */
    public function getCatDoc(): ?string
    {
        return $this->catDoc;
    }

    /**
     * @param string|null $catDoc
     *
     * @return self
     */
    public function setCatDoc(?string $catDoc): self
    {
        $this->catDoc = $catDoc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeTypeDoc(): ?string
    {
        return $this->codeTypeDoc;
    }

    /**
     * @param string|null $codeTypeDoc
     *
     * @return self
     */
    public function setCodeTypeDoc(?string $codeTypeDoc): self
    {
        $this->codeTypeDoc = $codeTypeDoc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateFinValidite(): ?string
    {
        return $this->dateFinValidite;
    }

    /**
     * @param string|null $dateFinValidite
     *
     * @return self
     */
    public function setDateFinValidite(?string $dateFinValidite): self
    {
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateNumerisation(): ?string
    {
        return $this->dateNumerisation;
    }

    /**
     * @param string|null $dateNumerisation
     *
     * @return self
     */
    public function setDateNumerisation(?string $dateNumerisation): self
    {
        $this->dateNumerisation = $dateNumerisation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocId(): ?string
    {
        return $this->docId;
    }

    /**
     * @param string|null $docId
     *
     * @return self
     */
    public function setDocId(?string $docId): self
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdAssure(): ?string
    {
        return $this->idAssure;
    }

    /**
     * @param string|null $idAssure
     *
     * @return self
     */
    public function setIdAssure(?string $idAssure): self
    {
        $this->idAssure = $idAssure;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdTiers(): ?string
    {
        return $this->idTiers;
    }

    /**
     * @param string|null $idTiers
     *
     * @return self
     */
    public function setIdTiers(?string $idTiers): self
    {
        $this->idTiers = $idTiers;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsDocValid(): ?bool
    {
        return $this->isDocValid;
    }

    /**
     * @param bool|null $isDocValid
     *
     * @return self
     */
    public function setIsDocValid(?bool $isDocValid): self
    {
        $this->isDocValid = $isDocValid;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsDocVisible(): ?bool
    {
        return $this->isDocVisible;
    }

    /**
     * @param bool|null $isDocVisible
     *
     * @return self
     */
    public function setIsDocVisible(?bool $isDocVisible): self
    {
        $this->isDocVisible = $isDocVisible;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabelCosy(): ?string
    {
        return $this->labelCosy;
    }

    /**
     * @param string|null $labelCosy
     *
     * @return self
     */
    public function setLabelCosy(?string $labelCosy): self
    {
        $this->labelCosy = $labelCosy;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabelTypeDoc(): ?string
    {
        return $this->labelTypeDoc;
    }

    /**
     * @param string|null $labelTypeDoc
     *
     * @return self
     */
    public function setLabelTypeDoc(?string $labelTypeDoc): self
    {
        $this->labelTypeDoc = $labelTypeDoc;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumContrat(): ?int
    {
        return $this->numContrat;
    }

    /**
     * @param int|null $numContrat
     *
     * @return self
     */
    public function setNumContrat(?int $numContrat): self
    {
        $this->numContrat = $numContrat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumDemandeCosy(): ?string
    {
        return $this->numDemandeCosy;
    }

    /**
     * @param string|null $numDemandeCosy
     *
     * @return self
     */
    public function setNumDemandeCosy(?string $numDemandeCosy): self
    {
        $this->numDemandeCosy = $numDemandeCosy;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSousCategorieDocument(): ?string
    {
        return $this->sousCategorieDocument;
    }

    /**
     * @param string|null $sousCategorieDocument
     *
     * @return self
     */
    public function setSousCategorieDocument(?string $sousCategorieDocument): self
    {
        $this->sousCategorieDocument = $sousCategorieDocument;

        return $this;
    }
}
