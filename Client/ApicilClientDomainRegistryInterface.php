<?php

namespace Mpp\ApicilClientBundle\Client;

interface ApicilClientDomainRegistryInterface
{
    /**
     * Check if the apicil client domain is registered in the registry.
     *
     * @method has
     *
     * @param string $alias
     *
     * @return bool
     */
    public function has(string $alias): bool;

    /**
     * Register the apicil client domain with the given alias.
     *
     * @method set
     *
     * @param string                      $alias
     * @param ApicilClientDomainInterface $client
     *
     * @return ApicilClientDomainRegistryInterface
     */
    public function set(string $alias, ApicilClientDomainInterface $client): ApicilClientDomainRegistryInterface;

    /**
     * Get the apicil client domain by its alias.
     *
     * @method get
     *
     * @param string $alias
     *
     * @return ApicilClientDomainInterface
     */
    public function get(string $alias): ApicilClientDomainInterface;

    /**
     * Retrieve all apicil client domains from the registry.
     *
     * @method all
     *
     * @return array
     */
    public function all(): array;
}
