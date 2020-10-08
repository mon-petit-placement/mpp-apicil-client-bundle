<?php

namespace Mpp\ApicilClientBundle\Tests\Unit\Client;

use Mpp\ApicilClientBundle\Client\ApicilClientDomainRegistryInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

abstract class ApicilClientTest extends KernelTestCase
{
    /**
     * @var ApicilClientDomainRegistryInterface
     */
    protected static $registry;

    public static function setUpBeforeClass()
    {
        self::bootKernel();

        self::$registry = self::$container->get(ApicilClientDomainRegistryInterface::class);
    }
}
