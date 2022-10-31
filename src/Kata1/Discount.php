<?php

declare(strict_types=1);

namespace App\Kata1;

class Discount implements CostInterface
{
    public function __construct(private $discount, private CostInterface $price)
    {
    }

    public function cost(): float|int
    {
        // TODO: Implement cost() method.
        return ($this->discount / 100) * $this->price->cost();
    }
}
