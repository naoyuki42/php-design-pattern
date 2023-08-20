<?php

namespace TemplateMethod;

use PHPUnit\Framework\TestCase;

// テストコード
class DisplayTest extends TestCase
{
    public function test_list_display(): void
    {
        $data = [
            "日本" => "東京",
            "アメリカ" => "ワシントン",
            "中国" => "北京",
        ];
        $expected = "<html><head><title>Template Method</title></head><body><dt>日本</dt><dd>東京</dd><dt>アメリカ</dt><dd>ワシントン</dd><dt>中国</dt><dd>北京</dd></body></html>";

        $ld = new ListDisplay($data);
        $result = $ld->display();
        $this->assertSame($expected, $result);
    }

    public function test_table_display(): void
    {
        $data = [
            "日本" => "東京",
            "アメリカ" => "ワシントン",
            "中国" => "北京",
        ];
        $expected = "<html><head><title>Template Method</title></head><body><tr><th>日本</th><td>東京</td></tr><tr><th>アメリカ</th><td>ワシントン</td></tr><tr><th>中国</th><td>北京</td></tr></body></html>";

        $ld = new TableDisplay($data);
        $result = $ld->display();
        $this->assertSame($expected, $result);
    }
}