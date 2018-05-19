<?php

namespace InvoiceGeneratorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GeneratorControllerTest extends WebTestCase
{
    public function testNewinvoice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/new');
    }

}
