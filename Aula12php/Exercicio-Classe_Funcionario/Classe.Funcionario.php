<?php
    class Funcionario {
        private $nome;
        private $salario;

        public function __construct($nome, $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function aumentarSalario($percentual) {
            $aumento = $this->salario * ($percentual / 100);
            $this->salario += $aumento;
        }

        public function exibirInformacoes() {
            echo "Nome: {$this->nome}";
            echo "Salário: R$ " . $this->salario;
        }
    }

?>