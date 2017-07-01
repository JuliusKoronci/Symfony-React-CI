<?php
/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 01/07/2017
 * Time: 10:33.
 */

namespace Igsem\AuthBundle\Tests\Repository;

use Igsem\AuthBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class UserRepositoryTest.
 */
class UserRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testLoadByUsername()
    {
        /** @var User $user */
        $user = $this->em
            ->getRepository('IgsemAuthBundle:User')
            ->loadUserByUsername('jk@web-solutions.sk');
        $this->assertNotNull($user);
        $this->assertEquals('jk@web-solutions.sk', $user->getEmail());

        /** @var User $user */
        $user2 = $this->em
            ->getRepository('IgsemAuthBundle:User')
            ->loadUserByUsername('Julino');
        $this->assertNotNull($user2);
        $this->assertEquals('Julino', $user2->getUsername());
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
}
