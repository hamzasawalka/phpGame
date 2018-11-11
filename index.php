<?php
include_once('./soldier.php');



$p1 = new Player('hamza');
$p1->army = new Army();
$p1->army->add('Legionnaire', 5);
// $p1->army->addHero('Legionnaire');


$p2 = new Player('Ahmad');
$p2->army = new Army();
$p2->army->add('Imperian', 5);


$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
$p1->fight($p2);
// var_dump($p1);