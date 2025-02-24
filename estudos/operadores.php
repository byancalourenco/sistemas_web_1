<?php

    /* Operadores aritiméticos! */
    echo "<h1>Operadores aritiméticos!</h1> <style> h1{color: blue; font-size: 20px; font-weight: 700;} </style>";

    $a = 5;
    $b = 2;

    echo "<h3>Adição | + </h3> <style> h3{color: purple;} </style>";
    echo $a + $b;

    echo "<h3>Subtração | -</h3> <style> h3{color: purple;} </style>";
    echo $a - $b;

    echo "<h3>Multiplicação | * </h3> <style> h3{color: purple;} </style>";
    echo $a * $b;

    echo "<h3>Divisão | / </h3> <style> h3{color: purple;} </style>";
    echo $a / $b;

    echo "<h3>Resto da divisão | % </h3> <style> h3{color: purple;} </style>";
    echo $a % $b;


    /* Operadores de incremento e decremento! */

    echo "<h1>Operadores de incremento e decremento!</h1> <style> h1{color: blue; font-size: 20px; font-weight: 700;} </style>";


    /* NORMAL */
    echo "<h3>Normal</h3> <style> h3{color: purple;} </style>";

    $valor = 20; /* declarei */
    echo $valor; /* mostrei */


    /* INCREMENTO */

    echo "<h3>Incremento</h3> <style> h3{color: purple;} </style>";

    /* pré-incremento */
    echo "<p> <span> Pré-incremento  (++$) </span> | incrementou depois mostrou </p> <style> span{color: red;} </style>";

    $valor2 = 20;
    echo ++$valor2;

    /* pós-incremento */
    echo "<p> <span> Pós-incremento  ($++) </span> | mostrei o valor e depois incrementei </p> <style> span{color: red;} </style>";

    $valor3 = 20;
    echo $valor3++." ---- fiz a incrementação ";
    echo "<br>";
    echo $valor3." ---- chamei dnv e já funciona "; 


    /* DECREMENTO */

    echo "<h3>Decremento</h3> <style> h3{color: purple;} </style>";


    /* pré-decremento */
    echo "<p> <span> Pré-decremento  (--$) </span> | decrementou depois mostrou o valor </p> <style> span{color: red;} </style>";

    $valor4 = 20;
    echo --$valor4;


    /* pós-decremento */
    echo "<p> <span> Pós-decremento  (--$) </span> | mostrei o valor e depois decrementei </p> <style> span{color: red;} </style>";

    $valor4 = 20;
    echo $valor4--." ---- fiz a decrementação ";
    echo "<br>";
    echo $valor4." ---- chamei dnv e já funciona "; 


    /* Operadores binários */

    /* echo "<h1>Operadores binários!</h1> <style> h1{color: blue; font-size: 20px; font-weight: 700;} </style>";

    $x = 14; 1110
    $y = 12; 1100

    echo "<h3>Não binário | ~ </h3> <style> h3{color: purple;} </style>";
    echo ~$x;

    echo "<h3>Ou binário | | </h3> <style> h3{color: purple;} </style>";


    echo "<h3> E binário | & </h3> <style> h3{color: purple;} </style>";


    echo "<h3>Xor binário | ^ </h3> <style> h3{color: purple;} </style>";


    echo "<h3>Deslocamento à direita | >> </h3> <style> h3{color: purple;} </style>";


    echo "<h3>Deslocamento à esquerda| << </h3> <style> h3{color: purple;} </style>"; */


    /* Operadores de Atribuição! */

    echo "<h1>Operadores de Atribuição!</h1> <style> h1{color: blue; font-size: 20px; font-weight: 700;} </style>";

    $c = 5;
    $d= 4;

    echo "<h3> .= </h3> <style> h3{color: purple;} </style>";
    $c &= $d;
    echo $c;




?>