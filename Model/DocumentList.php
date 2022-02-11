<?php

namespace Mpp\ApicilClientBundle\Model;

class DocumentList extends DocumentPageWrapper
{
    /**
     * @return DocumentMetadataDto[]|null
     */
    public function getContent(): ?array
    {
        return parent::getContent();
    }
}