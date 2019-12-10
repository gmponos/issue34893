<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testApi()
    {
        $client = static::createClient();
        $client->request('post', '/api');
        $this->assertSame(405, $client->getResponse()->getStatusCode());
        $this->assertSame('application/json', $client->getResponse()->headers->get('Content-type'));
        $this->assertJson($client->getResponse()->getContent());
    }

    public function testApiWithDebugFalse()
    {
        $client = static::createClient(['debug' => false]);
        $client->request('post', '/api');
        $this->assertSame(405, $client->getResponse()->getStatusCode());
        $this->assertSame('application/json', $client->getResponse()->headers->get('Content-type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
