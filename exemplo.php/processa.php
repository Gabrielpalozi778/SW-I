<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];

 if ($email == "aluno@gmail.com" && $senha == "1234"){
    header('Location: exemplo.php/autorizado.html');
 } 
          
 

 else{
    header('Location: exemplo.php/naoautorizado.html');

}
?>