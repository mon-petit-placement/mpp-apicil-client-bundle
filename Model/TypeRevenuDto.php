<?php

namespace Mpp\ApicilClientBundle\Model;

class TypeRevenuDto
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $infobulle;

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
    public function getInfobulle(): ?string
    {
        return $this->infobulle;
    }

    /**
     * @param string|null $infobulle
     *
     * @return self
     */
    public function setInfobulle(?string $infobulle): self
    {
        $this->infobulle = $infobulle;

        return $this;
    }
}
