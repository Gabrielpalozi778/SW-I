<?php
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}
    $ret = new Retangulo(5, 3);
    echo "Largura: " . $ret->getLargura();
    echo "Altura: " . $ret->getAltura();
    echo "Área: " . $ret->calcularArea();
    echo "Perímetro: " . $ret->calcularPerimetro();
?>