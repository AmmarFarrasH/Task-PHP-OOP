<?php

    require_once "frog.php";
    require_once "ape.php";
    
    $sheep = new Animal("Shaun");
    echo "Name : ".$sheep->get_name();
    echo "<br/>Legs : ".$sheep->get_legs();
    echo "<br/>Cold blooded : ".$sheep->get_blood();

    $kodok = new Frog("Buduk");
    $kodok->getFrogName();
    $kodok->getFrogLegs();
    $kodok->getFrogBlood();
    $kodok->getFrogJump();

    $ape = new Ape("kera sakti");
    $ape->getApeName();
    $ape->getApeLegs();
    $ape->getApeBlood();
    $ape->getApeYell();
    
?>