<?php

    include_once 'Retangulo.class.php';

    $ret = new Retangulo();

    // altura e largura
    $ret->setLargura(5);
    $ret->setAltura(10);

    // resultados
    echo "Largura: " . $ret->getLargura() . "<br>";
    echo "Altura: " . $ret->getAltura() . "<br>";
    echo "Área: " . $ret->calcularArea() . "<br>";
    echo "Perímetro: " . $ret->calcularPerimetro() . "<br>";




?>