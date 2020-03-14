<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testShow()
    public function testShow(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/1/show');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
