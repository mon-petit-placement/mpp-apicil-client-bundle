<?php

namespace Mpp\ApicilClientBundle\Model;

class EmailPropositionActeDto
{
    /**
     * @var string|null
     */
    private $contenu;

    /**
     * @var int|null
     */
    private $dureeValidite;

    /**
     * @var LogoParamsDto|null
     */
    private $logo;

    /**
     * @var bool|null
     */
    private $mailModifiable;

    /**
     * @var string|null
     */
    private $objet;

    /**
     * @var bool|null
     */
    private $vendeurEnCopie;

    /**
     * @return string|null
     */
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    /**
     * @param string|null $contenu
     *
     * @return self
     */
    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDureeValidite(): ?int
    {
        return $this->dureeValidite;
    }

    /**
     * @param int|null $dureeValidite
     *
     * @return self
     */
    public function setDureeValidite(?int $dureeValidite): self
    {
        $this->dureeValidite = $dureeValidite;

        return $this;
    }

    /**
     * @return LogoParamsDto|null
     */
    public function getLogo(): ?LogoParamsDto
    {
        return $this->logo;
    }

    /**
     * @param LogoParamsDto|null $logo
     *
     * @return self
     */
    public function setLogo(?LogoParamsDto $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMailModifiable(): ?bool
    {
        return $this->mailModifiable;
    }

    /**
     * @param bool|null $mailModifiable
     *
     * @return self
     */
    public function setMailModifiable(?bool $mailModifiable): self
    {
        $this->mailModifiable = $mailModifiable;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObjet(): ?string
    {
        return $this->objet;
    }

    /**
     * @param string|null $objet
     *
     * @return self
     */
    public function setObjet(?string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getVendeurEnCopie(): ?bool
    {
        return $this->vendeurEnCopie;
    }

    /**
     * @param bool|null $vendeurEnCopie
     *
     * @return self
     */
    public function setVendeurEnCopie(?bool $vendeurEnCopie): self
    {
        $this->vendeurEnCopie = $vendeurEnCopie;

        return $this;
    }
}
