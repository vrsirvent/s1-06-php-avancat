<?php

require_once 'classes/film.php';
require_once 'classes/director.php';
require_once 'classes/actor.php';

$director1 = new Director("Juan Antonio Bayona", "Barcelona");
$director2 = new Director("Agustí Villaronga", "Igualada");
$director3 = new Director("Marcel Barrera", "Sant Cugat del Valles");
$director4 = new Director("Jaume Balagueró", "Manresa");

$actor1 = new Actor("Belén Rueda", "Madrid");
$actor2 = new Actor("Francesc Colomer", "Barcelona");
$actor3 = new Actor("Eduard Fernández", "Barcelona");
$actor4 = new Actor("Manuela Velasco", "Madrid");

$film1 = new Film("El Orfanato", 2007, $director1);
$film1->addActor($actor1);
$film2 = new Film("Pa negre", 2010, $director2);
$film2->addActor($actor2);
$film3 = new Film("Mediterráneo", 2021, $director3);
$film3->addActor($actor3);
$film4 = new Film("Rec", 2007, $director4);
$film4->addActor($actor4);

echo "\nFilm catalogue:\n";
echo "\n" . $film1 . "\n";
echo "\n" . $film2 . "\n";
echo "\n" . $film3 . "\n";
echo "\n" . $film4 . "\n";

?>

