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

class SituationProfessionnelleDto
{
    /**
     * @var int|null
     */
    private $anneeDepartRetraite;

    /**
     * @var CategorieSocioProfessionnelleDto
     */
    private $categorieSocioProfessionnelle;

    /**
     * @var InformationsPPEDto|null
     */
    private $informationsPPE;

    /**
     * @var LienPPEDto|null
     */
    private $lienPPE;

    /**
     * @var string|null
     */
    private $nomEntreprise;

    /**
     * @var string
     */
    private $professionActuelle;

    /**
     * @var SecteurActiviteDto
     */
    private $secteurActivite;

    /**
     * @var SituationActuelleDto
     */
    private $situationActuelle;

    /**
     * @var bool
     */
    private $travailleurNonSalarie;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('anneeDepartRetraite', null)->setAllowedTypes('anneeDepartRetraite', ['int', 'null'])
            ->setRequired('categorieSocioProfessionnelle')->setAllowedTypes('categorieSocioProfessionnelle', ['array', CategorieSocioProfessionnelleDto::class])->setNormalizer('categorieSocioProfessionnelle', function (Options $options, $value) {
                if ($value instanceof CategorieSocioProfessionnelleDto) {
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
            ->setRequired('professionActuelle')->setAllowedTypes('professionActuelle', ['string'])
            ->setRequired('secteurActivite')->setAllowedTypes('secteurActivite', ['array', SecteurActiviteDto::class])->setNormalizer('secteurActivite', function (Options $options, $value) {
                if ($value instanceof SecteurActiviteDto) {
                    return $value;
                }

                return SecteurActiviteDto::createFromArray($value);
            })
            ->setRequired('situationActuelle')->setAllowedTypes('situationActuelle', ['array', SituationActuelleDto::class])->setNormalizer('situationActuelle', function (Options $options, $value) {
                if ($value instanceof SituationActuelleDto) {
                    return $value;
                }

                return SituationActuelleDto::createFromArray($value);
            })
            ->setRequired('travailleurNonSalarie')->setAllowedTypes('travailleurNonSalarie', ['bool'])
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
            ->setAnneeDepartRetraite($resolvedOptions['anneeDepartRetraite'])
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
     * @return int|null
     */
    public function getAnneeDepartRetraite(): ?int
    {
        return $this->anneeDepartRetraite;
    }

    /**
     * @param int|null $anneeDepartRetraite
     *
     * @return self
     */
    public function setAnneeDepartRetraite(?int $anneeDepartRetraite): self
    {
        $this->anneeDepartRetraite = $anneeDepartRetraite;

        return $this;
    }

    /**
     * @return CategorieSocioProfessionnelleDto
     */
    public function getCategorieSocioProfessionnelle(): CategorieSocioProfessionnelleDto
    {
        return $this->categorieSocioProfessionnelle;
    }

    /**
     * @param CategorieSocioProfessionnelleDto $categorieSocioProfessionnelle
     *
     * @return self
     */
    public function setCategorieSocioProfessionnelle(CategorieSocioProfessionnelleDto $categorieSocioProfessionnelle): self
    {
        $this->categorieSocioProfessionnelle = $categorieSocioProfessionnelle;

        return $this;
    }

    /**
     * @return InformationsPPEDto|null
     */
    public function getInformationsPPE(): ?InformationsPPEDto
    {
        return $this->informationsPPE;
    }

    /**
     * @param InformationsPPEDto|null $informationsPPE
     *
     * @return self
     */
    public function setInformationsPPE(?InformationsPPEDto $informationsPPE): self
    {
        $this->informationsPPE = $informationsPPE;

        return $this;
    }

    /**
     * @return LienPPEDto|null
     */
    public function getLienPPE(): ?LienPPEDto
    {
        return $this->lienPPE;
    }

    /**
     * @param LienPPEDto|null $lienPPE
     *
     * @return self
     */
    public function setLienPPE(?LienPPEDto $lienPPE): self
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
     * @return string
     */
    public function getProfessionActuelle(): string
    {
        return $this->professionActuelle;
    }

    /**
     * @param string $professionActuelle
     *
     * @return self
     */
    public function setProfessionActuelle(string $professionActuelle): self
    {
        $this->professionActuelle = $professionActuelle;

        return $this;
    }

    /**
     * @return SecteurActiviteDto
     */
    public function getSecteurActivite(): SecteurActiviteDto
    {
        return $this->secteurActivite;
    }

    /**
     * @param SecteurActiviteDto $secteurActivite
     *
     * @return self
     */
    public function setSecteurActivite(SecteurActiviteDto $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

    /**
     * @return SituationActuelleDto
     */
    public function getSituationActuelle(): SituationActuelleDto
    {
        return $this->situationActuelle;
    }

    /**
     * @param SituationActuelleDto $situationActuelle
     *
     * @return self
     */
    public function setSituationActuelle(SituationActuelleDto $situationActuelle): self
    {
        $this->situationActuelle = $situationActuelle;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTravailleurNonSalarie(): bool
    {
        return $this->travailleurNonSalarie;
    }

    /**
     * @param bool $travailleurNonSalarie
     *
     * @return self
     */
    public function setTravailleurNonSalarie(bool $travailleurNonSalarie): self
    {
        $this->travailleurNonSalarie = $travailleurNonSalarie;

        return $this;
    }
}
