<?php

namespace App\Kata2;

class FreeShippingPriceCalculatorFactoryPriceCalculatorFactory
{
    public function makeCalculator(): PriceCalculatorInterface
    {
        return new FreeShippingPriceCalculator();
    }
}