<?php

namespace Factory;

// 商品
interface Item
{
    public function getName(): string;
    public function getPrice(): int;
}