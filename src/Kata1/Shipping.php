<?php

declare(strict_types=1);

namespace App\Kata1;

class Shipping implements CostInterface
{
    public function __construct(private $shipping, private CostInterface $discount)
    {
    }

    public function cost()
    {
        // TODO: Implement cost() method.
        return $this->shipping + $this->discount->cost();
    }
}
