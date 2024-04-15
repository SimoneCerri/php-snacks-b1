<?php

$games =
[
    "home" => "Olimpia Milano",
    "enemy" => "Cantù",
    "home_point" => "55",
    "enemy_point" => "60",
];
/* [
    "home" => "Olimpia Catanzaro",
    "enemy" => "Ciarlatani",
    "home_point" => "5",
    "enemy_point" => "0",
],
[
    "home" => "Booleani",
    "enemy" => "Giangi",
    "home_point" => "550",
    "enemy_point" => "6",
]; */

var_dump("hello ?");

var_dump($games);

foreach ($games as $key => $value)
{
    echo $key . ": " . $value . "<br>";

    /* echo $games[0]. "-" . $games[1] . " | " . $value[2] . "-" . $value[3]; */
}

?>