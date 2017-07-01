<?php
/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 01/07/2017
 * Time: 10:33.
 */

namespace Igsem\AuthBundle\Tests\Repository;

use Igsem\AuthBundle\Entity\User;
use Igsem\UtilsBundle\Tests\WithFixturesTestCase;

/**
 * Class UserRepositoryTest.
 */
class UserRepositoryTest extends WithFixturesTestCase
{
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
}
