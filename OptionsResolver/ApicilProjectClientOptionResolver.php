<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilProjectClientOptionResolver
{
    public static function resolveCreateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('projet')->setAllowedTypes('projet', ['string'])
            ->setRequired('file')->setAllowedTypes('file', [File::class, 'string'])
                ->setNormalizer('file', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "file" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetDocumentsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('estPayeurDiffSouscripteur')->setAllowedTypes('estPayeurDiffSouscripteur', ['bool'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveUpdateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('file')->setAllowedTypes('file', [File::class, 'string'])
                ->setNormalizer('file', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "file" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }
}
