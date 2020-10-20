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

class ClientDto
{
    /**
     * @var CapaciteEpargne|null
     */
    private $capaciteEpargne;

    /**
     * @var DepensesDto|null
     */
    private $depenses;

    /**
     * @var SituationProfessionnelleDto
     */
    private $situationProfessionnelle;

    /**
     * @var EtatCivilDto
     */
    private $etatCivil;

    /**
     * @var string
     */
    private $dispositionParticuliere;

    /**
     * @var InfoFiscalesDto|null
     */
    private $informationsFiscales;

    /**
     * @var IdentiteFiscaleDto|null
     */
    private $identiteFiscaleHorsFranceEtUSA1;

    /**
     * @var IdentiteFiscaleDto|null
     */
    private $identiteFiscaleHorsFranceEtUSA2;

    /**
     * @var string|null
     */
    private $numeroIdentificationFiscalUS;

    /**
     * @var bool|null
     */
    private $residentFiscalOuCitoyenUs;

    /**
     * @var array|null
     */
    private $patrimoine;

    /**
     * @var array|null
     */
    private $revenus;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('capaciteEpargne', null)->setAllowedTypes('capaciteEpargne', ['array', CapaciteEpargne::class, 'null'])->setNormalizer('capaciteEpargne', function (Options $options, $value) {
                if ($value instanceof CapaciteEpargne || null === $value) {
                    return $value;
                }

                return CapaciteEpargne::createFromArray($value);
            })
            ->setDefault('depenses', null)->setAllowedTypes('depenses', ['array', DepensesDto::class, 'null'])->setNormalizer('depenses', function (Options $options, $value) {
                if ($value instanceof DepensesDto || null === $value) {
                    return $value;
                }

                return DepensesDto::createFromArray($value);
            })
            ->setRequired('situationProfessionnelle')->setAllowedTypes('situationProfessionnelle', ['array', SituationProfessionnelleDto::class])->setNormalizer('situationProfessionnelle', function (Options $options, $value) {
                if ($value instanceof SituationProfessionnelleDto) {
                    return $value;
                }

                return SituationProfessionnelleDto::createFromArray($value);
            })
            ->setRequired('etatCivil')->setAllowedTypes('etatCivil', ['array', EtatCivilDto::class])->setNormalizer('etatCivil', function (Options $options, $value) {
                if ($value instanceof EtatCivilDto) {
                    return $value;
                }

                return EtatCivilDto::createFromArray($value);
            })
            ->setDefault('dispositionParticuliere', null)->setAllowedTypes('dispositionParticuliere', ['string', 'null'])
            ->setDefault('informationsFiscales', null)->setAllowedTypes('informationsFiscales', ['array', InfoFiscalesDto::class, 'null'])->setNormalizer('informationsFiscales', function (Options $options, $value) {
                if ($value instanceof InfoFiscalesDto || null === $value) {
                    return $value;
                }

                return InfoFiscalesDto::createFromArray($value);
            })
            ->setDefault('identiteFiscaleHorsFranceEtUSA1', null)->setAllowedTypes('identiteFiscaleHorsFranceEtUSA1', ['array', IdentiteFiscaleDto::class, 'null'])->setNormalizer('identiteFiscaleHorsFranceEtUSA1', function (Options $options, $value) {
                if ($value instanceof IdentiteFiscaleDto || null === $value) {
                    return $value;
                }

                return IdentiteFiscaleDto::createFromArray($value);
            })
            ->setDefault('identiteFiscaleHorsFranceEtUSA2', null)->setAllowedTypes('identiteFiscaleHorsFranceEtUSA2', ['array', IdentiteFiscaleDto::class, 'null'])->setNormalizer('identiteFiscaleHorsFranceEtUSA2', function (Options $options, $value) {
                if ($value instanceof IdentiteFiscaleDto || null === $value) {
                    return $value;
                }

                return IdentiteFiscaleDto::createFromArray($value);
            })
            ->setDefault('numeroIdentificationFiscalUS', null)->setAllowedTypes('numeroIdentificationFiscalUS', ['string', 'null'])
            ->setDefault('residentFiscalOuCitoyenUs', null)->setAllowedTypes('residentFiscalOuCitoyenUs', ['bool', 'null'])
            ->setDefault('patrimoine', null)->setAllowedTypes('patrimoine', ['array', 'null'])->setNormalizer('patrimoine', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$reponse) {
                    if ($reponse instanceof PatrimoineDto) {
                        continue;
                    }

                    $reponse = PatrimoineDto::createFromArray($reponse);
                }

                return $value;
            })
            ->setDefault('revenus', null)->setAllowedTypes('revenus', ['array', 'null'])->setNormalizer('revenus', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$reponse) {
                    if ($reponse instanceof RevenusDto) {
                        continue;
                    }

                    $reponse = RevenusDto::createFromArray($reponse);
                }

                return $value;
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
            ->setCapaciteEpargne($resolvedOptions['capaciteEpargne'])
            ->setDepenses($resolvedOptions['depenses'])
            ->setSituationProfessionnelle($resolvedOptions['situationProfessionnelle'])
            ->setEtatCivil($resolvedOptions['etatCivil'])
            ->setDispositionParticuliere($resolvedOptions['dispositionParticuliere'])
            ->setInformationsFiscales($resolvedOptions['informationsFiscales'])
            ->setIdentiteFiscaleHorsFranceEtUSA1($resolvedOptions['identiteFiscaleHorsFranceEtUSA1'])
            ->setIdentiteFiscaleHorsFranceEtUSA2($resolvedOptions['identiteFiscaleHorsFranceEtUSA2'])
            ->setNumeroIdentificationFiscalUS($resolvedOptions['numeroIdentificationFiscalUS'])
            ->setResidentFiscalOuCitoyenUs($resolvedOptions['residentFiscalOuCitoyenUs'])
            ->setPatrimoine($resolvedOptions['patrimoine'])
            ->setRevenus($resolvedOptions['revenus'])
        ;
    }

    /**
     * @return CapaciteEpargne|null
     */
    public function getCapaciteEpargne(): ?CapaciteEpargne
    {
        return $this->capaciteEpargne;
    }

    /**
     * @param CapaciteEpargne|null $capaciteEpargne
     *
     * @return self
     */
    public function setCapaciteEpargne(?CapaciteEpargne $capaciteEpargne): self
    {
        $this->capaciteEpargne = $capaciteEpargne;

        return $this;
    }

    /**
     * @return DepensesDto|null
     */
    public function getDepenses(): ?DepensesDto
    {
        return $this->depenses;
    }

    /**
     * @param DepensesDto|null $depenses
     *
     * @return self
     */
    public function setDepenses(?DepensesDto $depenses): self
    {
        $this->depenses = $depenses;

        return $this;
    }

    /**
     * @return SituationProfessionnelleDto
     */
    public function getSituationProfessionnelle(): SituationProfessionnelleDto
    {
        return $this->situationProfessionnelle;
    }

    /**
     * @param SituationProfessionnelleDto $situationProfessionnelle
     *
     * @return self
     */
    public function setSituationProfessionnelle(SituationProfessionnelleDto $situationProfessionnelle): self
    {
        $this->situationProfessionnelle = $situationProfessionnelle;

        return $this;
    }

    /**
     * @return EtatCivilDto
     */
    public function getEtatCivil(): EtatCivilDto
    {
        return $this->etatCivil;
    }

    /**
     * @param EtatCivilDto $etatCivil
     *
     * @return self
     */
    public function setEtatCivil(EtatCivilDto $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDispositionParticuliere(): ?string
    {
        return $this->dispositionParticuliere;
    }

    /**
     * @param string|null $dispositionParticuliere
     *
     * @return self
     */
    public function setDispositionParticuliere(?string $dispositionParticuliere): self
    {
        $this->dispositionParticuliere = $dispositionParticuliere;

        return $this;
    }

    /**
     * @return InfoFiscalesDto|null
     */
    public function getInformationsFiscales(): ?InfoFiscalesDto
    {
        return $this->informationsFiscales;
    }

    /**
     * @param InfoFiscalesDto|null $informationsFiscales
     *
     * @return self
     */
    public function setInformationsFiscales(?InfoFiscalesDto $informationsFiscales): self
    {
        $this->informationsFiscales = $informationsFiscales;

        return $this;
    }

    /**
     * @return IdentiteFiscaleDto|null
     */
    public function getIdentiteFiscaleHorsFranceEtUSA1(): ?IdentiteFiscaleDto
    {
        return $this->identiteFiscaleHorsFranceEtUSA1;
    }

    /**
     * @param IdentiteFiscaleDto|null $identiteFiscaleHorsFranceEtUSA1
     *
     * @return self
     */
    public function setIdentiteFiscaleHorsFranceEtUSA1(?IdentiteFiscaleDto $identiteFiscaleHorsFranceEtUSA1): self
    {
        $this->identiteFiscaleHorsFranceEtUSA1 = $identiteFiscaleHorsFranceEtUSA1;

        return $this;
    }

    /**
     * @return IdentiteFiscaleDto|null
     */
    public function getIdentiteFiscaleHorsFranceEtUSA2(): ?IdentiteFiscaleDto
    {
        return $this->identiteFiscaleHorsFranceEtUSA2;
    }

    /**
     * @param IdentiteFiscaleDto|null $identiteFiscaleHorsFranceEtUSA2
     *
     * @return self
     */
    public function setIdentiteFiscaleHorsFranceEtUSA2(?IdentiteFiscaleDto $identiteFiscaleHorsFranceEtUSA2): self
    {
        $this->identiteFiscaleHorsFranceEtUSA2 = $identiteFiscaleHorsFranceEtUSA2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroIdentificationFiscalUS(): ?string
    {
        return $this->numeroIdentificationFiscalUS;
    }

    /**
     * @param string|null $numeroIdentificationFiscalUS
     *
     * @return self
     */
    public function setNumeroIdentificationFiscalUS(?string $numeroIdentificationFiscalUS): self
    {
        $this->numeroIdentificationFiscalUS = $numeroIdentificationFiscalUS;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResidentFiscalOuCitoyenUs(): ?bool
    {
        return $this->residentFiscalOuCitoyenUs;
    }

    /**
     * @param bool|null $residentFiscalOuCitoyenUs
     *
     * @return self
     */
    public function setResidentFiscalOuCitoyenUs(?bool $residentFiscalOuCitoyenUs): self
    {
        $this->residentFiscalOuCitoyenUs = $residentFiscalOuCitoyenUs;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPatrimoine(): ?array
    {
        return $this->patrimoine;
    }

    /**
     * @param array|null $patrimoine
     *
     * @return self
     */
    public function setPatrimoine(?array $patrimoine): self
    {
        $this->patrimoine = $patrimoine;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRevenus(): ?array
    {
        return $this->revenus;
    }

    /**
     * @param array|null $revenus
     *
     * @return self
     */
    public function setRevenus(?array $revenus): self
    {
        $this->revenus = $revenus;

        return $this;
    }
}
