<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Mpp\ApicilClientBundle\Model\QuestionnaireStructuresReponses;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilArbitrationClientOptionResolver
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

    public static function resolveCreateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('arbitrage')->setAllowedTypes('arbitrage', ['string'])
            ->setRequired('bulletin')->setAllowedTypes('bulletin', [File::class, 'string'])
                ->setNormalizer('bulletin', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "bulletin" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetInvestmentEligibleSupportsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('isin')->setAllowedTypes('isin', ['string'])
            ->setDefined('libelle')->setAllowedTypes('libelle', ['string'])
            ->setDefined('codeProfilGestion')->setAllowedTypes('codeProfilGestion', ['string'])
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

    public static function resolveRestartOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('email')->setAllowedTypes('email', ['string'])
            ->setRequired('courtierEnCopie')->setAllowedTypes('courtierEnCopie', ['bool'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveUpdateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('bulletin')->setAllowedTypes('bulletin', [File::class, 'string'])
                ->setNormalizer('bulletin', function (Options $options, $value) {
                    if ($value instanceof File) {
                        $value = $value->getPathname();
                    }

                    if (!file_exists($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "bulletin" was "%s" but the file doesn\'t exists.', $value)
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveVerifySurveysOptions(array $surveys): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('questionnaires')->setAllowedTypes('questionnaires', ['array'])
                ->setAllowedValues('questionnaires', function (array $questionnaires) {
                    foreach ($questionnaires as $questionnaire) {
                        if (!$questionnaire instanceof QuestionnaireStructuresReponses) {
                            return false;
                        }
                    }

                    return true;
                })
        ;

        return $resolver->resolve(['questionnaires' => $surveys])['questionnaires'];
    }
}
