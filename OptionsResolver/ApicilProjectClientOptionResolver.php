<?php

namespace Mpp\ApicilClientBundle\OptionsResolver;

use Mpp\ApicilClientBundle\Model\ListProjetItem;
use Mpp\ApicilClientBundle\Model\ModeleDeVersement;
use Mpp\ApicilClientBundle\Model\ProjetInvestissement;
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

    public static function resolveListProjetOptions(array $options): array
    {
        $resolver = (new OptionsResolver())
            ->setDefault('page',1)->setAllowedTypes('page', ['int'])
            ->setDefault('elementsPerPage',10)->setAllowedTypes('elementsPerPage', ['int'])
            ->setDefined('motCle')->setAllowedTypes('motCle', ['string'])
            ->setDefined('codeProduit')->setAllowedTypes('codeProduit', ['string'])
            ->setDefined('statuts')->setAllowedTypes('statuts', ['string[]'])
            ->setDefined('typeSignature')->setAllowedTypes('typeSignature', ['string'])
            ->setAllowedValues('typeSignature', [
                ProjetInvestissement::TYPE_SIGNATURE_ELECTRONIQUE, ProjetInvestissement::TYPE_SIGNATURE_PAPIER
            ])
            ->setDefined('modeReglement')->setAllowedTypes('modeReglement', ['string'])
            ->setAllowedValues('modeReglement', [
                ModeleDeVersement::MODE_PAIEMENT_P,
                ModeleDeVersement::MODE_PAIEMENT_C,
                ModeleDeVersement::MODE_PAIEMENT_V,
                ModeleDeVersement::MODE_PAIEMENT_T
            ])
            ->setDefined('trier')->setAllowedTypes('trier', ['string'])
            ->setDefined('ordre')->setAllowedTypes('ordre', ['string'])
            ->setDefined('typeSouscription')->setAllowedTypes('typeSouscription', ['string[]'])
            ->setAllowedValues('typeSignature', [
                ListProjetItem::TYPE_SOUSCRIPTION_SELFCARE, ListProjetItem::TYPE_SOUSCRIPTION_PROPOSITION
            ])
            ->setDefined('idProduit')->setAllowedTypes('idProduit', ['int'])
            ->setDefined('idCourtier')->setAllowedTypes('idCourtier', ['int'])
            ->setDefined('contratId')->setAllowedTypes('contratId', ['int'])
        ;

        return $resolver->resolve($options);
    }
}
