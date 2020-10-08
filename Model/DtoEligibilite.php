<?php

namespace Mpp\ApicilClientBundle\Model;

class DtoEligibilite
{
    /**
     * @var int|null
     */
    private $code;

    /**
     * @var bool|null
     */
    private $eligible;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $messageConnaissanceClient;

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEligible(): ?bool
    {
        return $this->eligible;
    }

    /**
     * @param bool|null $eligible
     *
     * @return self
     */
    public function setEligible(?bool $eligible): self
    {
        $this->eligible = $eligible;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageConnaissanceClient(): ?string
    {
        return $this->messageConnaissanceClient;
    }

    /**
     * @param string|null $messageConnaissanceClient
     *
     * @return self
     */
    public function setMessageConnaissanceClient(?string $messageConnaissanceClient): self
    {
        $this->messageConnaissanceClient = $messageConnaissanceClient;

        return $this;
    }
}
