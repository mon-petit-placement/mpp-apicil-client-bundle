<?php

namespace Mpp\ApicilClientBundle\Model;

class DtoDeLaSuppressionDeLOptionPourLaConsultation
{
    /**
     * @var int|string|null
     */
    private $contratId;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $signeClient;

    /**
     * @var string|null
     */
    private $statutActuel;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $typeOperation;

    /**
     * @return string|null
     */
    public function getContratId(): ?string
    {
        return $this->contratId;
    }

    /**
     * @param int|string|null $contratId
     *
     * @return self
     */
    public function setContratId(int|string|null $contratId): self
    {
        if (is_int($contratId)) {
            $contratId = (string) $contratId;
        }

        $this->contratId = $contratId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSigneClient(): ?bool
    {
        return $this->signeClient;
    }

    /**
     * @param bool|null $signeClient
     *
     * @return self
     */
    public function setSigneClient(?bool $signeClient): self
    {
        $this->signeClient = $signeClient;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutActuel(): ?string
    {
        return $this->statutActuel;
    }

    /**
     * @param string|null $statutActuel
     *
     * @return self
     */
    public function setStatutActuel(?string $statutActuel): self
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getTypeOperation(): ?string
    {
        return $this->typeOperation;
    }

    /**
     * @param  string|null  $typeOperation
     *
     * @return  self
     */
    public function setTypeOperation(?string $typeOperation): self
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }
}
