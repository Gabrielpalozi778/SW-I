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
    return $this->Nome;
   }
   public function getPreco(){
    return $this->Preco;
   }
   public function setPreco($Nome){
    return $this->Nome;
   }
   public function adicionarEstoque($qtd){
    return $this->qtd;
   }
   public function removerEstoque($qtd){
    return $this->qtd;
   }
   public function mostrarDetalhes(){
    return $this->Nome;
   }







}

   
   






?>