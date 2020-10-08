<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilKycContactInformationClientOptionResolver
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
            ->setDefined('justificatifDomicile')->setAllowedTypes('justificatifDomicile', [File::class, 'string'])
                ->setNormalizer('justificatifDomicile', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "justificatifDomicile" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetIdentityCardOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('idDocument')->setAllowedTypes('idDocument', ['int'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveUpdateProofOfResidenceOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('jddHeberge')->setAllowedTypes('jddHeberge', ['bool'])
        ;

        return $resolver->resolve($options);
    }
}
