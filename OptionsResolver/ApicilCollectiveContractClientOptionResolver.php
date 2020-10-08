<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilCollectiveContractClientOptionResolver
{
    public static function resolveExportAllOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('motCle')->setAllowedTypes('motCle', ['string'])
            ->setDefined('codeProduit')->setAllowedTypes('codeProduit', ['array'])
                ->setAllowedValues('codeProduit', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetAllOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('motCle')->setAllowedTypes('motCle', ['string'])
            ->setDefined('codeProduit')->setAllowedTypes('codeProduit', ['array'])
                ->setAllowedValues('codeProduit', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('page')->setAllowedTypes('page', ['int'])
            ->setDefined('size')->setAllowedTypes('size', ['int'])
            ->setDefined('sortBy')->setAllowedTypes('sortBy', ['string'])
            ->setDefined('order')->setAllowedTypes('order', ['string'])
        ;

        return $resolver->resolve($options);
    }
}
