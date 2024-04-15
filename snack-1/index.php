<?php

$games =
[
    "Olimpia Milano",
    "Cantù",
    "55",
    "60",
];
/* [
    "Olimpia Catanzaro",
    "Ciarlatani",
    "5",
    "0",
],
[
    "Booleani",
    "Giangi",
    "550",
    "6",
]; */

var_dump("hello ?");

var_dump($games);

foreach ($games as $value)
{
    /* echo $key . ": " . $value . "<br>"; */
    echo $games[0]. "-" . $games[1] . " | " . $value[2] . "-" . $value[3];
}

?>