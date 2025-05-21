<?php
  include_once 'conta.class.php';
  $a = new Produto("Processador I7",1700.00,23);
  $a-> adicionarEstoque(23);
  $a-> removerEstoque(23);
  echo "Produto: " . $a->getNome();
  echo "Preço: " . $a->getPreco();
  echo "Estoque: " . $a->getqtd();




?>