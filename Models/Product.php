<?php

require_once __DIR__ . "/../Traits/Reviewable.php";

class Product {

    use Reviewable;
    public $brand;
    public $price;

    function __construct(string $brand, float $price)
    {
        $this->brand = $brand;
        $this->price = $price;
    }
}