<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "etec" && $senha == "informática"){
    echo "<p>Logado</p>";
}else{
    echo "<p>errado</p>";
}

?>
