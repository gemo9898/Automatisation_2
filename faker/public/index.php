<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Personne;
use Faker\Factory;


$faker = Factory::create('fr_FR'); 
$personne = new Personne();


$personne->setPrenom($faker->firstName);
$personne->setNom($faker->lastName);
$personne->setAge($faker->numberBetween(18, 65));
$personne->setAdresse($faker->streetAddress);
$personne->setVille($faker->city);
$personne->setCodePostal($faker->postcode);
$personne->setEmail($faker->email);
$personne->setTelephone($faker->phoneNumber);
$personne->setProfession($faker->jobTitle);

require_once __DIR__ . '/../src/View/affichage.php';
