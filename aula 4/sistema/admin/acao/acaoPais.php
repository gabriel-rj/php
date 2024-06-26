<?php

    if(isset( $_POST ['enviar'] )){

        echo $nome= $_POST['nome'];

        if(empty (trim ($nome) ) ){
            echo "<script> alert ('campo em branco');window.location.href='../cadastroPais.php'; </script>";

        }
    } else{
        echo "<script> alert ('cadastrado com sucesso ');window.location.href='../cadastroPais.php'; </script>";
    }
    


?>