<?php
declare(strict_types=1);

namespace App\Controller;

use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    use FixturesTrait;

    protected function setUp(): void
    {
        $this->loadFixtureFiles([
            __DIR__ . '/../../tests/fixtures/users.yaml',
        ]);
    }

    public function testShow(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/1/show');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertEquals('Name: Takashi', $crawler->text());
    }
}
