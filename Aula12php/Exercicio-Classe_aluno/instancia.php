<?php
include_once 'Classe.aluno.php';

$aluno1 = new Aluno("Clovis",7,6);
$aluno1 = new Aluno("Euzébio",4,9);


$aluno1->get_nome();
$aluno1->get_nota1();
$aluno1->get_nota2();
$aluno1->get_media();
$aluno1->verificarSituacao();


$aluno2->get_nome();
$aluno2->get_nota1();
$aluno2->get_nota2();
$aluno2->get_media();
$aluno2->verificarSituacao();



?>