<?php

declare(strict_types=1);

namespace App\Kata2;

class FreeShippingPriceCalculator implements PriceCalculatorInterface
{
    public function calculate(float $price, float $discount, float $tax)
    {
        // TODO: Implement calculate() method.
        return $price * $discount;
    }
}
