<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilPreconizationClientOptionResolver
{
    public static function resolveGetAuthorizedAssetClassAllocationOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('codeHorizonInvestissement')->setAllowedTypes('codeHorizonInvestissement', ['string'])
        ;

        return $resolver->resolve($options);
    }
}
