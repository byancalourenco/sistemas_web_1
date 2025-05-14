<?php

    class Conta{

        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){

            if ($valor <= $this->Saldo){

                $this->Saldo -= $valor; 
                $resultado = "saldo atualizado para: R$". $this->Saldo;
                return $resultado;

            }else{
                $resultado = "saldo insuficiente <br><hr>";
                return $resultado;
            }
            
        }

        public function Depositar($valor){
          
            $this->Saldo += $valor; 
            $resultado = "saldo atualizado para: R$". $this->Saldo ."<br><hr>";
            return $resultado;
    
        }

        public function Consultarsaldo(){
            echo "nome: ". $this->Nome ."<br>";
            echo "cpf: ". $this->Cpf ."<br>";
            echo "saldo: R$ ". $this->Saldo ." 💰<br><hr>";
        }



    }


?>