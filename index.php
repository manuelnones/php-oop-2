<?php

class product {
    public $brand;
    public $quantity;
    public $taste;
    public $price;


    function __construct(string $brand, string $quantity, string $taste, int $price)
    {
        $this->brand = $brand;
        $this->quantity = $quantity;
        $this->taste = $taste;
        $this->price = $price;
    }
}

$catsFood1 = new product("Monge", "1,5kg", "pollo", 15);
$catsFood2 = new product("Monge", "10kg", "pollo", 59);
$catsFood3 = new product("Virtus", "2.3kg", "salmone", 26);
$catsFood4 = new product("Vivi cat", "1.7kg", "prosciutto", 14);

$dogsFood1 = new product("Monge", "12kg", "salmone e riso", 62);
$dogsFood2 = new product("Arcana", "11.4kg", "pesce", 80);
$dogsFood3 = new product("N&D", "2.5kg", "agnello e mirtillo", 28);
$dogsFood4 = new product("Dagel dogs", "20kg", "manzo e agnello", 37);


var_dump($catsFood1);
var_dump($dogsFood1);
