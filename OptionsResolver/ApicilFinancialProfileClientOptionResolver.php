<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilFinancialProfileClientOptionResolver
{
    public static function resolveGetContratResultOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('typeActe')->setAllowedTypes('typeActe', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveRefuseOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('commentaire')->setAllowedTypes('commentaire', ['string'])
        ;

        return $resolver->resolve($options);
    }
}
