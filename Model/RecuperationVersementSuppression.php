<?php

namespace Mpp\ApicilClientBundle\Model;

class RecuperationVersementSuppression
{
    /**
     * @var VersementComplementaireDtoDeConsultation|null
     */
    private $consultationVersementDto;

    /**
     * @var DtoDeLaSuppressionDeLOptionPourLaConsultation|null
     */
    private $suppressionConsultationDto;

    /**
     * @return VersementComplementaireDtoDeConsultation|null
     */
    public function getConsultationVersementDto(): ?VersementComplementaireDtoDeConsultation
    {
        return $this->consultationVersementDto;
    }

    /**
     * @param VersementComplementaireDtoDeConsultation|null $consultationVersementDto
     *
     * @return self
     */
    public function setConsultationVersementDto(?VersementComplementaireDtoDeConsultation $consultationVersementDto): self
    {
        $this->consultationVersementDto = $consultationVersementDto;

        return $this;
    }

    /**
     * @return DtoDeLaSuppressionDeLOptionPourLaConsultation|null
     */
    public function getSuppressionConsultationDto(): ?DtoDeLaSuppressionDeLOptionPourLaConsultation
    {
        return $this->suppressionConsultationDto;
    }

    /**
     * @param DtoDeLaSuppressionDeLOptionPourLaConsultation|null $suppressionConsultationDto
     *
     * @return self
     */
    public function setSuppressionConsultationDto(?DtoDeLaSuppressionDeLOptionPourLaConsultation $suppressionConsultationDto): self
    {
        $this->suppressionConsultationDto = $suppressionConsultationDto;

        return $this;
    }
}
