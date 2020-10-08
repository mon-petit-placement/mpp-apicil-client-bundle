<?php

namespace Mpp\ApicilClientBundle\Model;

class InformationsPPEConjointDto
{
    /**
     * @var FonctionPPEDto|null
     */
    private $fonction;

    /**
     * @var PaysDto|null
     */
    private $paysExerce;

    /**
     * @var string|null
     */
    private $ppeFonctionAutre;

    /**
     * @return FonctionPPEDto|null
     */
    public function getFonction(): ?FonctionPPEDto
    {
        return $this->fonction;
    }

    /**
     * @param FonctionPPEDto|null $fonction
     *
     * @return self
     */
    public function setFonction(?FonctionPPEDto $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return PaysDto|null
     */
    public function getPaysExerce(): ?PaysDto
    {
        return $this->paysExerce;
    }

    /**
     * @param PaysDto|null $paysExerce
     *
     * @return self
     */
    public function setPaysExerce(?PaysDto $paysExerce): self
    {
        $this->paysExerce = $paysExerce;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPpeFonctionAutre(): ?string
    {
        return $this->ppeFonctionAutre;
    }

    /**
     * @param string|null $ppeFonctionAutre
     *
     * @return self
     */
    public function setPpeFonctionAutre(?string $ppeFonctionAutre): self
    {
        $this->ppeFonctionAutre = $ppeFonctionAutre;

        return $this;
    }
}
