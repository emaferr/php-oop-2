<?php
class Notebook extends Product {
    function __construct(string $path, string $name, string $desc, float $price, int $discount = null, int $diagonal) 
    {
        parent::__construct($path, $name, $desc, $price, $discount);
        $this->diagonal = $diagonal;
    }
}