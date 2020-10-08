<?php

namespace Mpp\ApicilClientBundle\Model;

class ReponseClientHorsMursDto
{
    /**
     * @var int|null
     */
    private $idContrat;

    /**
     * @var int|null
     */
    private $idOperation;

    /**
     * @return int|null
     */
    public function getIdContrat(): ?int
    {
        return $this->idContrat;
    }

    /**
     * @param int|null $idContrat
     *
     * @return self
     */
    public function setIdContrat(?int $idContrat): self
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdOperation(): ?int
    {
        return $this->idOperation;
    }

    /**
     * @param int|null $idOperation
     *
     * @return self
     */
    public function setIdOperation(?int $idOperation): self
    {
        $this->idOperation = $idOperation;

        return $this;
    }
}
