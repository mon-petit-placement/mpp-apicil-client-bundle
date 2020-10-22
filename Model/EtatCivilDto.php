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

class EtatCivilDto
{
    /**
     * @var CiviliteDto
     */
    private $civilite;

    /**
     * @var \DateTime
     */
    private $dateNaissance;

    /**
     * @var NationaliteDto
     */
    private $nationalite;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string|null
     */
    private $nomNaissance;

    /**
     * @var int|null
     */
    private $nombreEnfants;

    /**
     * @var int
     */
    private $nombrePersonnesACharge;

    /**
     * @var PaysDto
     */
    private $pays;

    /**
     * @var array|null
     */
    private $personnesACharge;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var RegimeMatrimonialDto|null
     */
    private $regimeMatrimonial;

    /**
     * @var SituationFamilialeDto
     */
    private $situationFamiliale;

    /**
     * @var VilleNaissanceDto
     */
    private $villeNaissance;

    /**
     * @var DepartementDto
     */
    private $departementNaissance;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('civilite')->setAllowedTypes('civilite', ['array', CiviliteDto::class])->setNormalizer('civilite', function (Options $options, $value) {
                if ($value instanceof CiviliteDto) {
                    return $value;
                }

                return CiviliteDto::createFromArray($value);
            })
            ->setRequired('dateNaissance')->setAllowedTypes('dateNaissance', [\DateTime::class, 'string'])->setNormalizer('dateNaissance', function (Options $options, $value) {
                if ($value instanceof \DateTime) {
                    return $value;
                }

                return \DateTime::createFromFormat('Y-m-d', $value);
            })
            ->setRequired('nationalite')->setAllowedTypes('nationalite', ['array', NationaliteDto::class])->setNormalizer('nationalite', function (Options $options, $value) {
                if ($value instanceof NationaliteDto) {
                    return $value;
                }

                return NationaliteDto::createFromArray($value);
            })
            ->setRequired('nom')->setAllowedTypes('nom', ['string'])
            ->setDefault('nomNaissance', null)->setAllowedTypes('nomNaissance', ['string', 'null'])
            ->setDefault('nombreEnfants', null)->setAllowedTypes('nombreEnfants', ['int', 'null'])
            ->setRequired('nombrePersonnesACharge')->setAllowedTypes('nombrePersonnesACharge', ['int'])
            ->setRequired('pays')->setAllowedTypes('pays', ['array', PaysDto::class])->setNormalizer('pays', function (Options $options, $value) {
                if ($value instanceof PaysDto) {
                    return $value;
                }

                return PaysDto::createFromArray($value);
            })
            ->setDefault('personnesACharge', null)->setAllowedTypes('personnesACharge', ['array', 'null'])->setNormalizer('personnesACharge', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$reponse) {
                    if ($reponse instanceof PersonneAChargeDto) {
                        continue;
                    }

                    $reponse = PersonneAChargeDto::createFromArray($reponse);
                }

                return $value;
            })
            ->setRequired('prenom')->setAllowedTypes('prenom', ['string'])
            ->setDefault('regimeMatrimonial', null)->setAllowedTypes('regimeMatrimonial', ['array', RegimeMatrimonialDto::class, 'null'])->setNormalizer('regimeMatrimonial', function (Options $options, $value) {
                if ($value instanceof RegimeMatrimonialDto || null === $value) {
                    return $value;
                }

                return RegimeMatrimonialDto::createFromArray($value);
            })
            ->setRequired('situationFamiliale')->setAllowedTypes('situationFamiliale', ['array', SituationFamilialeDto::class])->setNormalizer('situationFamiliale', function (Options $options, $value) {
                if ($value instanceof SituationFamilialeDto) {
                    return $value;
                }

                return SituationFamilialeDto::createFromArray($value);
            })
            ->setRequired('villeNaissance')->setAllowedTypes('villeNaissance', ['array', VilleNaissanceDto::class])->setNormalizer('villeNaissance', function (Options $options, $value) {
                if ($value instanceof VilleNaissanceDto) {
                    return $value;
                }

                return VilleNaissanceDto::createFromArray($value);
            })
            ->setRequired('departementNaissance')->setAllowedTypes('departementNaissance', ['array', DepartementDto::class])->setNormalizer('departementNaissance', function (Options $options, $value) {
                if ($value instanceof DepartementDto) {
                    return $value;
                }

                return DepartementDto::createFromArray($value);
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
            ->setCivilite($resolvedOptions['civilite'])
            ->setDateNaissance($resolvedOptions['dateNaissance'])
            ->setNationalite($resolvedOptions['nationalite'])
            ->setNom($resolvedOptions['nom'])
            ->setNomNaissance($resolvedOptions['nomNaissance'])
            ->setNombreEnfants($resolvedOptions['nombreEnfants'])
            ->setNombrePersonnesACharge($resolvedOptions['nombrePersonnesACharge'])
            ->setPays($resolvedOptions['pays'])
            ->setPersonnesACharge($resolvedOptions['personnesACharge'])
            ->setPrenom($resolvedOptions['prenom'])
            ->setRegimeMatrimonial($resolvedOptions['regimeMatrimonial'])
            ->setSituationFamiliale($resolvedOptions['situationFamiliale'])
            ->setVilleNaissance($resolvedOptions['villeNaissance'])
            ->setDepartementNaissance($resolvedOptions['departementNaissance'])
        ;
    }

    /**
     * @return CiviliteDto
     */
    public function getCivilite(): CiviliteDto
    {
        return $this->civilite;
    }

    /**
     * @param CiviliteDto $civilite
     *
     * @return self
     */
    public function setCivilite(CiviliteDto $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance(): \DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(\DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return NationaliteDto
     */
    public function getNationalite(): NationaliteDto
    {
        return $this->nationalite;
    }

    /**
     * @param NationaliteDto $nationalite
     *
     * @return self
     */
    public function setNationalite(NationaliteDto $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    /**
     * @param string|null $nomNaissance
     *
     * @return self
     */
    public function setNomNaissance(?string $nomNaissance): self
    {
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombreEnfants(): ?int
    {
        return $this->nombreEnfants;
    }

    /**
     * @param int|null $nombreEnfants
     *
     * @return self
     */
    public function setNombreEnfants(?int $nombreEnfants): self
    {
        $this->nombreEnfants = $nombreEnfants;

        return $this;
    }

    /**
     * @return int
     */
    public function getNombrePersonnesACharge(): int
    {
        return $this->nombrePersonnesACharge;
    }

    /**
     * @param int $nombrePersonnesACharge
     *
     * @return self
     */
    public function setNombrePersonnesACharge(int $nombrePersonnesACharge): self
    {
        $this->nombrePersonnesACharge = $nombrePersonnesACharge;

        return $this;
    }

    /**
     * @return PaysDto
     */
    public function getPays(): PaysDto
    {
        return $this->pays;
    }

    /**
     * @param PaysDto $pays
     *
     * @return self
     */
    public function setPays(PaysDto $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPersonnesACharge(): ?array
    {
        return $this->personnesACharge;
    }

    /**
     * @param array|null $personnesACharge
     *
     * @return self
     */
    public function setPersonnesACharge(?array $personnesACharge): self
    {
        $this->personnesACharge = $personnesACharge;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return RegimeMatrimonialDto|null
     */
    public function getRegimeMatrimonial(): ?RegimeMatrimonialDto
    {
        return $this->regimeMatrimonial;
    }

    /**
     * @param RegimeMatrimonialDto|null $regimeMatrimonial
     *
     * @return self
     */
    public function setRegimeMatrimonial(?RegimeMatrimonialDto $regimeMatrimonial): self
    {
        $this->regimeMatrimonial = $regimeMatrimonial;

        return $this;
    }

    /**
     * @return SituationFamilialeDto
     */
    public function getSituationFamiliale(): SituationFamilialeDto
    {
        return $this->situationFamiliale;
    }

    /**
     * @param SituationFamilialeDto $situationFamiliale
     *
     * @return self
     */
    public function setSituationFamiliale(SituationFamilialeDto $situationFamiliale): self
    {
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    /**
     * @return VilleNaissanceDto
     */
    public function getVilleNaissance(): VilleNaissanceDto
    {
        return $this->villeNaissance;
    }

    /**
     * @param VilleNaissanceDto $villeNaissance
     *
     * @return self
     */
    public function setVilleNaissance(VilleNaissanceDto $villeNaissance): self
    {
        $this->villeNaissance = $villeNaissance;

        return $this;
    }

    /**
     * @return DepartementDto
     */
    public function getDepartementNaissance(): DepartementDto
    {
        return $this->departementDeNaissance;
    }

    /**
     * @param DepartementDto $departementNaissance
     * @return EtatCivilDto
     */
    public function setDepartementNaissance(DepartementDto $departementNaissance): EtatCivilDto
    {
        $this->departementDeNaissance = $departementNaissance;
        return $this;
    }
}
