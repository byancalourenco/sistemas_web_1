<?php

    // incluindo a outra pag
    include_once 'Lampada.class.php';

    // criando obj
    $lamp1 = new Lampada();
    $lamp2 = new Lampada();

    // colocando valores lamp1
    $lamp1->Fabricante = "philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "preto";

    // colocando valores lamp1
    $lamp2->Fabricante = "osram";
    $lamp2->Tensao = 220;
    $lamp2->Potencia = 30;
    $lamp2->Cor = "azul";

    // chamando as funções

    // liguei e mostrei
    $lamp1->Ligar();
    $lamp1->MostrarDados();

    // desliguei e mostrei
    $lamp2->Desligar();
    $lamp2->MostrarDados();

   
?>