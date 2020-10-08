<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\CompteTitreDto;

interface ApicilTradingAccountClientInterface
{
    /**
     * Retrieve the details of a trading account for a contract (excluding history and customer knowledge).
     *
     * @method getByContract
     *
     * @param int $contractId
     *
     * @return CompteTitreDto
     */
    public function getByContract(int $contractId): CompteTitreDto;
}
