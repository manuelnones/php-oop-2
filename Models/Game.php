<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../Traits/Reviewable.php";

class Game extends Product {
    public $nameGame;
    public $color;
    public $size;

    function __construct(string $brand, float $price, string $nameGame, string $color, string $size,) {
        parent::__construct($brand, $price);
        
        $this->nameGame = $nameGame;
        $this->color = $color;
        $this->size = $size;
    }
}