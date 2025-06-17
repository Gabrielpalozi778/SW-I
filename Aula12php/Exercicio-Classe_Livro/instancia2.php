<?php
    
    $livro1 = new Livro("1984", "George Orwell");
    echo $livro1->exibirStatus();
    $livro1->emprestar();
    echo $livro1->exibirStatus();
    $livro1->devolver();
    echo $livro1->exibirStatus();
?>