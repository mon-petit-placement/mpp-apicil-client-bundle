<?php

namespace Mpp\ApicilClientBundle\Model;

use phpDocumentor\Reflection\Types\Self_;
use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RachatPartielDto
{
    public const MODE_DESINVESTISSEMENT_CHOIX = 'CHOIX';
    public const MODE_DESINVESTISSEMENT_PRORATA = 'PRORATA';
    public const MODE_DESINVESTISSEMENT_CONTRAT = 'CONTRAT';

    public const MODE_PAIEMENT_C = 'C';
    public const MODE_PAIEMENT_P = 'P';
    public const MODE_PAIEMENT_V = 'V';
    public const MODE_PAIEMENT_T = 'T';

    public const TYPE_RACHAT_PARTIEL_PONCTUEL = 'PONCTUEL';
    public const TYPE_RACHAT_PARTIEL_PROGRAMME = 'PROGRAMME';
    public const TYPE_RACHAT_PARTIEL_SUPPRESSION_PROGRAMME = 'SUPPRESSION_PROGRAMME';

    public const TYPE_RACHAT_BRUT = 'BRUT';
    public const TYPE_RACHAT_NET = 'NET';
    public const TYPE_RACHAT_CHOIX = 'CHOIX';

    public const OPTION_FISCALE_LIBERATOIRE = 'LIBERATOIRE';
    public const OPTION_FISCALE_DECLARATION = 'DECLARATION';

    public const TYPE_SIGNATURE_ELECTRONIQUE = 'ELECTRONIQUE';

    /**
     * @var string|null
     */
    private $contratId;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var string|null
     */
    private $modePaiement;

    /**
     * @var DestinationDesFondsDto|null
     */
    private $destinationDesFonds;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var string|null
     */
    private $modeDesinvestissement;

    /**
     * @var array|null
     */
    private $repartitionDesinvestissement;

    /**
     * @var string|null
     */
    private $typeRachatPartiel;

    /**
     * @var string|null
     */
    private $typeRachat;

    /**
     * @var string|null
     */
    private $optionFiscale;

    /**
     * @var string|null
     */
    private $commentaireClientRachatPrecoce;

    /**
     * @var string|null
     */
    private $typeSignature;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('contratId')->setAllowedTypes('contratId', ['int', 'string', 'null'])->setNormalizer('contratId', function (Options $options, $value) {
                if (is_int($value)) {
                    return (string) $value;
                }

                return $value;
            })
            ->setRequired('montant')->setAllowedTypes('montant', ['float'])
            ->setRequired('modePaiement')->setAllowedTypes('modePaiement', ['string'])
            ->setRequired('destinationDesFonds')->setAllowedTypes('destinationDesFonds', ['array', DestinationDesFondsDto::class])->setNormalizer('destinationDesFonds', function (Options $options, $value) {
                if ($value instanceof DestinationDesFondsDto) {
                    return $value;
                }

                return DestinationDesFondsDto::createFromArray($value);
            })
            ->setRequired('donneesBancaires')->setAllowedTypes('donneesBancaires', ['array', DonneesBancairesDto::class])->setNormalizer('donneesBancaires', function (Options $options, $value) {
                if ($value instanceof DonneesBancairesDto) {
                    return $value;
                }

                return DonneesBancairesDto::createFromArray($value);
            })
            ->setRequired('modeDesinvestissement')->setAllowedTypes('modeDesinvestissement', ['string'])
            ->setRequired('repartitionDesinvestissement')->setAllowedTypes('repartitionDesinvestissement', ['array'])->setNormalizer('repartitionDesinvestissement', function (Options $options, $value) {
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
            ->setDefault('typeRachatPartiel', null)->setAllowedTypes('typeRachatPartiel', ['string', 'null'])
            ->setRequired('typeRachat')->setAllowedTypes('typeRachat', ['string'])
            ->setDefault('optionFiscale', null)->setAllowedTypes('optionFiscale', ['string', 'null'])
            ->setDefault('commentaireClientRachatPrecoce', null)->setAllowedTypes('commentaireClientRachatPrecoce', ['string', 'null'])
            ->setRequired('typeSignature')->setAllowedTypes('typeSignature', ['string'])
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
            ->setContratId($resolvedOptions['contratId'])
            ->setMontant($resolvedOptions['montant'])
            ->setModePaiement($resolvedOptions['modePaiement'])
            ->setDestinationDesFonds($resolvedOptions['destinationDesFonds'])
            ->setDonneesBancaires($resolvedOptions['donneesBancaires'])
            ->setModeDesinvestissement($resolvedOptions['modeDesinvestissement'])
            ->setRepartitionDesinvestissement($resolvedOptions['repartitionDesinvestissement'])
            ->setTypeRachatPartiel($resolvedOptions['typeRachatPartiel'])
            ->setTypeRachat($resolvedOptions['typeRachat'])
            ->setOptionFiscale($resolvedOptions['optionFiscale'])
            ->setCommentaireClientRachatPrecoce($resolvedOptions['commentaireClientRachatPrecoce'])
            ->setTypeSignature($resolvedOptions['typeSignature'])
        ;
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
    public function getModeDesinvestissement(): ?string
    {
        return $this->modeDesinvestissement;
    }

    /**
     * @param string|null $modeDesinvestissement
     *
     * @return self
     */
    public function setModeDesinvestissement(?string $modeDesinvestissement): self
    {
        $this->modeDesinvestissement = $modeDesinvestissement;

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
     * @return string|null
     */
    public function getTypeRachat(): ?string
    {
        return $this->typeRachat;
    }

    /**
     * @param string|null $typeRachat
     *
     * @return self
     */
    public function setTypeRachat(?string $typeRachat): self
    {
        $this->typeRachat = $typeRachat;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeRachatPartiel(): ?string
    {
        return $this->typeRachatPartiel;
    }

    /**
     * @param  string|null  $typeRachatPartiel
     *
     * @return  self
     */
    public function setTypeRachatPartiel(?string $typeRachatPartiel): self
    {
        $this->typeRachatPartiel = $typeRachatPartiel;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getOptionFiscale(): ?string
    {
        return $this->optionFiscale;
    }

    /**
     * @param  string|null  $optionFiscale
     *
     * @return  self
     */
    public function setOptionFiscale(?string $optionFiscale): self
    {
        $this->optionFiscale = $optionFiscale;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getCommentaireClientRachatPrecoce(): ?string
    {
        return $this->commentaireClientRachatPrecoce;
    }

    /**
     * @param  string|null  $commentaireClientRachatPrecoce
     *
     * @return  self
     */
    public function setCommentaireClientRachatPrecoce(?string $commentaireClientRachatPrecoce): self
    {
        $this->commentaireClientRachatPrecoce = $commentaireClientRachatPrecoce;

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
     * @return  DestinationDesFondsDto|null
     */
    public function getDestinationDesFonds(): ?DestinationDesFondsDto
    {
        return $this->destinationDesFonds;
    }

    /**
     * @param  DestinationDesFondsDto|null  $destinationDesFonds
     *
     * @return  self
     */
    public function setDestinationDesFonds(?DestinationDesFondsDto $destinationDesFonds): self
    {
        $this->destinationDesFonds = $destinationDesFonds;

        return $this;
    }
}
