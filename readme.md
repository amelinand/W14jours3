<?php

// appache 2 crée un dossieer dans l'os qui contient var/www/html/le nom de mon fichier

$name = 'antho';
$age = 34;
$array = ['Marc',32];
//$obj = {};
$bool = true; //false
$null = null;
$calc = 45 + 56; // donne 101 si $calc = 45.56; donne afficher 4556
//echo($calc);
//var_dump($array);

// $array[2] = 'autre chose'; // Remplasse la valeur de la clé 2
// if ($age > 30){
//     echo('tu as plus de 30 ans ');
// }

function myFunction(){
    echo('ton nom est antho');
    return;
}

//myFunction();

function add ($num1, $num2){
    echo($num1 + $num2);
}

//add(15,15);

//echo ('ton nom est ' .$name .'!'); // concatenation .  .   
//echo gettype($name); // Donne le type d'une variable.






