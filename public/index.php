<?php
require __DIR__ . '/../vendor/autoload.php';

// Exercice 1 : 
use App\Hello;

$hello = new Hello();
echo $hello->talk() . PHP_EOL;

// Exercice 2 : 
use CowSay\Cow;

$marguerite = new Cow('Wesh les wilders');
$marguerite->setTongue('U');
echo $marguerite->say();
