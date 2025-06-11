<?php
  include_once 'Produto.class.php';

  $nome = $_POST['nome'];
  $valor = $_POST['valor'];
  $quantidade = $_POST['quant'];

  $produto1 = new Produto($nome, $valor, $quant);
  $produto1->AdicionarEstoque(5);
  $produto1->RemoverEstoque(3);
  $produto1->MostrarDetalhes();

?>