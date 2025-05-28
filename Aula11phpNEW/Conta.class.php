<?php

   class Produto {

        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome,$preco,$qtd){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $qtd;
        }   
        public function GetNome(){
            return $this->Nome;
        }
        public function SetNome($nome){
            return  $this->Nome = $nome;
        }
        public function GetPreco(){
            return $this->Preco;
        }
        public function SetPreco($preco){
            return $this->Preco = $preco;
        }
        public function AdicionarEstoque($qtd){
            if ($qtd > 0) {
                $this->Quantidade += $qtd;
            } else {
                echo 'Não pode ser negativo ou igual a zero!';
            }
        }
        public function RemoverEstoque($qtd){
            if ($qtd > 0) {
                $this->Quantidade -= $qtd;
            } else {
                echo 'Não pode ser negativo ou igual a zero!';
            }
        }
        public function MostrarDetalhes(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Valor: R$" . number_format($this->Valor, 2, ",", ".") . "<br>";
            echo "Quantidade: " . $this->Quantidade . "<br>";
        }

 

    }





?>