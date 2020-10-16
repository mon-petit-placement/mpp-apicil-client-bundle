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

class PersonneAChargeDto
{
    /**
     * @var \DateTime
     */
    private $dateNaissance;

    /**
     * @var LienFamilialDto
     */
    private $lienFamilial;

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
            ->setRequired('lienFamilial')->setAllowedTypes('lienFamilial', ['array', LienFamilialDto::class])->setNormalizer('lienFamilial', function (Options $options, $value) {
                if ($value instanceof LienFamilialDto) {
                    return $value;
                }

                return LienFamilialDto::createFromArray($value);
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
            ->setLienFamilial($resolvedOptions['lienFamilial'])
            ->setNom($resolvedOptions['nom'])
            ->setPrenom($resolvedOptions['prenom'])
        ;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime|null $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(?\DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return LienFamilialDto|null
     */
    public function getLienFamilial(): ?LienFamilialDto
    {
        return $this->lienFamilial;
    }

    /**
     * @param LienFamilialDto|null $lienFamilial
     *
     * @return self
     */
    public function setLienFamilial(?LienFamilialDto $lienFamilial): self
    {
        $this->lienFamilial = $lienFamilial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     *
     * @return self
     */
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     *
     * @return self
     */
    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
