<?php

namespace Mpp\ApicilClientBundle\Model;

class ArbitrageAutomatiqueDto
{
    public const NIVEAU_NIVEAU_10 = 'NIVEAU_10';
    public const NIVEAU_NIVEAU_15 = 'NIVEAU_15';
    public const NIVEAU_NIVEAU_20 = 'NIVEAU_20';

    public const TYPE_SECURISATION_PLUS_VALUE = 'SECURISATION_PLUS_VALUE';
    public const TYPE_DYNAMISATION_DES_INTERETS = 'DYNAMISATION_DES_INTERETS';

    /**
     * @var string|null
     */
    private $niveau;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @return string|null
     */
    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    /**
     * @param string|null $niveau
     *
     * @return self
     */
    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
