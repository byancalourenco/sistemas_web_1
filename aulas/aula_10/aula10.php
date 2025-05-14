<?php

    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "fulano da silva";
    $conta1->Cpf = "123.456.789-00";
    // $conta1->Saldo = 1500;

    $conta1->ConsultarSaldo();

    echo $conta1->Depositar(1500);

    $conta1->ConsultarSaldo();

    // echo $conta1->sacar(700);
    
    // $conta1->ConsultarSaldo();




?>