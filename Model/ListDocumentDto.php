<?php

namespace Mpp\ApicilClientBundle\Model;

class ListDocumentDto
{
    /**
     * @var ActeDocumentDto[]|null
     */
    private $documentDtos;

    /**
     * @return ActeDocumentDto[]|null
     */
    public function getDocumentDtos(): ?array
    {
        return $this->documentDtos;
    }

    /**
     * @param ActeDocumentDto[]|null $documentDtos
     *
     * @return ListDocumentDto
     */
    public function setDocumentDtos(?array $documentDtos): ListDocumentDto
    {
        $this->documentDtos = $documentDtos;
        return $this;
    }
}
