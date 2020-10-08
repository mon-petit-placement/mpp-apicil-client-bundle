<?php

namespace Mpp\ApicilClientBundle\Model;

class NoteDto
{
    public const NOTESTATUT_OUVERT = 'OUVERT';
    public const NOTESTATUT_FERME = 'FERME';

    /**
     * @var int|null
     */
    private $contratId;

    /**
     * @var string|null
     */
    private $dateAjout;

    /**
     * @var string|null
     */
    private $dateFermeture;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $login;

    /**
     * @var string|null
     */
    private $noteStatut;

    /**
     * @var string|null
     */
    private $texte;

    /**
     * @return int|null
     */
    public function getContratId(): ?int
    {
        return $this->contratId;
    }

    /**
     * @param int|null $contratId
     *
     * @return self
     */
    public function setContratId(?int $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateAjout(): ?string
    {
        return $this->dateAjout;
    }

    /**
     * @param string|null $dateAjout
     *
     * @return self
     */
    public function setDateAjout(?string $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateFermeture(): ?string
    {
        return $this->dateFermeture;
    }

    /**
     * @param string|null $dateFermeture
     *
     * @return self
     */
    public function setDateFermeture(?string $dateFermeture): self
    {
        $this->dateFermeture = $dateFermeture;

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
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @param string|null $login
     *
     * @return self
     */
    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoteStatut(): ?string
    {
        return $this->noteStatut;
    }

    /**
     * @param string|null $noteStatut
     *
     * @return self
     */
    public function setNoteStatut(?string $noteStatut): self
    {
        $this->noteStatut = $noteStatut;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTexte(): ?string
    {
        return $this->texte;
    }

    /**
     * @param string|null $texte
     *
     * @return self
     */
    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }
}
