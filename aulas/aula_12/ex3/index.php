<?php

    include_once 'Funcionario.class.php';

    $func1 = new Funcionario("francisco", 2500);

    $func1->exibirInformacoes();

    $func1->aumentarSalario(50); 

    $func1->exibirInformacoes();

?>
