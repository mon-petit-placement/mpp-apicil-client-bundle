<?php

namespace Mpp\ApicilClientBundle\Model;

use Mpp\ApicilClientBundle\Exception\ApicilApiException;

class ApicilApiError
{
    /**
     * @var int|null
     */
    protected $code;

    /**
     * @var int|null
     */
    protected $errorCode;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array
     */
    protected $errors = [];

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
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int|null $errorCode
     *
     * @return self
     */
    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;

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
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function getException(): ApicilApiException
    {
        return new ApicilApiException($this);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $code = $this->getCode() ?: $this->getErrorCode();

        if (0 === count($this->getErrors())) {
            return sprintf('[%d] %s', $code, $this->getMessage());
        }

        $message = sprintf('[%d] %d errors found:', $code, count($this->getErrors()));

        foreach ($this->getErrors() as $key => $error) {
            $message .= "\n$key: $error";
        }

        return $message;
    }
}
