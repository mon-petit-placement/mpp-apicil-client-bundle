<?php

namespace Mpp\ApicilClientBundle\Model;

class TrClasseActifDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $codeColeur;

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
    public function getCodeColeur(): ?string
    {
        return $this->codeColeur;
    }

    /**
     * @param string|null $codeColeur
     *
     * @return self
     */
    public function setCodeColeur(?string $codeColeur): self
    {
        $this->codeColeur = $codeColeur;

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
