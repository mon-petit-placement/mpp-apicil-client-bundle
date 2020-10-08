<?php

namespace Mpp\ApicilClientBundle\Model;

class SouscriptionPerpDto
{
    /**
     * @var bool|null
     */
    private $adhesionVictoria;

    /**
     * @var ArbitrageAutomatiqueDto|null
     */
    private $arbitrageAutomatique;

    /**
     * @var bool|null
     */
    private $connaissanceDocument;

    /**
     * @var RegimeSocialPerpDto|null
     */
    private $regimeSocial;

    /**
     * @return bool|null
     */
    public function getAdhesionVictoria(): ?bool
    {
        return $this->adhesionVictoria;
    }

    /**
     * @param bool|null $adhesionVictoria
     *
     * @return self
     */
    public function setAdhesionVictoria(?bool $adhesionVictoria): self
    {
        $this->adhesionVictoria = $adhesionVictoria;

        return $this;
    }

    /**
     * @return ArbitrageAutomatiqueDto|null
     */
    public function getArbitrageAutomatique(): ?ArbitrageAutomatiqueDto
    {
        return $this->arbitrageAutomatique;
    }

    /**
     * @param ArbitrageAutomatiqueDto|null $arbitrageAutomatique
     *
     * @return self
     */
    public function setArbitrageAutomatique(?ArbitrageAutomatiqueDto $arbitrageAutomatique): self
    {
        $this->arbitrageAutomatique = $arbitrageAutomatique;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getConnaissanceDocument(): ?bool
    {
        return $this->connaissanceDocument;
    }

    /**
     * @param bool|null $connaissanceDocument
     *
     * @return self
     */
    public function setConnaissanceDocument(?bool $connaissanceDocument): self
    {
        $this->connaissanceDocument = $connaissanceDocument;

        return $this;
    }

    /**
     * @return RegimeSocialPerpDto|null
     */
    public function getRegimeSocial(): ?RegimeSocialPerpDto
    {
        return $this->regimeSocial;
    }

    /**
     * @param RegimeSocialPerpDto|null $regimeSocial
     *
     * @return self
     */
    public function setRegimeSocial(?RegimeSocialPerpDto $regimeSocial): self
    {
        $this->regimeSocial = $regimeSocial;

        return $this;
    }
}
