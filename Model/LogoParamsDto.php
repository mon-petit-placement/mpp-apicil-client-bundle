<?php

namespace Mpp\ApicilClientBundle\Model;

class LogoParamsDto
{
    /**
     * @var string|null
     */
    private $extensions;

    /**
     * @var float|null
     */
    private $largeurmax;

    /**
     * @var float|null
     */
    private $tailleMax;

    /**
     * @return string|null
     */
    public function getExtensions(): ?string
    {
        return $this->extensions;
    }

    /**
     * @param string|null $extensions
     *
     * @return self
     */
    public function setExtensions(?string $extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLargeurmax(): ?float
    {
        return $this->largeurmax;
    }

    /**
     * @param float|null $largeurmax
     *
     * @return self
     */
    public function setLargeurmax(?float $largeurmax): self
    {
        $this->largeurmax = $largeurmax;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTailleMax(): ?float
    {
        return $this->tailleMax;
    }

    /**
     * @param float|null $tailleMax
     *
     * @return self
     */
    public function setTailleMax(?float $tailleMax): self
    {
        $this->tailleMax = $tailleMax;

        return $this;
    }
}
