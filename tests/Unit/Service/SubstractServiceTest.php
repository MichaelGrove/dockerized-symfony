<?php

namespace App\Tests\Unit\Service;

use App\Service\SubstractService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SubstractServiceTest extends KernelTestCase
{
  public function testValueCanBeSubstractedWithTwo(): void
  {
    self::bootKernel();
    $container = static::getContainer();
    /** @var SubstractService $substractService */
    $substractService = $container->get(SubstractService::class);

    $result = $substractService->substract_two(4);

    self::assertEquals(2, $result);
  }
}
