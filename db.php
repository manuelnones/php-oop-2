<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";


$catsFood1 = new Food("Monge", 15.99, "1,5kg", "pollo");
$catsFood2 = new Food("Monge", 59.89, "10kg", "pollo");
$catsFood3 = new Food("Virtus", 26.45, "2.3kg", "salmone");
$catsFood4 = new Food("Vivi cat", 14.99, "1.7kg", "prosciutto");
$catsFood5 = new Food("Rhodes", 119.89, "2,4kg", "capra");

$dogsFood1 = new Food("Monge", 62.65, "12kg", "salmone e riso");
$dogsFood2 = new Food("Arcana", 80.89, "11.4kg", "pesce");
$dogsFood3 = new Food("N&D", 28.89, "2.5kg", "agnello e mirtillo");
$dogsFood4 = new Food("Dagel dogs", 37.99, "20kg", "manzo e agnello");


$catGame1 = new Game("Gim cat", 4.50, "Canna da pesca", "giallo e rosso", "48 cm");
$catGame2 = new Game("Camon", 3.20, "Pira-topino", "grigio", "7 cm");

$dogGame1 = new Game("Kong", 2.49, "Kong Air Squeaker Tennis Ball", "verde", "large"); 
$dogGame2 = new Game("Gim dog", 5.99, "Gioco osso interattivo", "arancione", "17,5 cm");