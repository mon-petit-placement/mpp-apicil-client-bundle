<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\BasePreconisationDto;
use Mpp\ApicilClientBundle\Model\TrProfilAllocationAutoriseDto;

interface ApicilPreconizationClientInterface
{
    /**
     * Calculate the adequacy of the client's advisor's recommendation with the new wallet allocation.
     *
     * @method calculate
     *
     * @param int                  $contractId
     * @param BasePreconisationDto $preconization
     *
     * @return bool
     */
    public function calculate(int $contractId, BasePreconisationDto $preconization): bool;

    /**
     * Retrieve authorized class alocation for a contract and an investment horizon.
     *
     * @method getAuthorizedAssetClassAllocation
     *
     * @param int   $contractId
     * @param array $options
     *
     * @return array<TrProfilAllocationAutoriseDto>
     */
    public function getAuthorizedAssetClassAllocation(int $contractId, array $options): array;
}
