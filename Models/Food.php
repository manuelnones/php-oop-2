<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../Traits/Reviewable.php";

class Food extends Product {
    public $weight;
    public $taste;

    function __construct(string $brand, float $price, string $weight, string $taste,) {
        parent::__construct($brand, $price);
        
        $this->weight = $weight;
        $this->taste = $taste;
    }
}