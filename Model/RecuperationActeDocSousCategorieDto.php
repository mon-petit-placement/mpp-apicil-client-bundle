<?php

namespace Mpp\ApicilClientBundle\Model;

class RecuperationActeDocSousCategorieDto
{
    /**
     * @var string|null
     */
    private $categorie;

    /**
     * @var string|null
     */
    private $fichier;

    /**
     * @var bool|null
     */
    private $obligatoire;

    /**
     * @return string|null
     */
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    /**
     * @param string|null $categorie
     *
     * @return self
     */
    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    /**
     * @param string|null $fichier
     *
     * @return self
     */
    public function setFichier(?string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getObligatoire(): ?bool
    {
        return $this->obligatoire;
    }

    /**
     * @param bool|null $obligatoire
     *
     * @return self
     */
    public function setObligatoire(?bool $obligatoire): self
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }
}
