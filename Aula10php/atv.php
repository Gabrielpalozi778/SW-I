<?php

class Lampada{
    public $marca;
    public $modelo;
    public $combustivel;
    public $portas;
    public $qut_tanque;

    public function Ligar(){

    }
    public function Desligar(){
        
    }
    public function Dados(){
            echo "Fabricante: ". $this->Fabricante . "<br>";
            echo "Tensão: ". $this->Tensao . "<br>";
            echo "Potência: ". $this->Potencia . "<br>";
            echo "Cor: ". $this->Cor . "<br>";
            echo "Status: ". $this->Status . "<br>";
        
        
    }
}
?>