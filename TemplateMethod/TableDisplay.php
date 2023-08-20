<?php

namespace TemplateMethod;

// 子クラス2
class TableDisplay extends AbstractDisplay
{
    public function __construct(
        private array $data,
    ) {}

    protected function displayBody(): string
    {
        $body = "";
        foreach ($this->data as $key => $value) {
            $body .= "<tr>";
            $body .= "<th>" . $key . "</th>";
            $body .= "<td>" . $value . "</td>";
            $body .= "</tr>";
        }
        return $body;
    }
}