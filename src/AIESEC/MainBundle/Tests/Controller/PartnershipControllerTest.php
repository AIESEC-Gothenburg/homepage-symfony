<?php

namespace AIESEC\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartnershipControllerTest extends WebTestCase
{
    public function testCompanies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/companies');
    }

    public function testGetintern()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getintern');
    }

    public function testPartnership()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/partnership');
    }

}
