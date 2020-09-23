<?php

namespace Mpp\ApicilClientBundle\Model;

class ActeDocumentDto
{
    /**
     * @var string|null
     */
    private $description;

    /**
     * @var array|null
     */
    private $documentInstanceDtos;

    /**
     * @var string|null
     */
    private $libelleTypeDuDocument;

    /**
     * @var int|null
     */
    private $max;

    /**
     * @var int|null
     */
    private $min;

    /**
     * @var string|null
     */
    private $typeDuDocument;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDocumentInstanceDtos(): ?array
    {
        return $this->documentInstanceDtos;
    }

    /**
     * @param array|null $documentInstanceDtos
     *
     * @return self
     */
    public function setDocumentInstanceDtos(?array $documentInstanceDtos): self
    {
        $this->documentInstanceDtos = $documentInstanceDtos;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelleTypeDuDocument(): ?string
    {
        return $this->libelleTypeDuDocument;
    }

    /**
     * @param string|null $libelleTypeDuDocument
     *
     * @return self
     */
    public function setLibelleTypeDuDocument(?string $libelleTypeDuDocument): self
    {
        $this->libelleTypeDuDocument = $libelleTypeDuDocument;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int|null $max
     *
     * @return self
     */
    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @param int|null $min
     *
     * @return self
     */
    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeDuDocument(): ?string
    {
        return $this->typeDuDocument;
    }

    /**
     * @param string|null $typeDuDocument
     *
     * @return self
     */
    public function setTypeDuDocument(?string $typeDuDocument): self
    {
        $this->typeDuDocument = $typeDuDocument;

        return $this;
    }
}
