<?php

namespace Mpp\ApicilClientBundle\Model;

class ModeGestionDto
{
    /**
     * @var DonneesReferencesDto|null
     */
    private $type;

    /**
     * @return DonneesReferencesDto|null
     */
    public function getType(): ?DonneesReferencesDto
    {
        return $this->type;
    }

    /**
     * @param string|null $mention
     *
     * @return self
     */
    public function setType(?DonneesReferencesDto $type): self
    {
        $this->type = $type;

        return $this;
    }
}
