<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ModeGestionDto;
use Mpp\ApicilClientBundle\Model\QuestionSupportStructureDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilProductClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilProductClient extends AbstractApicilClientDomain implements ApicilProductClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDic(string $reference, array $options = []): File
    {
        $this->request('GET', sprintf('/%s/dic', $reference), [
            'query' => ApicilProductClientOptionResolver::resolveGetDicOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getContractGestionModes(string $reference, int $contractId, array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ModeGestionDto::class), 'GET', sprintf('/%s/modegestion/%s', $reference, $contractId), [
            'query' => ApicilProductClientOptionResolver::resolveGetContractGestionModesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getGestionModes(string $reference, array $options = []): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ModeGestionDto::class), 'GET', sprintf('/%s/modegestion', $reference), [
            'query' => ApicilProductClientOptionResolver::resolveGetGestionModesOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportQuestions(string $reference, string $isin): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', QuestionSupportStructureDto::class), 'GET', sprintf('/%s/support/%s/questions', $reference, $isin));
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/produit';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'product';
    }
}
