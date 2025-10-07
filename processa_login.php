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
    $num_registros = $stmt->rowCount();

    // Obtem o resultado
    $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);

    var_dump($resultado);

    if($num_registros == 0){
        //echo "VOCE NÂO TEM PERMISSÂO";
        header('Locatiion:index.php');
    }
    else{
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nomes'];
        $_SESSION['email'] = $resultado['email'];
        header('Location: restrita.php');
        //echo "ACESSO PERMITIDO A RESTRITA.PHP";
    }
    

?>