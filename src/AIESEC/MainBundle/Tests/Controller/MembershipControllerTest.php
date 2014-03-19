<?php

namespace AIESEC\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembershipControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

    public function testOpportunities()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/opportunities');
    }

    public function testTeams()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/teams');
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
