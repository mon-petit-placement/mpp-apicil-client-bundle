<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\CompteTitreDto;

class ApicilTradingAccountClient extends AbstractApicilClientDomain implements ApicilTradingAccountClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function getByContract(int $contractId): CompteTitreDto
    {
        return $this->requestAndPopulate(CompteTitreDto::class, 'GET', sprintf('/%s', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'trading_account';
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/comptetitres';
    }
}
