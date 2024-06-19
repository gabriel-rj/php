<?php

if(isset($_POST["enviar"]) ){
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $area2 = $_POST['area2'];
    $idade = $_POST['idade'];

    echo $nome ."<br> ". $estado ."<br> ". $area2 . "<br> " . $idade;
} else{
    echo "não foi possível enviar o formulário";
}


?>