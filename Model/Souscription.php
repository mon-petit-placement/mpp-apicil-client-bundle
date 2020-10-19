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

class Souscription
{
    /**
     * @var ClauseBeneficiaireDto|null
     */
    private $clauseBeneficiaire;

    /**
     * @var DonneesBancairesDto|null
     */
    private $donneesBancaires;

    /**
     * @var string|null
     */
    private $dureeContrat;

    /**
     * @var FraisSurContratDto|null
     */
    private $fraisSurContrat;

    /**
     * @var bool|null
     */
    private $garantiePlancher;

    /**
     * @var bool|null
     */
    private $jddHeberge;

    /**
     * @var int|null
     */
    private $nombreTransfertContrat;

    /**
     * @var ObjectifInvestissementDto|null
     */
    private $objectifInvestissement;

    /**
     * @var int|null
     */
    private $precisionDureeContrat;

    /**
     * @var SouscriptionRetraiteDto|null
     */
    private $souscriptionRetraite;

    /**
     * @var StopLossDto|null
     */
    private $stopLoss;

    /**
     * @var bool|null
     */
    private $transfertContrat;

    /**
     * @var ModeleDeVersementInitial|null
     */
    private $versementInitial;

    /**
     * @var ModeleDeVersement|null
     */
    private $versementProgramme;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('clauseBeneficiaire', null)->setAllowedTypes('clauseBeneficiaire', ['array', ClauseBeneficiaireDto::class, 'null'])->setNormalizer('clauseBeneficiaire', function (Options $options, $value) {
                if ($value instanceof ClauseBeneficiaireDto || null === $value) {
                    return $value;
                }

                return ClauseBeneficiaireDto::createFromArray($value);
            })
            ->setDefault('donneesBancaires', null)->setAllowedTypes('donneesBancaires', ['array', DonneesBancairesDto::class, 'null'])->setNormalizer('donneesBancaires', function (Options $options, $value) {
                if ($value instanceof DonneesBancairesDto || null === $value) {
                    return $value;
                }

                return DonneesBancairesDto::createFromArray($value);
            })
            ->setDefault('dureeContrat', null)->setAllowedTypes('dureeContrat', ['string', 'null'])
            ->setDefault('fraisSurContrat', null)->setAllowedTypes('fraisSurContrat', ['array', FraisSurContratDto::class, 'null'])->setNormalizer('fraisSurContrat', function (Options $options, $value) {
                if ($value instanceof FraisSurContratDto || null === $value) {
                    return $value;
                }

                return FraisSurContratDto::createFromArray($value);
            })
            ->setDefault('garantiePlancher', null)->setAllowedTypes('garantiePlancher', ['bool', 'null'])
            ->setDefault('jddHeberge', null)->setAllowedTypes('jddHeberge', ['bool', 'null'])
            ->setDefault('nombreTransfertContrat', null)->setAllowedTypes('nombreTransfertContrat', ['int', 'null'])
            ->setDefault('objectifInvestissement', null)->setAllowedTypes('objectifInvestissement', ['array', ObjectifInvestissementDto::class, 'null'])->setNormalizer('objectifInvestissement', function (Options $options, $value) {
                if ($value instanceof ObjectifInvestissementDto || null === $value) {
                    return $value;
                }

                return ObjectifInvestissementDto::createFromArray($value);
            })
            ->setDefault('precisionDureeContrat', null)->setAllowedTypes('precisionDureeContrat', ['int', 'null'])
            ->setDefault('souscriptionRetraite', null)->setAllowedTypes('souscriptionRetraite', ['array', SouscriptionRetraiteDto::class, 'null'])->setNormalizer('souscriptionRetraite', function (Options $options, $value) {
                if ($value instanceof SouscriptionRetraiteDto || null === $value) {
                    return $value;
                }

                return SouscriptionRetraiteDto::createFromArray($value);
            })
            ->setDefault('stopLoss', null)->setAllowedTypes('stopLoss', ['array', StopLossDto::class, 'null'])->setNormalizer('stopLoss', function (Options $options, $value) {
                if ($value instanceof StopLossDto || null === $value) {
                    return $value;
                }

                return StopLossDto::createFromArray($value);
            })
            ->setDefault('transfertContrat', null)->setAllowedTypes('transfertContrat', ['bool', 'null'])
            ->setRequired('versementInitial')->setAllowedTypes('versementInitial', ['array', ModeleDeVersementInitial::class])->setNormalizer('versementInitial', function (Options $options, $value) {
                if ($value instanceof ModeleDeVersementInitial) {
                    return $value;
                }

                return ModeleDeVersementInitial::createFromArray($value);
            })
            ->setDefault('versementProgramme', null)->setAllowedTypes('versementProgramme', ['array', ModeleDeVersement::class, 'null'])->setNormalizer('versementProgramme', function (Options $options, $value) {
                if ($value instanceof ModeleDeVersement || null === $value) {
                    return $value;
                }

                return ModeleDeVersement::createFromArray($value);
            })
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
            ->setClauseBeneficiaire($resolvedOptions['clauseBeneficiaire'])
            ->setDonneesBancaires($resolvedOptions['donneesBancaires'])
            ->setDureeContrat($resolvedOptions['dureeContrat'])
            ->setFraisSurContrat($resolvedOptions['fraisSurContrat'])
            ->setGarantiePlancher($resolvedOptions['garantiePlancher'])
            ->setJddHeberge($resolvedOptions['jddHeberge'])
            ->setNombreTransfertContrat($resolvedOptions['nombreTransfertContrat'])
            ->setObjectifInvestissement($resolvedOptions['objectifInvestissement'])
            ->setPrecisionDureeContrat($resolvedOptions['precisionDureeContrat'])
            ->setSouscriptionRetraite($resolvedOptions['souscriptionRetraite'])
            ->setStopLoss($resolvedOptions['stopLoss'])
            ->setTransfertContrat($resolvedOptions['transfertContrat'])
            ->setVersementInitial($resolvedOptions['versementInitial'])
            ->setVersementProgramme($resolvedOptions['versementProgramme'])
            ;
    }
    
    /**
     * @return ClauseBeneficiaireDto|null
     */
    public function getClauseBeneficiaire(): ?ClauseBeneficiaireDto
    {
        return $this->clauseBeneficiaire;
    }

    /**
     * @param ClauseBeneficiaireDto|null $clauseBeneficiaire
     *
     * @return self
     */
    public function setClauseBeneficiaire(?ClauseBeneficiaireDto $clauseBeneficiaire): self
    {
        $this->clauseBeneficiaire = $clauseBeneficiaire;

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
    public function getDureeContrat(): ?string
    {
        return $this->dureeContrat;
    }

    /**
     * @param string|null $dureeContrat
     *
     * @return self
     */
    public function setDureeContrat(?string $dureeContrat): self
    {
        $this->dureeContrat = $dureeContrat;

        return $this;
    }

    /**
     * @return FraisSurContratDto|null
     */
    public function getFraisSurContrat(): ?FraisSurContratDto
    {
        return $this->fraisSurContrat;
    }

    /**
     * @param FraisSurContratDto|null $fraisSurContrat
     *
     * @return self
     */
    public function setFraisSurContrat(?FraisSurContratDto $fraisSurContrat): self
    {
        $this->fraisSurContrat = $fraisSurContrat;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGarantiePlancher(): ?bool
    {
        return $this->garantiePlancher;
    }

    /**
     * @param bool|null $garantiePlancher
     *
     * @return self
     */
    public function setGarantiePlancher(?bool $garantiePlancher): self
    {
        $this->garantiePlancher = $garantiePlancher;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJddHeberge(): ?bool
    {
        return $this->jddHeberge;
    }

    /**
     * @param bool|null $jddHeberge
     *
     * @return self
     */
    public function setJddHeberge(?bool $jddHeberge): Souscription
    {
        $this->jddHeberge = $jddHeberge;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombreTransfertContrat(): ?int
    {
        return $this->nombreTransfertContrat;
    }

    /**
     * @param int|null $nombreTransfertContrat
     *
     * @return self
     */
    public function setNombreTransfertContrat(?int $nombreTransfertContrat): Souscription
    {
        $this->nombreTransfertContrat = $nombreTransfertContrat;

        return $this;
    }

    /**
     * @return ObjectifInvestissementDto|null
     */
    public function getObjectifInvestissement(): ?ObjectifInvestissementDto
    {
        return $this->objectifInvestissement;
    }

    /**
     * @param ObjectifInvestissementDto|null $objectifInvestissement
     *
     * @return self
     */
    public function setObjectifInvestissement(?ObjectifInvestissementDto $objectifInvestissement): self
    {
        $this->objectifInvestissement = $objectifInvestissement;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrecisionDureeContrat(): ?int
    {
        return $this->precisionDureeContrat;
    }

    /**
     * @param int|null $precisionDureeContrat
     *
     * @return self
     */
    public function setPrecisionDureeContrat(?int $precisionDureeContrat): self
    {
        $this->precisionDureeContrat = $precisionDureeContrat;

        return $this;
    }

    /**
     * @return SouscriptionRetraiteDto|null
     */
    public function getSouscriptionRetraite(): ?SouscriptionRetraiteDto
    {
        return $this->souscriptionRetraite;
    }

    /**
     * @param SouscriptionRetraiteDto|null $souscriptionRetraite
     * @return self
     */
    public function setSouscriptionRetraite(?SouscriptionRetraiteDto $souscriptionRetraite): Souscription
    {
        $this->souscriptionRetraite = $souscriptionRetraite;

        return $this;
    }

    /**
     * @return StopLossDto|null
     */
    public function getStopLoss(): ?StopLossDto
    {
        return $this->stopLoss;
    }

    /**
     * @param StopLossDto|null $stopLoss
     *
     * @return self
     */
    public function setStopLoss(?StopLossDto $stopLoss): self
    {
        $this->stopLoss = $stopLoss;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTransfertContrat(): ?bool
    {
        return $this->transfertContrat;
    }

    /**
     * @param bool|null $transfertContrat
     * @return self
     */
    public function setTransfertContrat(?bool $transfertContrat): Souscription
    {
        $this->transfertContrat = $transfertContrat;

        return $this;
    }

    /**
     * @return modeleDeVersementInitial|null
     */
    public function getVersementInitial(): ?modeleDeVersementInitial
    {
        return $this->versementInitial;
    }

    /**
     * @param modeleDeVersementInitial|null $versementInitial
     *
     * @return self
     */
    public function setVersementInitial(?modeleDeVersementInitial $versementInitial): self
    {
        $this->versementInitial = $versementInitial;

        return $this;
    }

    /**
     * @return modeleDeVersement|null
     */
    public function getVersementProgramme(): ?modeleDeVersement
    {
        return $this->versementProgramme;
    }

    /**
     * @param modeleDeVersement|null $versementProgramme
     *
     * @return self
     */
    public function setVersementProgramme(?modeleDeVersement $versementProgramme): self
    {
        $this->versementProgramme = $versementProgramme;

        return $this;
    }
}
