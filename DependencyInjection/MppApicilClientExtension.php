<?php


namespace Mpp\ApicilClientBundle\DependencyInjection;

use Mpp\ApicilClientBundle\Client\ApicilClientDomainInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class MppApicilClientExtension extends Extension
{
    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration($container->getParameter('kernel.debug'));
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $container->setParameter(Configuration::CONFIGURATION_ROOT, $config);

        $container
            ->registerForAutoconfiguration(ApicilClientDomainInterface::class)
            ->addTag(sprintf('%s.domain', Configuration::CONFIGURATION_ROOT))
        ;
    }
}
