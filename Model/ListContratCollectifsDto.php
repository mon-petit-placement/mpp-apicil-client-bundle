<?php

namespace Mpp\ApicilClientBundle\Model;

class ListContratCollectifsDto
{
    /**
     * @var array|null
     */
    private $contrats;

    /**
     * @var Pagination|null
     */
    private $pagination;

    /**
     * @return array|null
     */
    public function getContrats(): ?array
    {
        return $this->contrats;
    }

    /**
     * @param array|null $contrats
     *
     * @return self
     */
    public function setContrats(?array $contrats): self
    {
        $this->contrats = $contrats;

        return $this;
    }

    /**
     * @return Pagination|null
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @param Pagination|null $pagination
     *
     * @return self
     */
    public function setPagination(?Pagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
