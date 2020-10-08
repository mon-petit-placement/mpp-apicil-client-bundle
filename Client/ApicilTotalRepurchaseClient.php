<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Client\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilTotalRepurchaseClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilTotalRepurchaseClient extends AbstractApicilClientDomain implements ApicilTotalRepurchaseClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDocument(int $id, int $documentId): File
    {
        return $this->download('GET', sprintf('/%s/documents/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id): ActeDocumentDto
    {
        return $this->requestAndPopulate(ActeDocumentDto::class, 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function restart(int $id, array $options)
    {
        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => ApicilTotalRepurchaseClientOptionResolver::resolveRestartOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'total_repurchase';
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/rachattotal';
    }
}
