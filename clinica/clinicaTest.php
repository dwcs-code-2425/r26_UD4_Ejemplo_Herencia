<?php
// Uso
require_once __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR.'herencia/Animal.php';
require_once __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR.'herencia/Perro.php';
require_once __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR.'herencia/Gato.php';
require_once __DIR__ . DIRECTORY_SEPARATOR.'Clinica.php';

$clinica = new Clinica("Clinica Veterinaria");

$perro1 = new Perro("Rex");
$perro2 = new Perro("Toby");
$gato1 = new Gato("Misu");
$elefante = new Animal("Dumbo");

$clinica->agregarAnimal($perro1);
$clinica->agregarAnimal($perro2);
$clinica->agregarAnimal($gato1);
$clinica->agregarAnimal($elefante);

$clinica->listarAnimales();
$clinica->contarPorTipo();