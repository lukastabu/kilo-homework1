<?php

declare(strict_types=1);

namespace App\Kata3;

abstract class DiscountStrategy
{
    abstract public function generatePrice(float $price, float $discount, float $tax);
}
