<?php
require_once(__DIR__ . "/animals/Lion.php");
require_once(__DIR__ . "/animals/Singe.php");
require_once(__DIR__ . "/animals/Zebre.php");
require_once(__DIR__ . "/animals/Ours.php");
require_once(__DIR__ . "/animals/Jaguar.php");
require_once(__DIR__ . "/animals/Crocodile.php");
require_once(__DIR__ . "/animals/Rhinocéros.php");
require_once "visiteurs.php";
require_once "zoo.php";

$zoo = new Zoo();

$zoo->livraison([
    new Lion("Coucouille"),
    new Crocodile("Élodie"),
    new Singe("Jordan"),
    new Zebre(),
    new Singe("Chloé"),
    new Crocodile(),
    new Ours("Brian"),
    new Jaguar("Ezster"),
    new Rhinocéros("Carla"),
    new Lion("Caillou"),

]);

$zoo->vendreBillet([
    new Visiteur("Loïc", true),
    new Visiteur("Yannick", true),
    new Visiteur("Joao",),
    new Visiteur("Yassine", true),
    new Visiteur("Enzo", true),
    new Visiteur("Pierre", true),
    new Visiteur("Nico", true),
    new Visiteur("Damien", true),
    new Visiteur("Le frère de Nico", true),
    new Visiteur("Wahid"),
]);

$zoo->ouvrirLesPortes();
