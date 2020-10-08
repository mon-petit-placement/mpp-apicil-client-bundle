<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilKycIbanClientOptionResolver
{
    public static function resolveAddDocumentOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('document')->setAllowedTypes('document', [File::class, 'string'])
                ->setNormalizer('document', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "document" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveCreateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('dolban')->setAllowedTypes('dolban', ['string'])
            ->setDefined('file')->setAllowedTypes('file', [File::class, 'string'])
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

    public static function resolveUpdateOptions(array $options): array
    {
        return self::resolveCreateOptions($options);
    }
}
