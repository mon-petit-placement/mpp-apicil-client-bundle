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

class ConnaissanceClient
{
    /**
     * @var ClientDto
     */
    private $client;

    /**
     * @var string|null
     */
    private $commentaire;

    /**
     * @var ConjointDto|null
     */
    private $conjoint;

    /**
     * @var CoordonneesDto
     */
    private $coordonnees;

    /**
     * @var \DateTime|null
     */
    private $dateSignatureClient;

    /**
     * @var Foyer|null
     */
    private $foyer;

    /**
     * @var int|null
     */
    private $personneIdExterne;

    /**
     * @var bool|null
     */
    private $professionSensible;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired('client')->setAllowedTypes('client', ['array', ClientDto::class])->setNormalizer('client', function (Options $options, $value) {
                if ($value instanceof ClientDto) {
                    return $value;
                }

                return ClientDto::createFromArray($value);
            })
            ->setDefault('commentaire', null)->setAllowedTypes('commentaire', ['string', 'null'])
            ->setDefault('conjoint', null)->setAllowedTypes('conjoint', ['array', ConjointDto::class, 'null'])->setNormalizer('conjoint', function (Options $options, $value) {
                if ($value instanceof ConjointDto || null == $value) {
                    return $value;
                }

                return ConjointDto::createFromArray($value);
            })
            ->setDefault('coordonnees', null)->setAllowedTypes('coordonnees',['array', CoordonneesDto::class, 'null'])->setNormalizer('coordonnees', function (Options $options, $value) {
                if ($value instanceof CoordonneesDto || null == $value) {
                    return $value;
                }

                return CoordonneesDto::createFromArray($value);
            })
            ->setDefault('dateSignatureClient', null)->setAllowedTypes('dateSignatureClient', [\DateTime::class, 'string', 'null'])->setNormalizer('dateSignatureClient', function (Options $options, $value) {
                if ($value instanceof \DateTime || null === $value) {
                    return $value;
                }

                return \DateTime::createFromFormat('Y-m-d', $value);
            })
            ->setDefault('foyer', null)->setAllowedTypes('foyer',['array', Foyer::class, 'null'])->setNormalizer('foyer', function (Options $options, $value) {
                if ($value instanceof Foyer || null == $value) {
                    return $value;
                }

                return Foyer::createFromArray($value);
            })
            ->setDefault('personneIdExterne', null)->setAllowedTypes('personneIdExterne', ['int', 'null'])
            ->setDefault('professionSensible', null)->setAllowedTypes('professionSensible', ['bool', 'null'])
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
            ->setClient($resolvedOptions['client'])
            ->setCommentaire($resolvedOptions['commentaire'])
            ->setConjoint($resolvedOptions['conjoint'])
            ->setCoordonnees($resolvedOptions['coordonnees'])
            ->setDateSignatureClient($resolvedOptions['dateSignatureClient'])
            ->setFoyer($resolvedOptions['foyer'])
            ->setPersonneIdExterne($resolvedOptions['personneIdExterne'])
            ->setProfessionSensible($resolvedOptions['professionSensible'])
        ;
    }

    /**
     * @return ClientDto
     */
    public function getClient(): ClientDto
    {
        return $this->client;
    }

    /**
     * @param ClientDto $client
     *
     * @return self
     */
    public function setClient(ClientDto $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    /**
     * @param string|null $commentaire
     *
     * @return self
     */
    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return ConjointDto|null
     */
    public function getConjoint(): ?ConjointDto
    {
        return $this->conjoint;
    }

    /**
     * @param ConjointDto|null $conjoint
     *
     * @return self
     */
    public function setConjoint(?ConjointDto $conjoint): self
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * @return CoordonneesDto
     */
    public function getCoordonnees(): CoordonneesDto
    {
        return $this->coordonnees;
    }

    /**
     * @param CoordonneesDto $coordonnees
     *
     * @return self
     */
    public function setCoordonnees(CoordonneesDto $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateSignatureClient(): ?\DateTime
    {
        return $this->dateSignatureClient;
    }

    /**
     * @param \DateTime|null $dateSignatureClient
     *
     * @return self
     */
    public function setDateSignatureClient(?\DateTime $dateSignatureClient): self
    {
        $this->dateSignatureClient = $dateSignatureClient;

        return $this;
    }

    /**
     * @return Foyer|null
     */
    public function getFoyer(): ?Foyer
    {
        return $this->foyer;
    }

    /**
     * @param Foyer|null $foyer
     *
     * @return self
     */
    public function setFoyer(?Foyer $foyer): self
    {
        $this->foyer = $foyer;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPersonneIdExterne(): ?int
    {
        return $this->personneIdExterne;
    }

    /**
     * @param int|null $personneIdExterne
     *
     * @return self
     */
    public function setPersonneIdExterne(?int $personneIdExterne): self
    {
        $this->personneIdExterne = $personneIdExterne;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getProfessionSensible(): ?bool
    {
        return $this->professionSensible;
    }

    /**
     * @param bool|null $professionSensible
     *
     * @return self
     */
    public function setProfessionSensible(?bool $professionSensible): self
    {
        $this->professionSensible = $professionSensible;

        return $this;
    }
}
