<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ApicilContractClientOptionResolver
{
    public static function resolveGetAllOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('motCle')->setAllowedTypes('motCle', ['string'])
            ->setDefined('regroupementProduit')->setAllowedTypes('regroupementProduit', ['array'])
                ->setAllowedValues('regroupementProduit', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('codeProduit')->setAllowedTypes('codeProduit', ['array'])
                ->setAllowedValues('codeProduit', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('codeTypeContrat')->setAllowedTypes('codeTypeContrat', ['array'])
                ->setAllowedValues('codeTypeContrat', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('categorie')->setAllowedTypes('categorie', ['string'])
            ->setDefined('exclureContratRachetesOuDenouesOuClos')->setAllowedTypes('exclureContratRachetesOuDenouesOuClos', ['bool'])
            ->setDefined('codeModeGestion')->setAllowedTypes('codeModeGestion', ['array'])
                ->setAllowedValues('codeTypeContrat', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('codeProfilGestion')->setAllowedTypes('codeProfilGestion', ['array'])
                ->setAllowedValues('codeProfilGestion', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_string($value)) {
                            return false;
                        }
                    }

                    return true;
                })
            ->setDefined('mandatcivil')->setAllowedTypes('mandatcivil', ['bool'])
            ->setDefined('statutsContrat')->setAllowedTypes('statutsContrat', ['string'])
            ->setDefined('pageEnCours')->setAllowedTypes('pageEnCours', ['int'])
            ->setDefined('taillePage')->setAllowedTypes('taillePage', ['int'])
            ->setDefined('champTri')->setAllowedTypes('champTri', ['int'])
            ->setDefined('ordreTri')->setAllowedTypes('ordreTri', ['int'])
            ->setDefined('idProduit')->setAllowedTypes('idProduit', ['arrat'])
                ->setAllowedValues('idProduit', function (array $options) {
                    foreach ($options as $value) {
                        if (!is_int($value)) {
                            return false;
                        }
                    }

                    return true;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetDocumentsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('numContrat')->setAllowedTypes('numContrat', ['int'])
            ->setDefined('codeTypeDoc')->setAllowedTypes('codeTypeDoc', ['string'])
            ->setDefined('flagCAD')->setAllowedTypes('flagCAD', ['bool'])
            ->setDefined('dateDebut')->setAllowedTypes('dateDebut', ['string', \DateTimeInterface::class])
                ->setNormalizer('dateDebut', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "dateDebut" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
            ->setDefined('dateFin')->setAllowedTypes('dateFin', ['string'], \DateTimeInterface::class)
                ->setNormalizer('dateFin', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "dateFin" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
            ->setDefined('direction')->setAllowedTypes('direction', ['string'])
            ->setDefined('isDocValid')->setAllowedTypes('isDocValid', ['bool'])
            ->setDefined('numDemandeCosy')->setAllowedTypes('numDemandeCosy', ['string'])
            ->setDefined('categorieDocument')->setAllowedTypes('categorieDocument', ['string'])
            ->setDefined('sousCategorieDocument')->setAllowedTypes('sousCategorieDocument', ['string'])
            ->setDefined('currentPage')->setAllowedTypes('currentPage', ['int'])
            ->setDefined('maxPerPage')->setAllowedTypes('maxPerPage', ['int'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetMovementsOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('isOriginesDestinationsFonds')->setAllowedTypes('isOriginesDestinationsFonds', ['bool'])
            ->setDefined('MNTMAX')->setAllowedTypes('MNTMAX', ['int', 'float'])
            ->setDefined('MNTMIN')->setAllowedTypes('MNTMIN', ['int', 'float'])
            ->setDefined('DATDEB')->setAllowedTypes('DATDEB', ['string', \DateTimeInterface::class])
                ->setNormalizer('DATDEB', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "DATDEB" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
            ->setDefined('DATFIN')->setAllowedTypes('DATFIN', ['string'], \DateTimeInterface::class)
                ->setNormalizer('DATFIN', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "DATFIN" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
            ->setDefined('TYPACT')->setAllowedTypes('TYPACT', ['string'])
            ->setDefined('TYPOPE')->setAllowedTypes('TYPOPE', ['string'])
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetSituationReportOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('dateValorisation')->setAllowedTypes('dateValorisation', ['string', \DateTimeInterface::class])
                ->setNormalizer('dateValorisation', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "DATDEB" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }

    public static function resolveGetSituationReportPDFOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefined('dateValorisation')->setAllowedTypes('dateValorisation', ['string', \DateTimeInterface::class])
                ->setNormalizer('dateValorisation', function (Options $options, $value) {
                    if ($value instanceof \DateTimeInterface) {
                        $value = $value->format('d/m/Y');
                    }

                    if (1 !== preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value)) {
                        throw new \InvalidArgumentException(
                            'The "DATDEB" option must be formatted as described in documentation "DD/MM/YYYY"'
                        );
                    }

                    return $value;
                })
        ;

        return $resolver->resolve($options);
    }
}
