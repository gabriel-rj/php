<?php
    if (isset($_POST ['enviar'])){
        $razao = $_POST['razao'];
        $cnpj = $_POST['cnpj'];
        $inscricao = $_POST['inscricao'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $mucipio = $_POST ['municipio'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email']; 
        $nome2 =$_POST['nome2'];
        $funcao2 = $_POST['funcao2'];
        $telefone2 = $_POST['telefone2'];
        $email2 = $_POST['email2'];
        $nome3 =$_POST['nome3'];
        $funcao3 = $_POST['funcao3'];
        $telefone3 = $_POST['telefone3'];
        $email3 = $_POST['email3'];
        
        echo $razao ."<br> " . $cnpj ."<br> " .  $inscricao ."<br> " . $logradouro ."<br> " . $bairro ."<br> " . $mucipio ."<br> " . $uf ."<br> " . $cep ."<br> " . $telefone ."<br> " . $email."<br> " .  $nome2."<br> " .  $funcao2."<br> " .  $telefone2."<br> " .  $email2 ."<br> " . $nome3."<br> " .  $funcao3."<br> " .  $telefone3."<br> " .  $email3;   
    

        }else{
            echo "não clicou no botão"; }
        
?>