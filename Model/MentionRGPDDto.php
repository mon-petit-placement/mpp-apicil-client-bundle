<?php

namespace Mpp\ApicilClientBundle\Model;

class MentionRGPDDto
{
    /**
     * @var string|null
     */
    private $mention;

    /**
     * @return string|null
     */
    public function getMention(): ?string
    {
        return $this->mention;
    }

    /**
     * @param string|null $mention
     *
     * @return self
     */
    public function setMention(?string $mention): self
    {
        $this->mention = $mention;

        return $this;
    }
}
