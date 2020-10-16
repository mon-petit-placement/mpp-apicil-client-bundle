<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SituationProfessionnelleConjointDto
{
    /**
     * @var CategorieSocioProfessionnelleDto|null
     */
    private $categorieSocioProfessionnelle;

    /**
     * @var InformationsPPEConjointDto|null
     */
    private $informationsPPE;

    /**
     * @var LienPPEConjointDto|null
     */
    private $lienPPE;

    /**
     * @var string|null
     */
    private $nomEntreprise;

    /**
     * @var string|null
     */
    private $professionActuelle;

    /**
     * @var SecteurActiviteDto|null
     */
    private $secteurActivite;

    /**
     * @var SituationActuelleDto|null
     */
    private $situationActuelle;

    /**
     * @var bool|null
     */
    private $travailleurNonSalarie;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('categorieSocioProfessionnelle', null)->setAllowedTypes('categorieSocioProfessionnelle', ['array', CategorieSocioProfessionnelleDto::class, 'null'])->setNormalizer('categorieSocioProfessionnelle', function (Options $options, $value) {
                if ($value instanceof CategorieSocioProfessionnelleDto || null === $value) {
                    return $value;
                }

                return CategorieSocioProfessionnelleDto::createFromArray($value);
            })
            ->setDefault('informationsPPE', null)->setAllowedTypes('informationsPPE', ['array', InformationsPPEDto::class, 'null'])->setNormalizer('informationsPPE', function (Options $options, $value) {
                if ($value instanceof InformationsPPEDto || null === $value) {
                    return $value;
                }

                return InformationsPPEDto::createFromArray($value);
            })
            ->setDefault('lienPPE', null)->setAllowedTypes('lienPPE', ['array', LienPPEDto::class, 'null'])->setNormalizer('lienPPE', function (Options $options, $value) {
                if ($value instanceof LienPPEDto || null === $value) {
                    return $value;
                }

                return LienPPEDto::createFromArray($value);
            })
            ->setDefault('nomEntreprise', null)->setAllowedTypes('nomEntreprise', ['string', 'null'])
            ->setDefault('professionActuelle', null)->setAllowedTypes('professionActuelle', ['string', 'null'])
            ->setDefault('secteurActivite', null)->setAllowedTypes('secteurActivite', ['array', SecteurActiviteDto::class, 'null'])->setNormalizer('secteurActivite', function (Options $options, $value) {
                if ($value instanceof SecteurActiviteDto || null === $value) {
                    return $value;
                }

                return SecteurActiviteDto::createFromArray($value);
            })
            ->setDefault('situationActuelle', null)->setAllowedTypes('situationActuelle', ['array', SituationActuelleDto::class, 'null'])->setNormalizer('situationActuelle', function (Options $options, $value) {
                if ($value instanceof SituationActuelleDto || null === $value) {
                    return $value;
                }

                return SituationActuelleDto::createFromArray($value);
            })
            ->setDefault('travailleurNonSalarie', null)->setAllowedTypes('travailleurNonSalarie', ['bool', 'null'])
        ;
    }

    /**
     * @param array $options
     *
     * @return self
     *
     * @throws UndefinedOptionsException If an option name is undefined
     * @throws InvalidOptionsException   If an option doesn't fulfill the language specified validation rules
     * @throws MissingOptionsException   If a required option is missing
     * @throws OptionDefinitionException If there is a cyclic dependency between lazy options and/or normalizers
     * @throws NoSuchOptionException     If a lazy option reads an unavailable option
     * @throws AccessException           If called from a lazy option or normalizer
     */
    public static function createFromArray(array $options): self
    {
        $resolver = new OptionsResolver();
        self::configureData($resolver);
        $resolvedOptions = $resolver->resolve($options);

        return (new self())
            ->setCategorieSocioProfessionnelle($resolvedOptions['categorieSocioProfessionnelle'])
            ->setInformationsPPE($resolvedOptions['informationsPPE'])
            ->setLienPPE($resolvedOptions['lienPPE'])
            ->setNomEntreprise($resolvedOptions['nomEntreprise'])
            ->setProfessionActuelle($resolvedOptions['professionActuelle'])
            ->setSecteurActivite($resolvedOptions['secteurActivite'])
            ->setSituationActuelle($resolvedOptions['situationActuelle'])
            ->setTravailleurNonSalarie($resolvedOptions['travailleurNonSalarie'])
        ;
    }

    /**
     * @return CategorieSocioProfessionnelleDto|null
     */
    public function getCategorieSocioProfessionnelle(): ?CategorieSocioProfessionnelleDto
    {
        return $this->categorieSocioProfessionnelle;
    }

    /**
     * @param CategorieSocioProfessionnelleDto|null $categorieSocioProfessionnelle
     *
     * @return self
     */
    public function setCategorieSocioProfessionnelle(?CategorieSocioProfessionnelleDto $categorieSocioProfessionnelle): self
    {
        $this->categorieSocioProfessionnelle = $categorieSocioProfessionnelle;

        return $this;
    }

    /**
     * @return InformationsPPEConjointDto|null
     */
    public function getInformationsPPE(): ?InformationsPPEConjointDto
    {
        return $this->informationsPPE;
    }

    /**
     * @param InformationsPPEConjointDto|null $informationsPPE
     *
     * @return self
     */
    public function setInformationsPPE(?InformationsPPEConjointDto $informationsPPE): self
    {
        $this->informationsPPE = $informationsPPE;

        return $this;
    }

    /**
     * @return LienPPEConjointDto|null
     */
    public function getLienPPE(): ?LienPPEConjointDto
    {
        return $this->lienPPE;
    }

    /**
     * @param LienPPEConjointDto|null $lienPPE
     *
     * @return self
     */
    public function setLienPPE(?LienPPEConjointDto $lienPPE): self
    {
        $this->lienPPE = $lienPPE;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * @param string|null $nomEntreprise
     *
     * @return self
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfessionActuelle(): ?string
    {
        return $this->professionActuelle;
    }

    /**
     * @param string|null $professionActuelle
     *
     * @return self
     */
    public function setProfessionActuelle(?string $professionActuelle): self
    {
        $this->professionActuelle = $professionActuelle;

        return $this;
    }

    /**
     * @return SecteurActiviteDto|null
     */
    public function getSecteurActivite(): ?SecteurActiviteDto
    {
        return $this->secteurActivite;
    }

    /**
     * @param SecteurActiviteDto|null $secteurActivite
     *
     * @return self
     */
    public function setSecteurActivite(?SecteurActiviteDto $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

    /**
     * @return SituationActuelleDto|null
     */
    public function getSituationActuelle(): ?SituationActuelleDto
    {
        return $this->situationActuelle;
    }

    /**
     * @param SituationActuelleDto|null $situationActuelle
     *
     * @return self
     */
    public function setSituationActuelle(?SituationActuelleDto $situationActuelle): self
    {
        $this->situationActuelle = $situationActuelle;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTravailleurNonSalarie(): ?bool
    {
        return $this->travailleurNonSalarie;
    }

    /**
     * @param bool|null $travailleurNonSalarie
     *
     * @return self
     */
    public function setTravailleurNonSalarie(?bool $travailleurNonSalarie): self
    {
        $this->travailleurNonSalarie = $travailleurNonSalarie;

        return $this;
    }
}
