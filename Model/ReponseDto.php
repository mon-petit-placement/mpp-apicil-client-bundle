<?php

namespace Mpp\ApicilClientBundle\Model;

class ReponseDto
{
    /**
     * @var string|null
     */
    private $questionCode;

    /**
     * @var int|null
     */
    private $reponse;

    /**
     * @return string|null
     */
    public function getQuestionCode(): ?string
    {
        return $this->questionCode;
    }

    /**
     * @param string|null $questionCode
     *
     * @return self
     */
    public function setQuestionCode(?string $questionCode): self
    {
        $this->questionCode = $questionCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getReponse(): ?int
    {
        return $this->reponse;
    }

    /**
     * @param int|null $reponse
     *
     * @return self
     */
    public function setReponse(?int $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
}
