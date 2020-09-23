<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Client\Model\ActeDocumentDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilTotalRepurchaseClientInterface
{
    /**
     * Retrieve total repurchase document.
     *
     * @method getDocument
     *
     * @param int $id
     * @param int $documentId
     *
     * @return File
     */
    public function getDocument(int $id, int $documentId): File;

    /**
     * Retrieve total repurchase documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return ActeDocumentDto
     */
    public function getDocuments(int $id): ActeDocumentDto;

    /**
     * Restart a total repurchase request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function restart(int $id, array $options);
}
