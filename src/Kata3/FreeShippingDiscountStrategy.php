<?php

namespace App\Kata3;

use App\Kata2\FreeShippingPriceCalculator;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorFactory;

class FreeShippingDiscountStrategy extends DiscountStrategy
{
    public function generatePrice(float $price, float $discount, float $tax)
    {
        return new FreeShippingPriceCalculatorFactory()->(new \App\Kata2\FreeShippingPriceCalculator)->calculate($price, $discount, $tax);
    }
}