<?php

    class Livro {

        // atributos
        private $Titulo;
        private $Autor;
        private $Disponivel;

        // construtor
        public function __construct($titulo, $autor) {
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = true;
        }

        // emprestar
        public function emprestar() {
            if ($this->Disponivel) {
                $this->Disponivel = false;
                echo "Livro emprestado com sucesso.<br><hr>";
            } else {
                echo "O livro já está emprestado.<br><hr>";
            }
        }

        // devolver
        public function devolver() {
            if (!$this->Disponivel) {  // CORREÇÃO: só pode devolver se estiver emprestado
                $this->Disponivel = true;
                echo "Livro devolvido com sucesso.<br><hr>";
            } else {
                echo "O livro já está disponível.<br><hr>";
            }
        }

        // exibir status
        public function exibirStatus() {
            if ($this->Disponivel) {
                $status = 'Disponível';
            } else {
                $status = 'Emprestado';
            }
            return "Título: {$this->Titulo} - Status: {$status}";
        }
    }

?>
