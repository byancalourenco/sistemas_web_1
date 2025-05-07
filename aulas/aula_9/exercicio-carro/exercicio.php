<?php

    include_once 'Carro.class.php';

    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro1->Marca = "Toyota";
    $carro1->Modelo = "Corolla";
    $carro1->Combustivel = "Gasolina/Flex";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = 50;

    $carro2->Marca = "Volkswagen";
    $carro2->Modelo = "Gol";
    $carro2->Combustivel = "Gasolina/Etanol";
    $carro2->Portas =4;
    $carro2->Capacidade_tanque = 55;

    $carro3->Marca = "Honda";
    $carro3->Modelo = "Civic";
    $carro3->Combustivel = "Gasolina";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = 47;

    $carro4->Marca = "Chevrolet";
    $carro4->Modelo = "Onix";
    $carro4->Combustivel = "Flex";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = 44;

    $carro5->Marca = "Ford";
    $carro5->Modelo = "EcoSport";
    $carro5->Combustivel = "Gasolina/Flex";
    $carro5->Portas = 4;
    $carro5->Capacidade_tanque = 52;


    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();





?>