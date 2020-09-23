<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilProductClientOptionResolver
{
    public static function resolveGetDicOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('contratId')->setAllowedTypes('contratId', ['int'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetContractGestionModesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('suggestionPF')->setAllowedTypes('suggestionPF', ['bool'])
            ->setDefined('courtierId')->setAllowedTypes('courtierId', ['int'])
            ->setDefined('idProduit')->setAllowedTypes('idProduit', ['int'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetGestionModesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('courtierId')->setAllowedTypes('courtierId', ['int'])
        ;

        return $resolver->resolve($options);
    }
}
