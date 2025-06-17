<?php
    class Livro {
        private $titulo;
        private $autor;
        private $disponivel;

        public function __construct($titulo, $autor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->disponivel = true;
        }

        public function emprestar() {
            if ($this->disponivel) {
                $this->disponivel = false;
                echo "Livro emprestado";
            } else {
                echo "Livro já está emprestado.";
            }
        }

        public function devolver() {
            $this->disponivel = true;
            echo "Livro devolvido";
        }

        public function exibirStatus() {
            $status = $this->disponivel ? "Disponível" : "Emprestado";
            return "Título: {$this->titulo}  Status: {$status}";
        }
    }
?>
