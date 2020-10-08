<?php

namespace Mpp\ApicilClientBundle\Model;

class DocumentPageWrapper
{
    /**
     * @var array|null
     */
    private $content;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $maxPerPage;

    /**
     * @var int|null
     */
    private $totalElements;

    /**
     * @return array|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param array|null $content
     *
     * @return self
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @param int|null $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage): self
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxPerPage(): ?int
    {
        return $this->maxPerPage;
    }

    /**
     * @param int|null $maxPerPage
     *
     * @return self
     */
    public function setMaxPerPage(?int $maxPerPage): self
    {
        $this->maxPerPage = $maxPerPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalElements(): ?int
    {
        return $this->totalElements;
    }

    /**
     * @param int|null $totalElements
     *
     * @return self
     */
    public function setTotalElements(?int $totalElements): self
    {
        $this->totalElements = $totalElements;

        return $this;
    }
}
