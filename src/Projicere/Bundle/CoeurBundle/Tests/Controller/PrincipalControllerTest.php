<?php

namespace Projicere\Bundle\CoeurBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrincipalControllerTest extends WebTestCase
{
    public function testPageprincipal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
