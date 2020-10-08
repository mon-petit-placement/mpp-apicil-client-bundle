<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\BasePreconisationDto;
use Mpp\ApicilClientBundle\Model\TrProfilAllocationAutoriseDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilPreconizationClientOptionResolver;

class ApicilPreconizationClient extends AbstractApicilClientDomain implements ApicilPreconizationClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function calculate(int $contractId, BasePreconisationDto $preconization): bool
    {
        $this->requestAndPopulate('bool', 'GET', sprintf('/%s/adequation', $contractId), [
            'body' => $this->serializer->serialize($preconization, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorizedAssetClassAllocation(int $contractId, array $options): array
    {
        $this->requestAndPopulate(sprintf('%s[]', TrProfilAllocationAutoriseDto::class), 'GET', sprintf('/%s/allocationClasseAutorise', $contractId), [
            'query' => ApicilPreconizationClientOptionResolver::resolveGetAuthorizedAssetClassAllocationOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/interne/preconisation/contrat';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'preconization';
    }
}
