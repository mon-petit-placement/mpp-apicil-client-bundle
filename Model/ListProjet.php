<?php

namespace Mpp\ApicilClientBundle\Model;

class ListProjet
{
    /**
     * @var int
     */
    private $totalProjets;

    /**
     * @var ListProjetItem[]
     */
    private $projets;

    public function getTotalProjets(): int
    {
        return $this->totalProjets;
    }

    public function setTotalProjets(int $totalProjets): ListProjet
    {
        $this->totalProjets = $totalProjets;
        return $this;
    }

    public function getProjets(): array
    {
        return $this->projets;
    }

    public function setProjets(array $projets): ListProjet
    {
        $this->projets = $projets;
        return $this;
    }
}
