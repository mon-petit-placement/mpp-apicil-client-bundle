<?php

namespace Mpp\ApicilClientBundle\Model;

class QuestionnaireStructuresReponses
{
    /**
     * @var string|null
     */
    private $isinCode;

    /**
     * @var array|null
     */
    private $reponses;

    /**
     * @return string|null
     */
    public function getIsinCode(): ?string
    {
        return $this->isinCode;
    }

    /**
     * @param string|null $isinCode
     *
     * @return self
     */
    public function setIsinCode(?string $isinCode): self
    {
        $this->isinCode = $isinCode;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReponses(): ?array
    {
        return $this->reponses;
    }

    /**
     * @param array|null $reponses
     *
     * @return self
     */
    public function setReponses(?array $reponses): self
    {
        $this->reponses = $reponses;

        return $this;
    }
}
