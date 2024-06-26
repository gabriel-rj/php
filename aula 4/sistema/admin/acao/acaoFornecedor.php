<?php
    if (isset($_POST ['enviar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $logradouro = $_POST['logradouro'];
        $cidade = $_POST['cidade'];
        $email = $_POST ['email'];
        $celular = $_POST['celular'];
        $fixo = $_POST['fixo'];
        $cep = $_POST['cep'];
        $n =$_POST['n'];
        $bairro = $_POST['bairro'];
        $uf = $_POST['uf'];

        if (empty(trim($nome))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($cpf))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($logradouro))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($email))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($celular))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($fixo))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($cep))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($n))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($bairro))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        } else if (empty(trim($uf))){
        echo "<script> alert ('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
        
        }else{
            echo $nome . "<br>" . $email . "<br> " . $cpf . "<br> " . $celular . "<br> " . $fixo . " <br>" . $cep . "<br> " . $logradouro . "<br> " . $n . " <br>" . $bairro . " <br>" . $cidade . "<br> " . $uf;
        }
    }
        
?>