<?php

    require_once "../../vendor/autoload.php";

    class Banana{
        public $nome ="Teste de autoload";
        //Método que imprime Nome 
        public function imprimeNome(){

            echo $this->nome;
        }
    }