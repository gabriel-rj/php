<?php
    if(isset($_POST['enviar']) ){
        $nome = $_POST['nome'];

        echo $nome;
    } else{
        echo "não clicou no botão";
    }

?>
