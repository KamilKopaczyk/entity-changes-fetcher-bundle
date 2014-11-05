<?php

namespace Daimos\ChangesFetcherBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DoctrineChangesFetcherTest extends KernelTestCase
{
    /** @var  ContainerInterface */
    private $container;

    public function setUp()
    {
        parent::setUp();

        static::bootKernel();
        $this->container = static::$kernel->getContainer();
    }

    public static function getKernelClass()
    {
        return '\Daimos\ChangesFetcherBundle\Tests\Functional\app\AppKernel';
    }

    public function testDoctrineChangesFetcher_isAccessible()
    {
        $user = new \stdClass();

        $changesFetcher = $this->container->get('changes_fetcher');

        $changes = $changesFetcher->getChanges($user);

        $this->assertEmpty($changes);
    }
} 