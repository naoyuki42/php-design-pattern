<?php

namespace TemplateMethod;

// 親クラス
abstract class AbstractDisplay
{
    public function display(): string
    {
        $html = "<html>";
        $html .= $this->displayHeader();
        $html .= "<body>";
        $html .= $this->displayBody();
        $html .= "</body>";
        $html .= "</html>";
        return $html;
    }

    private function displayHeader(): string
    {
        return "<head><title>Template Method</title></head>";
    }

    // 子クラスで具体的な処理を記述
    protected abstract function displayBody(): string;
}