<?php

namespace App\Kata3;

use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorFactory;

class NoShippingDiscountStrategy extends DiscountStrategy
{
    public function generatePrice(float $price, float $discount, float $tax)
    {
        return new PriceCalculator()->calculate($price, $discount, $tax);
    }
}