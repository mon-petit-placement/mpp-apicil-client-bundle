<?php

namespace Mpp\ApicilClientBundle\Model;

class OperationEnCoursDto
{
    /**
     * @var \DateTime|null
     */
    private $dateCreation;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @return \DateTime|null
     */
    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime|null $dateCreation
     *
     * @return self
     */
    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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
}
