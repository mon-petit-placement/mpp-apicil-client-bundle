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

class ArbitrageDto
{
    /**
     * @var string|null
     */
    private $alliance;

    /**
     * @var bool|null
     */
    private $bulletinPartenaire;

    /**
     * @var string|null
     */
    private $codeFiscal;

    /**
     * @var int|null
     */
    private $contratId;

    /**
     * @var float|null
     */
    private $fraisDerogatoireArbitrage;

    /**
     * @var TrHorizonInvestissementDto|null
     */
    private $horizonInvestissement;

    /**
     * @var array|null
     */
    private $portefeuilleCible;

    /**
     * @var array|null
     */
    private $repartitionDesinvestissement;

    /**
     * @var array|null
     */
    private $repartitionInvestissement;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var float|null
     */
    private $tauxArbitrage;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('alliance', null)->setAllowedTypes('alliance', ['string', 'null'])
            ->setDefault('bulletinPartenaire', null)->setAllowedTypes('bulletinPartenaire', ['bool', 'null'])
            ->setDefault('codeFiscal', null)->setAllowedTypes('codeFiscal', ['string', 'null'])
            ->setRequired('contratId')->setAllowedTypes('contratId', ['int'])
            ->setDefault('fraisDerogatoireArbitrage', null)->setAllowedTypes('fraisDerogatoireArbitrage', ['float', 'null'])
            ->setDefault('horizonInvestissement', null)->setAllowedTypes('horizonInvestissement', ['array', TrHorizonInvestissementDto::class])->setNormalizer('horizonInvestissement', function (Options $options, $value) {
                if ($value instanceof TrHorizonInvestissementDto) {
                    return $value;
                }

                return TrHorizonInvestissementDto::createFromArray($value);
            })
            ->setDefault('portefeuilleCible', null)->setAllowedTypes('portefeuilleCible', ['array', 'null'])->setNormalizer('portefeuilleCible', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$repartition) {
                    if ($repartition instanceof RepartitionReponseDto) {
                        continue;
                    }

                    $repartition = RepartitionReponseDto::createFromArray($repartition);
                }

                return $value;
            })
            ->setDefault('repartitionDesinvestissement', null)->setAllowedTypes('repartitionDesinvestissement', ['array', 'null'])->setNormalizer('repartitionDesinvestissement', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$repartition) {
                    if ($repartition instanceof RepartitionReponseDto) {
                        continue;
                    }

                    $repartition = RepartitionReponseDto::createFromArray($repartition);
                }

                return $value;
            })
            ->setDefault('repartitionInvestissement', null)->setAllowedTypes('repartitionInvestissement', ['array', 'null'])->setNormalizer('repartitionInvestissement', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$repartition) {
                    if ($repartition instanceof RepartitionReponseDto) {
                        continue;
                    }

                    $repartition = RepartitionReponseDto::createFromArray($repartition);
                }

                return $value;
            })
            ->setDefault('reponsesSupportStructure', null)->setAllowedTypes('reponsesSupportStructure', ['array', 'null'])->setNormalizer('reponsesSupportStructure', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$questionnaire) {
                    if ($questionnaire instanceof QuestionnaireStructuresReponses) {
                        continue;
                    }

                    $questionnaire = QuestionnaireStructuresReponses::createFromArray($questionnaire);
                }

                return $value;
            })
            ->setDefault('tauxArbitrage', null)->setAllowedTypes('tauxArbitrage', ['float', 'null'])
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
            ->setAlliance($resolvedOptions['alliance'])
            ->setBulletinPartenaire($resolvedOptions['bulletinPartenaire'])
            ->setCodeFiscal($resolvedOptions['codeFiscal'])
            ->setContratId($resolvedOptions['contratId'])
            ->setFraisDerogatoireArbitrage($resolvedOptions['fraisDerogatoireArbitrage'])
            ->setHorizonInvestissement($resolvedOptions['horizonInvestissement'])
            ->setPortefeuilleCible($resolvedOptions['portefeuilleCible'])
            ->setRepartitionDesinvestissement($resolvedOptions['repartitionDesinvestissement'])
            ->setRepartitionInvestissement($resolvedOptions['repartitionInvestissement'])
            ->setReponsesSupportStructure($resolvedOptions['reponsesSupportStructure'])
            ->setTauxArbitrage($resolvedOptions['tauxArbitrage'])
        ;
    }

    /**
     * @return string|null
     */
    public function getAlliance(): ?string
    {
        return $this->alliance;
    }

    /**
     * @param string|null $alliance
     *
     * @return self
     */
    public function setAlliance(?string $alliance): self
    {
        $this->alliance = $alliance;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getContratId(): ?int
    {
        return $this->contratId;
    }

    /**
     * @param int|null $contratId
     *
     * @return self
     */
    public function setContratId(?int $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFraisDerogatoireArbitrage(): ?float
    {
        return $this->fraisDerogatoireArbitrage;
    }

    /**
     * @param float|null $fraisDerogatoireArbitrage
     *
     * @return self
     */
    public function setFraisDerogatoireArbitrage(?float $fraisDerogatoireArbitrage): self
    {
        $this->fraisDerogatoireArbitrage = $fraisDerogatoireArbitrage;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPortefeuilleCible(): ?array
    {
        return $this->portefeuilleCible;
    }

    /**
     * @param array|null $portefeuilleCible
     *
     * @return self
     */
    public function setPortefeuilleCible(?array $portefeuilleCible): self
    {
        $this->portefeuilleCible = $portefeuilleCible;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRepartitionDesinvestissement(): ?array
    {
        return $this->repartitionDesinvestissement;
    }

    /**
     * @param array|null $repartitionDesinvestissement
     *
     * @return self
     */
    public function setRepartitionDesinvestissement(?array $repartitionDesinvestissement): self
    {
        $this->repartitionDesinvestissement = $repartitionDesinvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRepartitionInvestissement(): ?array
    {
        return $this->repartitionInvestissement;
    }

    /**
     * @param array|null $repartitionInvestissement
     *
     * @return self
     */
    public function setRepartitionInvestissement(?array $repartitionInvestissement): self
    {
        $this->repartitionInvestissement = $repartitionInvestissement;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReponsesSupportStructure(): ?array
    {
        return $this->reponsesSupportStructure;
    }

    /**
     * @param array|null $repartitionInvestissement
     *
     * @return self
     */
    public function setReponsesSupportStructure(?array $reponsesSupportStructure): self
    {
        $this->reponsesSupportStructure = $reponsesSupportStructure;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxArbitrage(): ?float
    {
        return $this->tauxArbitrage;
    }

    /**
     * @param float|null $tauxArbitrage
     *
     * @return self
     */
    public function setTauxArbitrage(?float $tauxArbitrage): self
    {
        $this->tauxArbitrage = $tauxArbitrage;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getBulletinPartenaire(): ?bool
    {
        return $this->bulletinPartenaire;
    }

    /**
     * @param  bool|null  $bulletinPartenaire
     *
     * @return  self
     */
    public function setBulletinPartenaire(?bool $bulletinPartenaire): self
    {
        $this->bulletinPartenaire = $bulletinPartenaire;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCodeFiscal(): ?string
    {
        return $this->codeFiscal;
    }

    /**
     * @param  string|null  $codeFiscal
     *
     * @return  self
     */
    public function setCodeFiscal(?string $codeFiscal): self
    {
        $this->codeFiscal = $codeFiscal;

        return $this;
    }

    /**
     * @return  TrHorizonInvestissementDto|null
     */
    public function getHorizonInvestissement(): ?TrHorizonInvestissementDto
    {
        return $this->horizonInvestissement;
    }

    /**
     * @param  TrHorizonInvestissementDto|null  $horizonInvestissement
     *
     * @return  self
     */
    public function setHorizonInvestissement(?TrHorizonInvestissementDto $horizonInvestissement): self
    {
        $this->horizonInvestissement = $horizonInvestissement;

        return $this;
    }
}
