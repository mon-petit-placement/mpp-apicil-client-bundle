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

class ModeleDeVersementInitial
{
    public const MODE_PAIEMENT_C = 'C';
    public const MODE_PAIEMENT_P = 'P';
    public const MODE_PAIEMENT_V = 'V';

    /**
     * @var string
     */
    private $modePaiement;

    /**
     * @var float
     */
    private $montant;

    /**
     * @var OrigineDesFondsDto|null
     */
    private $origineDesFonds;

    /**
     * @var PayeurDto|null
     */
    private $payeur;

    /**
     * @var array|null
     */
    private $portefeuille;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var float|null
     */
    private $tauxDerogatoire;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('modePaiement')->setAllowedValues('modePaiement', [self::MODE_PAIEMENT_P, self::MODE_PAIEMENT_C, self::MODE_PAIEMENT_V])
            ->setRequired('montant')->setAllowedTypes('montant', ['float'])
            ->setDefault('origineDesFonds', null)->setAllowedTypes('origineDesFonds', ['array', OrigineDesFondsDto::class, 'null'])->setNormalizer('origineDesFonds', function (Options $options, $value) {
                if ($value instanceof OrigineDesFondsDto || null === $value) {
                    return $value;
                }

                return OrigineDesFondsDto::createFromArray($value);
            })
            ->setDefault('payeur', null)->setAllowedTypes('payeur', ['array', PayeurDto::class, 'null'])->setNormalizer('payeur', function (Options $options, $value) {
                if ($value instanceof PayeurDto || null === $value) {
                    return $value;
                }

                return PayeurDto::createFromArray($value);
            })
            ->setDefault('portefeuille', null)->setAllowedTypes('portefeuille', ['array', 'null'])->setNormalizer('portefeuille', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$portefeuille) {
                    if ($portefeuille instanceof PortefeuilleDto) {
                        continue;
                    }

                    $portefeuille = PortefeuilleDto::createFromArray($portefeuille);
                }

                return $value;
            })
            ->setDefault('reponsesSupportStructure', null)->setAllowedTypes('reponsesSupportStructure', ['array', 'null'])->setNormalizer('reponsesSupportStructure', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$questionnaireStructuresReponse) {
                    if ($questionnaireStructuresReponse instanceof QuestionnaireStructuresReponse) {
                        continue;
                    }

                    $questionnaireStructuresReponse = PortefeuilleDto::createFromArray($questionnaireStructuresReponse);
                }

                return $value;
            })
            ->setDefault('tauxDerogatoire', null)->setAllowedTypes('tauxDerogatoire', ['float'])
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
            ->setModePaiement($resolvedOptions['modePaiement'])
            ->setMontant($resolvedOptions['montant'])
            ->setOrigineDesFonds($resolvedOptions['origineDesFonds'])
            ->setPayeur($resolvedOptions['payeur'])
            ->setPortefeuille($resolvedOptions['portefeuille'])
            ->setReponsesSupportStructure($resolvedOptions['reponsesSupportStructure'])
            ->setTauxDerogatoire($resolvedOptions['tauxDerogatoire'])
        ;
    }

    /**
     * @return string
     */
    public function getModePaiement(): string
    {
        return $this->modePaiement;
    }

    /**
     * @param string $modePaiement
     *
     * @return self
     */
    public function setModePaiement(string $modePaiement): self
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     *
     * @return self
     */
    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return OrigineDesFondsDto|null
     */
    public function getOrigineDesFonds(): ?OrigineDesFondsDto
    {
        return $this->origineDesFonds;
    }

    /**
     * @param OrigineDesFondsDto|null $origineDesFonds
     *
     * @return self
     */
    public function setOrigineDesFonds(?OrigineDesFondsDto $origineDesFonds): self
    {
        $this->origineDesFonds = $origineDesFonds;

        return $this;
    }

    /**
     * @return PayeurDto|null
     */
    public function getPayeur(): ?PayeurDto
    {
        return $this->payeur;
    }

    /**
     * @param PayeurDto|null $payeur
     *
     * @return self
     */
    public function setPayeur(?PayeurDto $payeur): self
    {
        $this->payeur = $payeur;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPortefeuille(): ?array
    {
        return $this->portefeuille;
    }

    /**
     * @param array|null $portefeuille
     *
     * @return self
     */
    public function setPortefeuille(?array $portefeuille): self
    {
        $this->portefeuille = $portefeuille;

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
     * @param array|null $reponsesSupportStructure
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
    public function getTauxDerogatoire(): ?float
    {
        return $this->tauxDerogatoire;
    }

    /**
     * @param float|null $tauxDerogatoire
     *
     * @return self
     */
    public function setTauxDerogatoire(?float $tauxDerogatoire): self
    {
        $this->tauxDerogatoire = $tauxDerogatoire;

        return $this;
    }
}
