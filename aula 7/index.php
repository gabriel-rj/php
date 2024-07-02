<?php

    require_once "Mae.php";
    require_once "Filho.php";
    require_once "Filha.php";

    $mae = new Mae();
    $filho = new Filho();
    $filha = new Filha();

    echo $mae->nome. "<br>";
    echo $filho->altura ."<br>".$filha->nome."<br>";
    echo $filha->altura ."<br>". $filho->nome;


?>