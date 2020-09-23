<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Mpp\ApicilClientBundle\Model\QuestionnaireStructuresReponses;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilManagementClientOptionResolver
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

    public static function resolveCreateOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('profilGestion')->setAllowedTypes('profilGestion', ['string'])
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

    public static function resolveGenerateSecurityCodeOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('token')->setAllowedTypes('token', ['string'])
            ->setRequired('renvoyer')->setAllowedTypes('renvoyer', ['bool'])
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

    public static function resolveGetInvestmentEligibleSupportDetailsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('supZoneGeo')->setAllowedTypes('supZoneGeo', ['string'])
            ->setDefined('societe')->setAllowedTypes('societe', ['string'])
            ->setDefined('codeIsin')->setAllowedTypes('codeIsin', ['string'])
                ->setAllowedValues('codeIsin', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('libelle')->setAllowedTypes('libelle', ['string'])
            ->setDefined('classeActif')->setAllowedTypes('classeActif', ['string'])
            ->setDefined('typeCategorie')->setAllowedTypes('typeCategorie', ['string'])
            ->setDefined('risqueMin')->setAllowedTypes('risqueMin', ['int'])
            ->setDefined('risqueMax')->setAllowedTypes('risqueMax', ['int'])
            ->setDefined('seniorMin')->setAllowedTypes('seniorMin', ['int'])
            ->setDefined('seniorMax')->setAllowedTypes('seniorMax', ['int'])
            ->setDefined('juniorMin')->setAllowedTypes('juniorMin', ['int'])
            ->setDefined('juniorMax')->setAllowedTypes('juniorMax', ['int'])
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
            ->setDefined('email')->setAllowedTypes('email', ['string'])
            ->setDefined('courtierEnCopie')->setAllowedTypes('courtierEnCopie', ['bool'])

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
