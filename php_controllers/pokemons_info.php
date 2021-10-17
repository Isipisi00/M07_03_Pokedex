<?php

$name;
$region;
$type;
$height;
$weight;
$evo;

if (isset($_POST)){

    $name =     $_POST['pokemon_name'];
    $region =   $_POST['pokemon_region'];
    $type =     $_POST['pokemon_type'];
    $height =   $_POST['pokemon_height'];
    $weight =   $_POST['pokemon_weight'];
    $evo =      $_POST['pokemon_evolution'];

    echo $name;
}