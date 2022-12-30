<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ModeGestionDto;
use Mpp\ApicilClientBundle\Model\QuestionSupportStructureDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilProductClientInterface
{
    /**
     * Retrieve the product DIC by its reference.
     *
     * @method getDic
     *
     * @param string $reference
     * @param array  $options
     *
     * @return File
     */
    public function getDic(string $reference, array $options = []): File;

    /**
     * Retrieve the gestion modes accessible from a contract by a product reference and its id.
     *
     * @method getContractGestionModes
     *
     * @param string $productReference
     * @param int    $contractId
     * @param array  $options
     *
     * @return array<ModeGestionDto>
     */
    public function getContractGestionModes(string $reference, int $contractId, array $options = []): array;

    /**
     * Retrieve the gestion modes accessible from a product by its reference.
     *
     * @method getGestionModes
     *
     * @param string $reference
     * @param array  $options
     *
     * @return array<ModeGestionDto>
     */
    public function getGestionModes(string $reference, array $options = []): array;

    /**
     * Retrieve the list of questions linked to a structured support for a product.
     *
     * @method getSupportQuestions
     *
     * @param string $reference
     * @param string $isin
     *
     * @return array<QuestionSupportStructureDto>
     */
    public function getSupportQuestions(string $reference, string $isin): array;
}
