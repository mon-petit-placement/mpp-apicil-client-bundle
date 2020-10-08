<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilAccClientOptionResolver
{
    public static function resolveAddDocumentOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('documents')->setAllowedTypes('documents', [File::class, 'string'])
                ->setNormalizer('documents', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "documents" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveAddDocumentByContractOptions(array $options): array
    {
        return self::resolveAddDocumentOptions($options);
    }

    public static function resolveApproveOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('documents')->setAllowedTypes('documents', [File::class, 'string'])
                ->setNormalizer('documents', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "documents" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveApproveByContractOptions(array $options): array
    {
        return self::resolveApproveOptions($options);
    }

    public static function resolveApproveSecurityCodeOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('codeSecurite')->setAllowedTypes('codeSecurite', ['string'])
            ->setRequired('token')->setAllowedTypes('token', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGenerateSecurityCodeOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('token')->setAllowedTypes('token', ['string'])
            ->setDefined('renvoyer')->setAllowedTypes('renvoyer', ['bool'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveUpdateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('connaissanceClient')->setAllowedTypes('connaissanceClient', ['string'])
            ->setDefined('documents')->setAllowedTypes('documents', [File::class, 'string'])
                ->setNormalizer('documents', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "documents" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveUpdateByContractOptions(array $options): array
    {
        return self::resolveUpdateOptions($options);
    }
}
