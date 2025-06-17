<?php

class Aluno{
    private $Nome;
    private $Nota1;
    private $Nota2;

    public function __construct($nome,$nota1,$nota2){
        $this->Nome = $nome;
        $this->Nota1 = $nota1;
        $this->Nota2 = $nota2;

    }
    public function get_nome(){
        return $this->$Nome;
    }
    public function get_nota1(){
        return $this->$Nota2;
    }
    public function get_nota2(){
        return $this->$Nota2;
    }
   
    public function calcularMedia() {
        return ($this->Nota1 + $this->Nota2) / 2;
    }
    public function verificarSituacao(){
        if ($media < 7){
            echo'Reprovado, menor do que 7.';
        }
        if ($media >= 7){
            echo'Aprovado, maior do que 7.';
        }
        if ($media > 10){
            echo'Impossivel.';
        }
        if ($media <= 0){
            echo'Não pode ser igual a zero ou negativo.';
        }

    }
    
  


}




?>