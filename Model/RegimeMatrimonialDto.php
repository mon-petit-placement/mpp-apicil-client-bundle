<?php

namespace Mpp\ApicilClientBundle\Model;

class RegimeMatrimonialDto
{
    /**
     * @var string|null
     */
    private $code;

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
}
