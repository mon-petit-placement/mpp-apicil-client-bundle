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

class ModeleDeVersementLibre
{
    public const MODE_INVESTISSEMENT_CHOIX = 'CHOIX';
    public const MODE_INVESTISSEMENT_PRORATA = 'PRORATA';
    public const MODE_INVESTISSEMENT_CONTRAT = 'CONTRAT';
    public const MODE_INVESTISSEMENT_PROFIL = 'PROFIL';

    public const MODE_PAIEMENT_C = 'C';
    public const MODE_PAIEMENT_P = 'P';
    public const MODE_PAIEMENT_V = 'V';
    public const MODE_PAIEMENT_T = 'T';

    public const TYPE_VERSEMENT_COMPLEMENTAIRE = 'COMPLEMENTAIRE';
    public const TYPE_VERSEMENT_PROGRAMME = 'PROGRAMME';
    public const TYPE_VERSEMENT_SUPPRESSION_PROGRAMME     = 'SUPPRESSION_PROGRAMME';

    public const PERIODICITE_MENSUELLE = 'mensuelle';
    public const PERIODICITE_TRIMESTRIELLE = 'trimestrielle';
    public const PERIODICITE_SEMESTRIELLE = 'semestrielle';
    public const PERIODICITE_ANNUELLE = 'annuelle';


    /**
     * @var string|null
     */
    private $alliance;

    /**
     * @var bool|null
     */
    private $bulletinPartenaire;

    /**
     * @var bool|null
     */
    private $conserverIban;

    /**
     * @var int|string|null
     */
    private $contratId;

    /**
     * @var \DateTime|null
     */
    private $dateSignatureSepa;

    /**
     * @var bool|null
     */
    private $deduction;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var TrHorizonInvestissementDto|null
     */
    private $horizonInvestissement;

    /**
     * @var string|null
     */
    private $modeInvestissement;

    /**
     * @var string|null
     */
    private $modePaiement;

    /**
     * @var float|null
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
     * @var string|null
     */
    private $periodicite;

    /**
     * @var array|null
     */
    private $repartitionInvestissement;

    /**
     * @var array|null
     */
    private $reponsesSupportStructure;

    /**
     * @var string|null
     */
    private $rum;

    /**
     * @var string|null
     */
    private $typeVersement;

    /**
     * @var string|null
     */
    private $typeSignature;

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
            ->setDefault('alliance', null)->setAllowedTypes('alliance', ['string', 'null'])
            ->setDefault('bulletinPartenaire', null)->setAllowedTypes('bulletinPartenaire', ['bool', 'null'])
            ->setDefault('conserverIban', null)->setAllowedTypes('conserverIban', ['bool', 'null'])
            ->setRequired('contratId')->setAllowedTypes('contratId', ['int', 'string', 'null'])->setNormalizer('contratId', function (Options $options, $value) {
                if (is_int($value)) {
                    return (string) $value;
                }

                return $value;
            })
            ->setDefault('dateSignatureSepa', null)->setAllowedTypes('dateSignatureSepa', [\DateTime::class, 'string', 'null'])->setNormalizer('dateSignatureSepa', function (Options $options, $value) {
                if ($value instanceof \DateTime || null === $value) {
                    return $value;
                }

                return \DateTime::createFromFormat('Y-m-d', $value);
            })
            ->setDefault('deduction', null)->setAllowedTypes('deduction', ['bool', 'null'])
            ->setRequired('donneesBancaires')->setAllowedTypes('donneesBancaires', ['array', DonneesBancairesDto::class])->setNormalizer('donneesBancaires', function (Options $options, $value) {
                if ($value instanceof DonneesBancairesDto) {
                    return $value;
                }

                return DonneesBancairesDto::createFromArray($value);
            })
            ->setDefault('horizonInvestissement', null)->setAllowedTypes('horizonInvestissement', ['array', TrHorizonInvestissementDto::class, 'null'])->setNormalizer('horizonInvestissement', function (Options $options, $value) {
                if ($value instanceof TrHorizonInvestissementDto || null === $value) {
                    return $value;
                }

                return TrHorizonInvestissementDto::createFromArray($value);
            })
            ->setRequired('modeInvestissement')->setAllowedTypes('modeInvestissement', ['string'])
            ->setRequired('modePaiement')->setAllowedTypes('modePaiement', ['string'])
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
            ->setDefault('periodicite', null)->setAllowedTypes('periodicite', ['string', 'null'])
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
            ->setDefault('rum', null)->setAllowedTypes('rum', ['string', 'null'])
            ->setDefault('typeVersement', null)->setAllowedTypes('typeVersement', ['string', 'null'])
            ->setRequired('typeSignature')->setAllowedTypes('typeSignature', ['string'])->setAllowedValues('typeSignature', function ($value) {
                return in_array($value, [ProjetInvestissement::TYPE_SIGNATURE_ELECTRONIQUE, ProjetInvestissement::TYPE_SIGNATURE_PAPIER]);
            })
            ->setDefault('tauxDerogatoire', null)->setAllowedTypes('tauxDerogatoire', ['float', 'null'])
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
            ->setConserverIban($resolvedOptions['conserverIban'])
            ->setContratId($resolvedOptions['contratId'])
            ->setDateSignatureSepa($resolvedOptions['dateSignatureSepa'])
            ->setDonneesBancaires($resolvedOptions['donneesBancaires'])
            ->setHorizonInvestissement($resolvedOptions['horizonInvestissement'])
            ->setModeInvestissement($resolvedOptions['modeInvestissement'])
            ->setModePaiement($resolvedOptions['modePaiement'])
            ->setMontant($resolvedOptions['montant'])
            ->setOrigineDesFonds($resolvedOptions['origineDesFonds'])
            ->setPayeur($resolvedOptions['payeur'])
            ->setPeriodicite($resolvedOptions['periodicite'])
            ->setRepartitionInvestissement($resolvedOptions['repartitionInvestissement'])
            ->setReponsesSupportStructure($resolvedOptions['reponsesSupportStructure'])
            ->setRum($resolvedOptions['rum'])
            ->setTypeVersement($resolvedOptions['typeVersement'])
            ->setTypeSignature($resolvedOptions['typeSignature'])
            ->setTauxDerogatoire($resolvedOptions['tauxDerogatoire'])
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
     * @return bool|null
     */
    public function getConserverIban(): ?bool
    {
        return $this->conserverIban;
    }

    /**
     * @param bool|null $conserverIban
     *
     * @return self
     */
    public function setConserverIban(?bool $conserverIban): self
    {
        $this->conserverIban = $conserverIban;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContratId(): ?string
    {
        return $this->contratId;
    }

    /**
     * @param string|null $contratId
     *
     * @return self
     */
    public function setContratId(?string $contratId): self
    {
        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return DonneesBancairesDto|null
     */
    public function getDonneesBancaires(): ?DonneesBancairesDto
    {
        return $this->donneesBancaires;
    }

    /**
     * @param DonneesBancairesDto|null $donneesBancaires
     *
     * @return self
     */
    public function setDonneesBancaires(?DonneesBancairesDto $donneesBancaires): self
    {
        $this->donneesBancaires = $donneesBancaires;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModeInvestissement(): ?string
    {
        return $this->modeInvestissement;
    }

    /**
     * @param string|null $modeInvestissement
     *
     * @return self
     */
    public function setModeInvestissement(?string $modeInvestissement): self
    {
        $this->modeInvestissement = $modeInvestissement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModePaiement(): ?string
    {
        return $this->modePaiement;
    }

    /**
     * @param string|null $modePaiement
     *
     * @return self
     */
    public function setModePaiement(?string $modePaiement): self
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * @param float|null $montant
     *
     * @return self
     */
    public function setMontant(?float $montant): self
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
     * @return string|null
     */
    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    /**
     * @param string|null $periodicite
     *
     * @return self
     */
    public function setPeriodicite(?string $periodicite): self
    {
        $this->periodicite = $periodicite;

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
     * @return string|null
     */
    public function getTypeVersement(): ?string
    {
        return $this->typeVersement;
    }

    /**
     * @param string|null $typeVersement
     *
     * @return self
     */
    public function setTypeVersement(?string $typeVersement): self
    {
        $this->typeVersement = $typeVersement;

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
     * @return  \DateTime|null
     */
    public function getDateSignatureSepa(): ?\DateTime
    {
        return $this->dateSignatureSepa;
    }

    /**
     * @param  \DateTime|null  $dateSignatureSepa
     *
     * @return  self
     */
    public function setDateSignatureSepa(?\DateTime $dateSignatureSepa): self
    {
        $this->dateSignatureSepa = $dateSignatureSepa;

        return $this;
    }

    /**
     * @return  bool|null
     */
    public function getDeduction(): ?bool
    {
        return $this->deduction;
    }

    /**
     * @param  bool|null  $deduction
     *
     * @return  self
     */
    public function setDeduction(?bool $deduction): self
    {
        $this->deduction = $deduction;

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

    /**
     * @return  string|null
     */
    public function getRum(): ?string
    {
        return $this->rum;
    }

    /**
     * @param  string|null  $rum
     *
     * @return  self
     */
    public function setRum(?string $rum): self
    {
        $this->rum = $rum;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeSignature(): ?string
    {
        return $this->typeSignature;
    }

    /**
     * @param  string|null  $typeSignature
     *
     * @return  self
     */
    public function setTypeSignature(?string $typeSignature): self
    {
        $this->typeSignature = $typeSignature;

        return $this;
    }

    /**
     * Get the value of tauxDerogatoire
     *
     * @return  float|null
     */
    public function getTauxDerogatoire(): ?float
    {
        return $this->tauxDerogatoire;
    }

    /**
     * Set the value of tauxDerogatoire
     *
     * @param  float|null  $tauxDerogatoire
     *
     * @return  self
     */
    public function setTauxDerogatoire(?float $tauxDerogatoire): self
    {
        $this->tauxDerogatoire = $tauxDerogatoire;

        return $this;
    }
}
