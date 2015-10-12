<?php

namespace Projicere\Bundle\UtilisateurBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
    public function testConnection()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connection');
    }

    public function testDeconnection()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deconnection');
    }

    public function testFicheutilisateur()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ficheUtilisateur');
    }

    public function testCreer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creer');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimer');
    }

}
