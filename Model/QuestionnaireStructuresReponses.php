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

class QuestionnaireStructuresReponses
{
    /**
     * @var string|null
     */
    private $isinCode;

    /**
     * @var array|null
     */
    private $reponses;

    /**
     * @param OptionsResolver $resolver
     */
    public static function configureData(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('isinCode', null)->setAllowedTypes('isinCode', ['string', 'null'])
            ->setDefault('reponses', null)->setAllowedTypes('reponses', ['array', 'null'])->setNormalizer('reponses', function (Options $options, $value) {
                if (null === $value) {
                    return $value;
                }

                foreach ($value as &$reponse) {
                    if ($reponse instanceof ReponseDTO) {
                        continue;
                    }

                    $reponse = ReponseDto::createFromArray($reponse);
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
            ->setIsinCode($resolvedOptions['isinCode'])
            ->setReponses($resolvedOptions['reponses'])
        ;
    }

    /**
     * @return string|null
     */
    public function getIsinCode(): ?string
    {
        return $this->isinCode;
    }

    /**
     * @param string|null $isinCode
     *
     * @return self
     */
    public function setIsinCode(?string $isinCode): self
    {
        $this->isinCode = $isinCode;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReponses(): ?array
    {
        return $this->reponses;
    }

    /**
     * @param array|null $reponses
     *
     * @return self
     */
    public function setReponses(?array $reponses): self
    {
        $this->reponses = $reponses;

        return $this;
    }
}
