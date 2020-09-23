<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ListContratCollectifsDto;

interface ApicilCollectiveContractClientInterface
{
    /**
     * Export all collective contracts according to search criteria.
     *
     * @method exportAll
     *
     * @param array $options
     */
    public function exportAll(array $options = []);

    /**
     * Retrieve all collective contracts according to search criteria.
     *
     * @method getAll
     *
     * @param array $options
     *
     * @return ListContratCollectifsDto
     */
    public function getAll(array $options = []): ListContratCollectifsDto;
}
