<?php

class product {
    public $brand;
    public $price;

    function __construct(string $brand, int $price)
    {
        $this->brand = $brand;
        $this->price = $price;
    }
}

class productFood extends product {
    public $weight;
    public $taste;

    function __construct(string $brand, string $weight, string $taste, int $price,) {
        parent::__construct($brand, $price);
        
        $this->weight = $weight;
        $this->taste = $taste;
    }
}

class productGame extends product {
    public $nameGame;
    public $color;
    public $size;

    function __construct(string $nameGame, string $brand, string $color, string $size, int $price,) {
        parent::__construct($brand, $price);
        
        $this->nameGame = $nameGame;
        $this->color = $color;
        $this->size = $size;
    }
}

$catsFood1 = new productFood("Monge", "1,5kg", "pollo", 15);
$catsFood2 = new productFood("Monge", "10kg", "pollo", 59);
$catsFood3 = new productFood("Virtus", "2.3kg", "salmone", 26);
$catsFood4 = new productFood("Vivi cat", "1.7kg", "prosciutto", 14);
$catsFood5 = new productFood("Rhodes", "2,4kg", "capra", 120);

$dogsFood1 = new productFood("Monge", "12kg", "salmone e riso", 62);
$dogsFood2 = new productFood("Arcana", "11.4kg", "pesce", 80);
$dogsFood3 = new productFood("N&D", "2.5kg", "agnello e mirtillo", 28);
$dogsFood4 = new productFood("Dagel dogs", "20kg", "manzo e agnello", 37);


$catGame1 = new productGame("Canna da pesca", "Gim cat", "giallo e rosso", "48 cm", 4);
$catGame2 = new productGame("Pira-topino", "Camon", "grigio", "7 cm", 3);

$dogGame1 = new productGame("Kong Air Squeaker Tennis Ball", "Kong", "verde", "large", 2); 
$dogGame2 = new productGame("Gioco osso interattivo", "Gim dog", "arancione", "17,5 cm", 6);

var_dump($dogGame2);