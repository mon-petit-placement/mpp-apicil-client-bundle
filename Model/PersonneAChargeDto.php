<?php

namespace Mpp\ApicilClientBundle\Model;

class PersonneAChargeDto
{
    /**
     * @var \DateTime|null
     */
    private $dateNaissance;

    /**
     * @var LienFamilialDto|null
     */
    private $lienFamilial;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @return \DateTime|null
     */
    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime|null $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(?\DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return LienFamilialDto|null
     */
    public function getLienFamilial(): ?LienFamilialDto
    {
        return $this->lienFamilial;
    }

    /**
     * @param LienFamilialDto|null $lienFamilial
     *
     * @return self
     */
    public function setLienFamilial(?LienFamilialDto $lienFamilial): self
    {
        $this->lienFamilial = $lienFamilial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     *
     * @return self
     */
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     *
     * @return self
     */
    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
