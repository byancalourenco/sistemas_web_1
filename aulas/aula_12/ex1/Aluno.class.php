<?php

    class Aluno{


        //atributos

        private $Nome;
        private $Nota1;
        private $Nota2;

        // métodos

        public function __construct($nome, $nota1, $nota2){
            $this->Nome = $nome;
            $this->Nota1 = $nota1;
            $this->Nota2 = $nota2;
        }

        public function getNome() {
            return $this->Nome;
        }

        public function media(){
            if ($this->Nota1 < 0 || $this->Nota1 > 10 || $this->Nota2 < 0 || $this->Nota2 > 10){
                echo "número inválido";
            }else{
                $media = ($this->Nota1 + $this->Nota2)/2;
                echo "nome: ". $this->Nome ."<br> média: ". $media ."<br><hr>";
            }
        }

        public function verificarSituacao(){
            if ($this->Nota1 < 0 || $this->Nota1 > 10 || $this->Nota2 < 0 || $this->Nota2 > 10){
                echo "número inválido";
            }else{
                $media = ($this->Nota1 + $this->Nota2)/2;
                if($media <= 7){
                    echo "Você está reprovado!";
                }else{
                    echo "Você está aprovado!";
                }
                
            }
        }

  


        
    };

    




?>