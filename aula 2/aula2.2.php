<?php

if(isset($_POST["enviar"]) ){
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $area2 = $_POST['area2'];

    echo $nome ." ". $estado ." ". $area2;
} else{
    echo "não foi possível enviar o formulário";
}


?>