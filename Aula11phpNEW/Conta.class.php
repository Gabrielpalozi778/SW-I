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

   
   public function getNome(){
    return $this->Nome;
   }
   public function setNome($Nome){
    return  $this->Nome = $nome;
   }
   public function getPreco(){
    return $this->Preco;
   }
   public function setPreco($Nome){
    return $this->Valor = $Preco;
   }
   public function adicionarEstoque($qtd){
    if ($qtd > 0) {
        $this->Quantidade += $qtd;
    } else {
        echo 'Não pode ser negativo ou igual a zero!';
    }
    }
   public function removerEstoque($qtd){
    if ($qtd > 0) {
        $this->Quantidade -= $qtd;
     } else {
        echo 'Não pode ser negativo ou igual a zero!';
    }
    public function mostrarDetalhes(){
        echo "Nome: " . $this->Nome . "<br>";
        echo "Valor: R$" . number_format($this->Valor, 2, ",", ".") . "<br>";
        echo "Quantidade: " . $this->Quantidade . "<hr>";
    }
}






   }