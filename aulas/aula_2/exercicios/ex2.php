<?php

    echo "<h1>EXERCÍCIO 2!</h1> <style>h1{color:red;}</style>";


    // definindo a constante e a variavel
    define("pi",3.141592);
    $raio= 5;

    // area
    $area= 4 * pi * pow($raio, 2);
    echo "área: ".$area;

    echo "<br>";


    // volume
    $volume = (4 / 3) * pi * pow($raio, 3);
    echo "volume: ".$volume;

    echo "<br>";
    echo "<br>";

    // arredondar
    echo "área arredondada: ".number_format($area, 2)."<br>";
    echo "volume arredondado: ".number_format($volume, 2);

    /* number_format($valor, 2) → Formata a saída para exibir apenas duas casas decimais. */


?>