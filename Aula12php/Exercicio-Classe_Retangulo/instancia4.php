<?php
    $ret = new Retangulo(5, 3);
    echo "Largura: " . $ret->getLargura();
    echo "Altura: " . $ret->getAltura();
    echo "Área: " . $ret->calcularArea();
    echo "Perímetro: " . $ret->calcularPerimetro();
?>