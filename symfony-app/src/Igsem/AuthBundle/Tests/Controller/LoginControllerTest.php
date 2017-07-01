<?php

namespace Igsem\AuthBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $client->request('POST', '/api/login');

        $this->assertEquals(401, $client->getResponse()->getStatusCode());
    }
}
