<?php

namespace Mpp\ApicilClientBundle\Model;

class ConnaissanceClientProjet
{
    /**
     * @var ClientDto|null
     */
    private $client;

    /**
     * @var string|null
     */
    private $commentaire;

    /**
     * @var ConjointDto|null
     */
    private $conjoint;

    /**
     * @var CoordonneesDto|null
     */
    private $coordonnees;

    /**
     * @var int|null
     */
    private $courtierId;

    /**
     * @var \DateTime|null
     */
    private $dateSignatureClient;

    /**
     * @var Foyer|null
     */
    private $foyer;

    /**
     * @var bool|null
     */
    private $professionSensible;

    /**
     * @var int|null
     */
    private $projetId;

    /**
     * @return ClientDto|null
     */
    public function getClient(): ?ClientDto
    {
        return $this->client;
    }

    /**
     * @param ClientDto|null $client
     *
     * @return self
     */
    public function setClient(?ClientDto $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    /**
     * @param string|null $commentaire
     *
     * @return self
     */
    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return ConjointDto|null
     */
    public function getConjoint(): ?ConjointDto
    {
        return $this->conjoint;
    }

    /**
     * @param ConjointDto|null $conjoint
     *
     * @return self
     */
    public function setConjoint(?ConjointDto $conjoint): self
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * @return CoordonneesDto|null
     */
    public function getCoordonnees(): ?CoordonneesDto
    {
        return $this->coordonnees;
    }

    /**
     * @param CoordonneesDto|null $coordonnees
     *
     * @return self
     */
    public function setCoordonnees(?CoordonneesDto $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

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
     * @return \DateTime|null
     */
    public function getDateSignatureClient(): ?\DateTime
    {
        return $this->dateSignatureClient;
    }

    /**
     * @param \DateTime|null $dateSignatureClient
     *
     * @return self
     */
    public function setDateSignatureClient(?\DateTime $dateSignatureClient): self
    {
        $this->dateSignatureClient = $dateSignatureClient;

        return $this;
    }

    /**
     * @return Foyer|null
     */
    public function getFoyer(): ?Foyer
    {
        return $this->foyer;
    }

    /**
     * @param Foyer|null $foyer
     *
     * @return self
     */
    public function setFoyer(?Foyer $foyer): self
    {
        $this->foyer = $foyer;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getProfessionSensible(): ?bool
    {
        return $this->professionSensible;
    }

    /**
     * @param bool|null $professionSensible
     *
     * @return self
     */
    public function setProfessionSensible(?bool $professionSensible): self
    {
        $this->professionSensible = $professionSensible;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProjetId(): ?int
    {
        return $this->projetId;
    }

    /**
     * @param int|null $projetId
     *
     * @return self
     */
    public function setProjetId(?int $projetId): self
    {
        $this->projetId = $projetId;

        return $this;
    }
}
