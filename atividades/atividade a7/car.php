<?php

    require_once "Carro.php";
    require_once "Uno.php";
    require_once "Gol.php";

    $carro = new Carro();
    $gol = new Gol();
    $uno = new Uno();

    echo $carro->cor. "  ".$carro->aro."  ".$carro->nitro."  ". $carro->ano."  ". $carro->arcondicionado."<br>"; 
    echo $gol->marca ."  ".$gol->aro."  ".$gol->nitro."  ". $gol->ano."  ". $gol->arcondicionado."<br>";
    echo $uno->marca ."  ".$uno->aro."  ".$uno->nitro."  ". $uno->ano."  ". $uno->arcondicionado;
?>