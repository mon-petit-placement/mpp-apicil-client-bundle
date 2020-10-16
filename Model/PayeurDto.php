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

class PayeurDto
{
    /**
     * @var \DateTime
     */
    private $dateNaissance;

    /**
     * @var string|null
     */
    private $lienSiAutre;

    /**
     * @var LienParenteDto
     */
    private $lienSouscripteur;

    /**
     * @var VilleDto|null
     */
    private $lieuNaissance;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('dateNaissance')->setAllowedTypes('dateNaissance', [\DateTime::class, 'string'])->setNormalizer('dateNaissance', function (Options $options, $value) {
                if ($value instanceof \DateTime) {
                    return $value;
                }

                return \DateTime::createFromFormat('Y-m-d', $value);
            })
            ->setDefault('lienSiAutre', null)->setAllowedTypes('lienSiAutre', ['string', null])
            ->setRequired('lienSouscripteur')->setAllowedTypes('lienSouscripteur', ['array', LienParenteDto::class])->setNormalizer('lienSouscripteur', function (Options $options, $value) {
                if ($value instanceof LienParenteDto) {
                    return $value;
                }

                return LienParenteDto::createFromArray($value);
            })
            ->setDefault('lieuNaissance', null)->setAllowedTypes('lieuNaissance', ['array', VilleDto::class, 'null'])->setNormalizer('lieuNaissance', function (Options $options, $value) {
                if ($value instanceof VilleDto || null === $value) {
                    return $value;
                }

                return VilleDto::createFromArray($value);
            })
            ->setRequired('nom')->setAllowedTypes('nom', ['string'])
            ->setRequired('prenom')->setAllowedTypes('prenom', ['string'])
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
            ->setDateNaissance($resolvedOptions['dateNaissance'])
            ->setLienSiAutre($resolvedOptions['lienSiAutre'])
            ->setLienSouscripteur($resolvedOptions['lienSouscripteur'])
            ->setLieuNaissance($resolvedOptions['lieuNaissance'])
            ->setNom($resolvedOptions['nom'])
            ->setPrenom($resolvedOptions['prenom'])
        ;
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
     * @return string|null
     */
    public function getLienSiAutre(): ?string
    {
        return $this->lienSiAutre;
    }

    /**
     * @param string|null $lienSiAutre
     *
     * @return self
     */
    public function setLienSiAutre(?string $lienSiAutre): self
    {
        $this->lienSiAutre = $lienSiAutre;

        return $this;
    }

    /**
     * @return LienParenteDto
     */
    public function getLienSouscripteur(): LienParenteDto
    {
        return $this->lienSouscripteur;
    }

    /**
     * @param LienParenteDto $lienSouscripteur
     *
     * @return self
     */
    public function setLienSouscripteur(LienParenteDto $lienSouscripteur): self
    {
        $this->lienSouscripteur = $lienSouscripteur;

        return $this;
    }

    /**
     * @return VilleDto|null
     */
    public function getLieuNaissance(): ?VilleDto
    {
        return $this->lieuNaissance;
    }

    /**
     * @param VilleDto|null $lieuNaissance
     *
     * @return self
     */
    public function setLieuNaissance(?VilleDto $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

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
}
