<?php

namespace Mpp\ApicilClientBundle\Model;

class ReponseGenererCodeSecuriteHorsMursDto
{
    /**
     * @var bool|null
     */
    private $estModeDateNaissanceActif;

    /**
     * @return bool|null
     */
    public function getEstModeDateNaissanceActif(): ?bool
    {
        return $this->estModeDateNaissanceActif;
    }

    /**
     * @param bool|null $estModeDateNaissanceActif
     *
     * @return self
     */
    public function setEstModeDateNaissanceActif(?bool $estModeDateNaissanceActif): self
    {
        $this->estModeDateNaissanceActif = $estModeDateNaissanceActif;

        return $this;
    }
}
