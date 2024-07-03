<?php
    class Produto extends Sistema{

        public $preco;
        
        public function atributosProduto(){
            $this->nome = $_POST['nome'];
            $this->preco = $_POST['preco'];
            $this->mensagem = $_POST['mensagem'];
            
            //echo $this->getNome(). "<br>". $this->getCpf(). "<br>". $this->getMensagem()
            echo $this->nome. "<br>". $this->preco. "<br>". $this->mensagem;
            
            
    
    
         }
    }


?>