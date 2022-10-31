<?php

namespace App\Kata2;

class PriceCalculatorFactory
{
    public function makeCalculator(): PriceCalculatorInterface
    {
        return new PriceCalculator();
    }
}