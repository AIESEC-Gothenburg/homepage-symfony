<?php

namespace AIESEC\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testContactus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contactus');
    }

}
