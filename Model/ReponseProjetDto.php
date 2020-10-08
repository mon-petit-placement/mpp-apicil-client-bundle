<?php

namespace Mpp\ApicilClientBundle\Model;

class ReponseProjetDto
{
    /**
     * @var int|null
     */
    private $projectId;

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }
}
