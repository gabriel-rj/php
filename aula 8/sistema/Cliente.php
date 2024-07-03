<?php
    class Cliente extends Sistema{

        public $cpf;
        
        //método para imprimir atributos

        public function atributosCliente(){
            $this->nome = $_POST['nome'];
            $this->cpf = $_POST['cpf'];
            $this->mensagem = $_POST['mensagem'];
            
            //echo $this->getNome(). "<br>". $this->getCpf(). "<br>". $this->getMensagem()
            echo $this->nome. "<br>". $this->cpf. "<br>". $this->mensagem;
            
            
    
    
         }
    }


?>