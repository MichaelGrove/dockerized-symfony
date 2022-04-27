<?php

namespace App\Service;

class SubstractService
{
  public function __construct(private MathService $mathService)
  {
  }

  public function substract_two(int $value)
  {
    return $this->mathService->substract($value, 2);
  }
}
