<?php

class Conta{
    public $Nome;
    public $Cpf;
    public $Saldo;
   
    public function Sacar($valor){
        return $this ->Saldo;
        $this ->Saldo =  $this -> Saldo - $valor;
        return $this -> Saldo;
    }
    public function Depositar($valor){
        $this ->Saldo =  $this -> Saldo + $valor;
        return $this -> Saldo;
        
    }
    public function ConsultarSaldo(){
            echo "NOME: ". $this->Nome . "<br>";
            echo "CPF: ". $this->Cpf . "<br>";
            echo "Saldo Atual: ". $this->Saldo . "<br>";
        
        
    }
}
?>