<?php

namespace Mpp\ApicilClientBundle\DependencyInjection\Compiler;

use Mpp\ApicilClientBundle\Client\ApicilClientDomainRegistry;
use Mpp\ApicilClientBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MppApicilClientCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $config = $container->getParameter(Configuration::CONFIGURATION_ROOT);

        if (!$container->hasDefinition(ApicilClientDomainRegistry::class)) {
            return;
        }

        $registryDefinition = $container->getDefinition(ApicilClientDomainRegistry::class);
        $taggedServices = $container->findTaggedServiceIds(sprintf('%s.domain', Configuration::CONFIGURATION_ROOT));
        foreach ($taggedServices as $class => $tags) {
            $container->getDefinition($class)->setArgument('$httpClient', $container->getDefinition($config['http_client']));

            foreach ($tags as $attributes) {
                $registryDefinition->addMethodCall(
                    'set',
                    [
                        $class::getClientDomainAlias(),
                        new Reference($class),
                    ]
                );
            }
        }
    }
}
