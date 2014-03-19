<?php

namespace AIESEC\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InternshipControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

    public function testFaq()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/faq');
    }

    public function testApply()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/apply');
    }

}
