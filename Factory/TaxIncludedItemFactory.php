<?php

namespace Factory;

// 税込み商品のインスタンスを生成する工場
class TaxIncludedItemFactory
{
    public function create(string $name, int $price, float $taxRate): Item
    {
        return $this->createItem($name, $price, $taxRate);
    }

    private function createItem(string $name, int $price, float $taxRate): Item
    {
        return new TaxIncludedItem($name, $price, $taxRate);
    }
}