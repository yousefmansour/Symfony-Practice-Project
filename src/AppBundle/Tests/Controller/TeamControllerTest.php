<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeamControllerTest extends WebTestCase
{
    public function testTeam()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/team');
    }

}
