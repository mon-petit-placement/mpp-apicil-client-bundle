<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ListContratCollectifsDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilCollectiveContractClientOptionResolver;

class ApicilCollectiveContractClient extends AbstractApicilClientDomain implements ApicilCollectiveContractClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function exportAll(array $options = [])
    {
        return $this->request('GET', '/csv', [
            'query' => ApicilCollectiveContractClientOptionResolver::resolveExportAllOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getAll(array $options = []): ListContratCollectifsDto
    {
        return $this->requestAndPopulate(ListContratCollectifsDto::class, 'GET', '', [
            'query' => ApicilCollectiveContractClientOptionResolver::resolveGetAllOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/contratscollectifs';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'collective_contract';
    }
}
