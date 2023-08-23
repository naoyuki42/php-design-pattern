<?php

namespace Factory;

// 税込み商品
class TaxIncludedItem implements Item
{
    public function __construct(
        private string $name,
        private int $price,
        private float $taxRate,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        $value = $this->price * $this->taxRate;
        return (int)$value;
    }
}