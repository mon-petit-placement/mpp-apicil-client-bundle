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

class ModeleDeVersement
{
    public const PERIODICITE_MENSUELLE = 'Mensuelle';
    public const PERIODICITE_TRIMESTRIELLE = 'Trimestrielle';
    public const PERIODICITE_SEMESTRIELLE = 'Semestrielle';
    public const PERIODICITE_ANNUELLE = 'Annuelle';

    public const MODE_INVESTISSEMENT_CHOIX = 'CHOIX';
    public const MODE_INVESTISSEMENT_PRORATA = 'PRORATA';

    public const MODE_PAIEMENT_C = 'C';
    public const MODE_PAIEMENT_P = 'P';
    public const MODE_PAIEMENT_V = 'V';

    public const TYPE_VERSEMENT_COMPLEMENTAIRE = 'COMPLEMENTAIRE';
    public const TYPE_VERSEMENT_PROGRAMME = 'PROGRAMME';

    /**
     * @var float
     */
    private $montant;

    /**
     * @var string
     */
    private $periodicite;

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
     * @var bool
     */
    private $vpRepartitionSpecifique;

    /**
     * @var string|null
     */
    private $alliance;

    /**
     * @var bool|null
     */
    private $conserverIban;

    /**
     * @var int|null
     */
    private $contratId;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var string|null
     */
    private $modeInvestissement;

    /**
     * @var string|null
     */
    private $modePaiement;

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
    private $repartitionInvestissement;

    /**
     * @var string|null
     */
    private $typeVersement;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('montant')->setAllowedTypes('montant', ['float'])
            ->setDefault('periodicite', null)->setAllowedValues('periodicite', [self::PERIODICITE_MENSUELLE, self::PERIODICITE_TRIMESTRIELLE, self::PERIODICITE_SEMESTRIELLE, self::PERIODICITE_ANNUELLE])
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
            ->setRequired('vpRepartitionSpecifique')->setAllowedTypes('vpRepartitionSpecifique', ['bool'])
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
            ->setMontant($resolvedOptions['montant'])
            ->setPeriodicite($resolvedOptions['periodicite'])
            ->setPortefeuille($resolvedOptions['portefeuille'])
            ->setReponsesSupportStructure($resolvedOptions['reponsesSupportStructure'])
            ->setTauxDerogatoire($resolvedOptions['tauxDerogatoire'])
            ->setVpRepartitionSpecifique($resolvedOptions['vpRepartitionSpecifique'])
        ;
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
     * @return string
     */
    public function getPeriodicite(): string
    {
        return $this->periodicite;
    }

    /**
     * @param string $periodicite
     *
     * @return self
     */
    public function setPeriodicite(string $periodicite): self
    {
        $this->periodicite = $periodicite;

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

    /**
     * @return bool
     */
    public function getVpRepartitionSpecifique(): bool
    {
        return $this->vpRepartitionSpecifique;
    }

    /**
     * @param bool $vpRepartitionSpecifique
     *
     * @return self
     */
    public function setVpRepartitionSpecifique(bool $vpRepartitionSpecifique): self
    {
        $this->vpRepartitionSpecifique = $vpRepartitionSpecifique;

        return $this;
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
}
