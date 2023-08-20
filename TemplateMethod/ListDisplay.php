<?php

namespace TemplateMethod;

// 子クラス1
class ListDisplay extends AbstractDisplay
{
    public function __construct(
        private array $data,
    ) {}

    protected function displayBody(): string
    {
        $body = "";
        foreach ($this->data as $key => $value) {
            $body .= "<dt>" . $key . "</dt>";
            $body .= "<dd>" . $value . "</dd>";
        }
        return $body;
    }
}