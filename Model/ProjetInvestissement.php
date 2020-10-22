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

class ProjetInvestissement
{
    public const TYPE_SIGNATURE_ELECTRONIQUE = 'ELECTRONIQUE';
    public const TYPE_SIGNATURE_PAPIER = 'PAPIER';

    /**
     * @var ConnaissanceClient
     */
    private $connaissanceClient;

    /**
     * @var int|null
     */
    private $courtierId;

    /**
     * @var Produit
     */
    private $produit;

    /**
     * @var ProfilGestionDto|null
     */
    private $profilGestion;

    /**
     * @var Souscription
     */
    private $souscription;

    /**
     * @var string|null
     */
    private $typeSignature;

    /**
     * @var array|null
     */
    private $typesSouscription;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('connaissanceClient')->setAllowedTypes('connaissanceClient', ['array', ConnaissanceClient::class])->setNormalizer('connaissanceClient', function (Options $options, $value) {
                if ($value instanceof ConnaissanceClient) {
                    return $value;
                }

                return ConnaissanceClient::createFromArray($value);
            })
            ->setDefault('courtierId', null)->setAllowedTypes('courtierId', ['int', 'null'])
            ->setRequired('produit')->setAllowedTypes('produit', ['array', Produit::class])->setNormalizer('produit', function (Options $options, $value) {
                if ($value instanceof Produit) {
                    return $value;
                }

                return Produit::createFromArray($value);
            })
            ->setDefault('profilGestion', null)->setAllowedTypes('profilGestion', ['array', ProfilGestionDto::class, 'null'])->setNormalizer('profilGestion', function (Options $options, $value) {
                if ($value instanceof ProfilGestionDto || null === $value) {
                    return $value;
                }

                return ProfilGestionDto::createFromArray($value);
            })
            ->setRequired('souscription')->setAllowedTypes('souscription', ['array', Souscription::class])->setNormalizer('souscription', function (Options $options, $value) {
                if ($value instanceof Souscription) {
                    return $value;
                }

                return Souscription::createFromArray($value);
            })
            ->setDefault('typeSignature', null)->setAllowedTypes('typeSignature', ['string', 'null'])
            ->setDefault('typesSouscription', null)->setAllowedTypes('typesSouscription', ['array', 'null'])->setNormalizer('typesSouscription', function (Options $options, $value) {
                if (null === $value) {
                    return [];
                }

                foreach ($value as &$type) {
                    if ($type instanceof TypeDto) {
                        continue;
                    }

                    $type = TypeDto::createFromArray($type);
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
            ->setConnaissanceClient($resolvedOptions['connaissanceClient'])
            ->setCourtierId($resolvedOptions['courtierId'])
            ->setProduit($resolvedOptions['produit'])
            ->setProfilGestion($resolvedOptions['profilGestion'])
            ->setSouscription($resolvedOptions['souscription'])
            ->setTypeSignature($resolvedOptions['typeSignature'])
            ->setTypesSouscription($resolvedOptions['typesSouscription'])
        ;
    }

    /**
     * @return ConnaissanceClient
     */
    public function getConnaissanceClient(): ConnaissanceClient
    {
        return $this->connaissanceClient;
    }

    /**
     * @param ConnaissanceClient $connaissanceClient
     *
     * @return self
     */
    public function setConnaissanceClient(ConnaissanceClient $connaissanceClient): self
    {
        $this->connaissanceClient = $connaissanceClient;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCourtierId(): ?int
    {
        return $this->courtierId;
    }

    /**
     * @param int|null $courtierId
     *
     * @return self
     */
    public function setCourtierId(?int $courtierId): self
    {
        $this->courtierId = $courtierId;

        return $this;
    }

    /**
     * @return Produit
     */
    public function getProduit(): produit
    {
        return $this->produit;
    }

    /**
     * @param Produit $produit
     *
     * @return self
     */
    public function setProduit(Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * @return ProfilGestionDto|null
     */
    public function getProfilGestion(): ?ProfilGestionDto
    {
        return $this->profilGestion;
    }

    /**
     * @param ProfilGestionDto|null $profilGestion
     *
     * @return self
     */
    public function setProfilGestion(?ProfilGestionDto $profilGestion): self
    {
        $this->profilGestion = $profilGestion;

        return $this;
    }

    /**
     * @return Souscription
     */
    public function getSouscription(): Souscription
    {
        return $this->souscription;
    }

    /**
     * @param Souscription $souscription
     *
     * @return self
     */
    public function setSouscription(Souscription $souscription): self
    {
        $this->souscription = $souscription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeSignature(): ?string
    {
        return $this->typeSignature;
    }

    /**
     * @param string|null $typeSignature
     *
     * @return self
     */
    public function setTypeSignature(?string $typeSignature): self
    {
        $this->typeSignature = $typeSignature;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTypesSouscription(): ?array
    {
        return $this->typesSouscription;
    }

    /**
     * @param array|null $typesSouscription
     *
     * @return self
     */
    public function setTypesSouscription(?array $typesSouscription): self
    {
        $this->typesSouscription = $typesSouscription;

        return $this;
    }
}
