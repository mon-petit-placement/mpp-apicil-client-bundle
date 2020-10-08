<?php

namespace Mpp\ApicilClientBundle\Client;

class ApicilClientDomainRegistry implements ApicilClientDomainRegistryInterface
{
    /**
     * @var array
     */
    private $clients;

    /**
     * Proxy method to use $registry->getAlias() instead of $registry->get('alias').
     *
     * @method __call
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return ApicilClientDomainInterface
     */
    public function __call(string $method, array $arguments): ApicilClientDomainInterface
    {
        if (false !== strpos($method, 'get')) {
            $method = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', str_replace('get', '', $method))); // Extract client alias from method (ex: getClientAlias => client_alias)
        }

        return $this->get($method);
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $alias): bool
    {
        return isset($this->clients[$alias]);
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $alias, ApicilClientDomainInterface $client): ApicilClientDomainRegistryInterface
    {
        $this->clients[$alias] = $client;

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \UnexpectedValueException if the apicil client domain is not registered
     */
    public function get(string $alias): ApicilClientDomainInterface
    {
        if (!isset($this->clients[$alias])) {
            throw new \UnexpectedValueException(sprintf('Could not retrieve apicil client domain with alias %s', $alias));
        }

        return $this->clients[$alias];
    }

    /**
     * {@inheritdoc}
     */
    public function all(): array
    {
        return $this->clients;
    }
}
