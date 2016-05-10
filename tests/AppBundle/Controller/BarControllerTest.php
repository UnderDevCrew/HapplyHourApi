<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BarControllerTest extends WebTestCase
{
    /**
     * TODO: Really test this page and not only the headers
     */
    public function testAllBars()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/bars');

        $body = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }
}
