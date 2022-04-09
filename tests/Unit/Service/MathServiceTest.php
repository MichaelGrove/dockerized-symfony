<?php

namespace App\Tests\Unit\Service;

use App\Service\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testValuesCanBeSummed(): void
    {
        $service = new MathService();

        $value = $service->sum(1, 2);
        
        self::assertEquals(3, $value);
    }
}
