<?php
class Tablet extends Notebook {
    function __construct(string $path, string $name, string $desc, float $price, int $discount = null, int $diagonal, string $connect) 
    {
        parent::__construct($path, $name, $desc, $price, $discount, $diagonal);
        $this->connect = $connect;
    }
}