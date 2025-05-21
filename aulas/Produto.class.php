<?php

    class Produto{

        // atributos

        private $Nome;
        private $Preco;
        private $Quantidade;

        // métodos

        // __construct
        
        public function __construct($nome, $preco, $quantidade_estoque = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade= $quantidade_estoque;
        }

        // getters

        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Preco;
        }

        public function getQuantidade(){
            return $this->Quantidade;
        }

        // setters 

        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function setPreco($preco){
            if ($preco >= 0 ){
                $this->Preco = $preco;
            }else{
                echo "Valor inválido.";
            }
        }

        // outros coisos

        public function adicionarEstoque($qtde){
            $this->Quantidade += $qtde;        
        }

        public function removerEstoque($qtde){
            $this->Quantidade -= $qtde;  
        }

        public function mostrarDetalhes(){
            echo "nome do produto: ". $this->Nome ."<br>";
            echo "preço do produto: ". $this->Preco ."<br>";
            echo "quantidade no estoque: ". $this->Quantidade ."<br><hr>";
        }
    }



?>