<?php

namespace Mpp\ApicilClientBundle\Model;

class RepartitionReponseDto
{
    /**
     * @var string|null
     */
    private $codeIsinSupport;

    /**
     * @var float|null
     */
    private $pourcentage;

    /**
     * @return string|null
     */
    public function getCodeIsinSupport(): ?string
    {
        return $this->codeIsinSupport;
    }

    /**
     * @param string|null $codeIsinSupport
     *
     * @return self
     */
    public function setCodeIsinSupport(?string $codeIsinSupport): self
    {
        $this->codeIsinSupport = $codeIsinSupport;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    /**
     * @param float|null $pourcentage
     *
     * @return self
     */
    public function setPourcentage(?float $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
}
