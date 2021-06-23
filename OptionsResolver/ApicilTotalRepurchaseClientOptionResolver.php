<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilTotalRepurchaseClientOptionResolver
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
            ->setDefined('rachat')->setAllowedTypes('rachat', ['string'])
            ->setRequired('dossier')->setAllowedTypes('dossier', [File::class, 'string'])
                ->setNormalizer('dossier', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "dossier" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveRefuseOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('commentaire')->setAllowedTypes('commentaire', ['string'])

        ;

        return $resolver->resolve($options);
    }

    public static function resolveRestartOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('email')->setAllowedTypes('email', ['string'])
            ->setRequired('courtierEnCopie')->setAllowedTypes('courtierEnCopie', ['bool'])
        ;

        return $resolver->resolve($options);
    }
}
