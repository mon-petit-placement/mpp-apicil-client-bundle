<?php

namespace Mpp\ApicilClientBundle\Model;

class MappingJacksonValue
{
    /**
     * @var FilterProvider|null
     */
    private $filters;

    /**
     * @var string|null
     */
    private $jsonpFunction;

    /**
     * @var object|null
     */
    private $value;

    /**
     * @return FilterProvider|null
     */
    public function getFilters(): ?FilterProvider
    {
        return $this->filters;
    }

    /**
     * @param FilterProvider|null $filters
     *
     * @return self
     */
    public function setFilters(?FilterProvider $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getJsonpFunction(): ?string
    {
        return $this->jsonpFunction;
    }

    /**
     * @param string|null $jsonpFunction
     *
     * @return self
     */
    public function setJsonpFunction(?string $jsonpFunction): self
    {
        $this->jsonpFunction = $jsonpFunction;

        return $this;
    }

    /**
     * @return object|null
     */
    public function getValue(): ?object
    {
        return $this->value;
    }

    /**
     * @param object|null $value
     *
     * @return self
     */
    public function setValue(?object $value): self
    {
        $this->value = $value;

        return $this;
    }
}
