<?php

namespace App\System;

class Route
{
    public function __construct(
        private string $class,
        private string $method,
    ) {
    }

    public function runMethod(): void
    {
        $instance = new $this->class;
        $instance->{$this->method}();
    }
}