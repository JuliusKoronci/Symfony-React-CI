<?php
/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 01/07/2017
 * Time: 14:48.
 */

namespace Igsem\UtilsBundle\Tests;

use Doctrine\ORM\Tools\SchemaTool;
use Igsem\AuthBundle\DataFixtures\ORM\LoadUserData;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class WithFixturesTestCase
 * load users and make $em available.
 */
class WithFixturesTestCase extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
        $schemaTool = new SchemaTool($this->em);
        $metadata = $this->em->getMetadataFactory()->getAllMetadata();

        // Drop and recreate tables for all entities
        $schemaTool->dropSchema($metadata);
        $schemaTool->createSchema($metadata);
        $users = new LoadUserData();
        $users->setContainer(static::$kernel->getContainer());
        $users->load($this->em);
    }

    /**
     * Clean up Kernel usage in this test.
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
}
