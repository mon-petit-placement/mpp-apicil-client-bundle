<?php

namespace Mpp\ApicilClientBundle\Model;

class ActeDocumentDto
{
    const NON_TRANSMIS = 'NON_TRANSMIS';
    const VALIDE_KO = 'VALIDE_KO';
    const VALIDE_AUTO = 'VALIDE_AUTO';
    const TRANSMIS = 'TRANSMIS';
    const SIGNE = 'SIGNE';
    const NUL = 'NUL';

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var array|null
     */
    private $documentInstanceDtos;

    /**
     * @var string|null
     */
    private $libelleTypeDuDocument;

    /**
     * @var int|null
     */
    private $max;

    /**
     * @var int|null
     */
    private $min;

    /**
     * @var string|null
     */
    private $typeDuDocument;

    /**
     * @var int|null
     */
    private $nombreTentative;

    /**
     * @var string|null
     */
    private $statut;

    /**
     * @var bool|null
     */
    private $verificationAutomatique;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDocumentInstanceDtos(): ?array
    {
        return $this->documentInstanceDtos;
    }

    /**
     * @param array|null $documentInstanceDtos
     *
     * @return self
     */
    public function setDocumentInstanceDtos(?array $documentInstanceDtos): self
    {
        $this->documentInstanceDtos = $documentInstanceDtos;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelleTypeDuDocument(): ?string
    {
        return $this->libelleTypeDuDocument;
    }

    /**
     * @param string|null $libelleTypeDuDocument
     *
     * @return self
     */
    public function setLibelleTypeDuDocument(?string $libelleTypeDuDocument): self
    {
        $this->libelleTypeDuDocument = $libelleTypeDuDocument;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int|null $max
     *
     * @return self
     */
    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @param int|null $min
     *
     * @return self
     */
    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeDuDocument(): ?string
    {
        return $this->typeDuDocument;
    }

    /**
     * @param string|null $typeDuDocument
     *
     * @return self
     */
    public function setTypeDuDocument(?string $typeDuDocument): self
    {
        $this->typeDuDocument = $typeDuDocument;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombreTentative(): ?int
    {
        return $this->nombreTentative;
    }

    /**
     * @param int|null $nombreTentative
     *
     * @return ActeDocumentDto
     */
    public function setNombreTentative(?int $nombreTentative): ActeDocumentDto
    {
        $this->nombreTentative = $nombreTentative;

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
     * @return ActeDocumentDto
     */
    public function setStatut(?string $statut): ActeDocumentDto
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getVerificationAutomatique(): ?bool
    {
        return $this->verificationAutomatique;
    }

    /**
     * @param bool|null $verificationAutomatique
     *
     * @return ActeDocumentDto
     */
    public function setVerificationAutomatique(?bool $verificationAutomatique): ActeDocumentDto
    {
        $this->verificationAutomatique = $verificationAutomatique;

        return $this;
    }
}
