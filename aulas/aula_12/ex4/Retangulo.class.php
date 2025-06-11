<?php

    class Retangulo {

        // atributos
        private $largura;
        private $altura;

        // largura
        public function setLargura($largura) {
            if ($largura > 0) {
                $this->largura = $largura;
            } else {
                echo "Valor inválido para largura<br>";
            }
        }

        // altura
        public function setAltura($altura) {
            if ($altura > 0) {
                $this->altura = $altura;
            } else {
                echo "Valor inválido para altura<br>";
            }
        }

        // obter largura
        public function getLargura() {
            return $this->largura;
        }

        // obter altura
        public function getAltura() {
            return $this->altura;
        }

        // calcular área
        public function calcularArea() {
            return $this->largura * $this->altura;
        }

        // calcular perímetro
        public function calcularPerimetro() {
            return 2 * ($this->largura + $this->altura);
        }
    }

?>
