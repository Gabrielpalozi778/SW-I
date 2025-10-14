<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($consulta);

    // Vincula os parametros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // Executa
    $stmt->execute();

    // Obtem registros
    $registros = $stmt->rowCount();

    // Obtem o resultado
    $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);

    //var_dump($resultado);

    if($registros == 1){
        
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header('Location: restrita.php');
        //echo "ACESSO PERMITIDO A RESTRITA.PHP";
    }
    else{
        //echo "VOCE NÂO TEM PERMISSÂO";
        header('Location: index.php');
    }
?>