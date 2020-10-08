<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilReferentialClientOptionsResolver
{
    public static function resolveGetActivitySectorsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetApiAddressesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('adresseKey')->setAllowedTypes('adresseKey', ['string'])
                ->setNormalizer('adresseKey', function (Options $options, $value) {
                    if (0 === strlen($value)) {
                        throw new \InvalidArgumentException(
                            sprintf('The option "adresseKey" couldn\'t be null.')
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetBrokersOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('type')->setAllowedTypes('type', ['string'])->setAllowedValues('type', ['light', 'full'])
            ->setRequired('motCle')->setAllowedTypes('motCle', ['string'])
            ->setDefined('recupererCourtierDesactives')->setAllowedTypes('recupererCourtierDesactives', ['bool'])

        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetCitiesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('codePays')->setAllowedTypes('codePays', ['string'])
            ->setDefined('codeDepartement')->setAllowedTypes('codeDepartement', ['string'])
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetCountriesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetDepartmentsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('codePays')->setAllowedTypes('codePays', ['string'])
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetFamilyLinksOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetInvestmentEligibleSupportsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('codeProfilGestion')->setAllowedTypes('codeProfilGestion', ['string'])
            ->setDefined('supZoneGeo')->setAllowedTypes('supZoneGeo', ['string'])
            ->setDefined('societe')->setAllowedTypes('societe', ['string'])
            ->setDefined('codeIsin')->setAllowedTypes('codeIsin', ['string'])
            ->setDefined('libelle')->setAllowedTypes('libelle', ['string'])
            ->setDefined('classeActif')->setAllowedTypes('classeActif', ['string'])
            ->setDefined('typeCategorie')->setAllowedTypes('typeCategorie', ['string'])
            ->setDefined('risqueMin')->setAllowedTypes('risqueMin', ['int'])
            ->setDefined('risqueMax')->setAllowedTypes('risqueMax', ['int'])
            ->setDefined('seniorMin')->setAllowedTypes('seniorMin', ['int'])
            ->setDefined('seniorMin')->setAllowedTypes('seniorMin', ['int'])
            ->setDefined('juniorMin')->setAllowedTypes('juniorMin', ['int'])
            ->setDefined('juniorMax')->setAllowedTypes('juniorMax', ['int'])
            ->setDefined('isInvestissementProgramme')->setAllowedTypes('isInvestissementProgramme', ['bool'])
            ->setDefined('isVersementInitialAvecVP')->setAllowedTypes('isVersementInitialAvecVP', ['bool'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetNationalitiesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetPaymentMethodsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('mode')->setAllowedTypes('mode', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetPhoneCodesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetProfessionalCategoriesOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetProfessionalSituationsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('query')->setAllowedTypes('query', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public function resolveGetScheduledPaymentEligibleSupportsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setRequired('codeProduit')->setAllowedTypes('codeProduit', ['string'])
            ->setDefined('codeProfilGestion')->setAllowedTypes('codeProfilGestion', ['string'])
            ->setDefined('isin')->setAllowedTypes('isin', ['string'])
            ->setDefined('libelle')->setAllowedTypes('libelle', ['string'])
            ->setDefined('max')->setAllowedTypes('max', ['int'])
        ;

        return $resolver->resolve($options);
    }
}
