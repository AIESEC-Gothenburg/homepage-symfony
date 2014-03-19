<?php

namespace AIESEC\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AboutControllerTest extends WebTestCase
{
    public function testAboutus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/aboutus');
    }

    public function testTestimonies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/testimonies');
    }

}
