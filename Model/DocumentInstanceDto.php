<?php

namespace Mpp\ApicilClientBundle\Model;

class DocumentInstanceDto
{
    /**
     * @var int|null
     */
    private $documentId;

    /**
     * @var string|null
     */
    private $nomDuDocument;

    /**
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }

    /**
     * @param int|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?int $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomDuDocument(): ?string
    {
        return $this->nomDuDocument;
    }

    /**
     * @param string|null $nomDuDocument
     *
     * @return self
     */
    public function setNomDuDocument(?string $nomDuDocument): self
    {
        $this->nomDuDocument = $nomDuDocument;

        return $this;
    }
}
