<?php

namespace Mpp\ApicilClientBundle\Model;

use Symfony\Component\OptionsResolver\Exception\AccessException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\NoSuchOptionException;
use Symfony\Component\OptionsResolver\Exception\OptionDefinitionException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseDto
{
    /**
     * @var string|null
     */
    private $questionCode;

    /**
     * @var int|null
     */
    private $reponse;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('questionCode', null)->setAllowedTypes('questionCode', ['string', 'null'])
            ->setDefault('reponse', null)->setAllowedTypes('reponse', ['int', 'null'])
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
            ->setQuestionCode($resolvedOptions['questionCode'])
            ->setReponse($resolvedOptions['reponse'])
        ;
    }

    /**
     * @return string|null
     */
    public function getQuestionCode(): ?string
    {
        return $this->questionCode;
    }

    /**
     * @param string|null $questionCode
     *
     * @return self
     */
    public function setQuestionCode(?string $questionCode): self
    {
        $this->questionCode = $questionCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getReponse(): ?int
    {
        return $this->reponse;
    }

    /**
     * @param int|null $reponse
     *
     * @return self
     */
    public function setReponse(?int $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
}
