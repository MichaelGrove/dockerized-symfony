<?php

namespace App\Tests\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
  public function testProductCanBeCreated(): void
  {
    $client = static::createClient();

    $client->request('POST', '/product');

    $this->assertResponseIsSuccessful();
    $content = $client->getResponse()->getContent();
    $data = json_decode($content, true);
    $this->assertNotNull($data['id']);
    $this->assertSame('Bicycle', $data['name']);
    $this->assertSame('300.99', $data['price']);
  }
}
