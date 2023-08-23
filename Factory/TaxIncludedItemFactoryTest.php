<?php

namespace Factory;

use PHPUnit\Framework\TestCase;

// テストコード
class TaxIncludedItemFactoryTest extends TestCase
{
    public function test_tax_included_item_factory(): void
    {
        $factory = new TaxIncludedItemFactory();
        $item = $factory->create("ペン", 100, 1.1);
        $this->assertSame("ペン", $item->getName());
        $this->assertSame(110, $item->getPrice());
    }
}