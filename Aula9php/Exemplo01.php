<?php

    include_once 'Pessoa.class.php';

    //CRIAR UM OBJETO - INSTANCIA DA CLASSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();


    // var_dump($fulano);
    // ATRIBUIR VALOR
    $fulano->Nome = " Fulano da Silva";
    $fulano->Peso =  90;
    $fulano->Altura =  1.84;


    $ciclano->Nome = " Ciclano da Silva";
    $ciclano->Peso =  70;
    $ciclano->Altura =  1.50;
    // CHAMANDO UM MÉTODO PARA A CLASSE FULANO
    $fulano->MostrarDados();
    $ciclano->MostrarDados();





?>