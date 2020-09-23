<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilTotalRepurchaseClientOptionResolver
{
    public static function resolveRestartOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('email')->setAllowedTypes('email', ['string'])
            ->setRequired('courtierEnCopie')->setAllowedTypes('courtierEnCopie', ['bool'])
        ;

        return $resolver->resolve($options);
    }
}
