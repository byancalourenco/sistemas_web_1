<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laços</title>
</head>
<body>
    <h1 style="color: purple;">LAÇOS DE REPETIÇÃO</h1>
    <h2 style="color: blue;">FOR</h2>
    <p>percorre um bloco de código um número especificado de vezes</p>
    <p>
    for (expression1, expression2, expression3) { <br>
        code block <br> 
    }
    </p>
    <ul>
        <li>expression1 é avaliado uma vez</li>
        <li>expression2 é avaliada antes de cada iteração</li>
        <li> expression3 é avaliada após cada iteração</li>
    </ul>
    <ul>
        <li>expression1: definindo por onde começa</li>
        <li>expression2: até onde vai</li>
        <li> expression3: oque acontece a cada volta</li>
    </ul>

    <h3>exemplo: Imprima os números de 0 a 10:</h3>

    <?php

        for ($i=0; $i <= 10; $i++) {
            echo $i ."<br>";
        }

    ?>

    <h3>exemplo utilizando break</h3>
    <p>break - quando $i = x, vai parar, mesmo que a condição seja verdadeira!</p>

    <?php

        for ($i=0; $i <= 10; $i++) {
            if ($i == 6) break;
            echo $i."<br>";
        }

    ?>

    <h3>exemplo utilizando passo 10</h3>
    <p>passo 10 - conta até 100 por dezenas</p>

    <?php

        for ($i=0; $i <= 100; $i+=10) {
            if ($i == 6) break;
            echo $i."<br>";
        }

    ?>

    <h2 style="color: blue;">WHILE</h2>
    <p>executa um bloco de código enquanto a condição especificada for verdadeira.</p>

    <?php

        $i = 0; // começa daqui

        while ($i < 6) {
            echo $i; // mostra
            $i++; //depois incrementa
        }

    ?>

    <h3>exemplo utilizando break</h3>

    <?php

        $i = 0;

        while ($i < 11) {
            if ($i == 8) break;
            echo $i;
            $i++;
        }

    ?>

    <h3>exemplo utilizando passo 10</h3>

    <?php

        $i = 0;

        while ($i < 100) {
            $i+=10;
            echo $i ."<br>";
        }

    ?>

    <h2 style="color: blue;">DO...WHILE</h2>
    <p>Percorre um bloco de código uma vez e depois repete o loop enquanto a condição especificada for verdadeira.</p>

    <h3>exemplo</h3>
    <p>Defina $i = 8e imprima $i enquanto $ifor menor que 6:</p>

    <?php

        $i = 8;

        do {
            echo $i;
            $i++;
        } while ($i <6);

    ?>

    <h2 style="color: blue;">FOREACH</h2>
    <p>Percorre um bloco de código para cada elemento em uma matriz ou cada propriedade em um objeto.</p>

    <?php

    $cores = array("vermelho", "azul", "verde", "roxo");

    foreach ($cores as $i) {
        echo "$i <br>";
    }

    ?>

   <p>outro exemplo: </p>

   <?php

        $idades = array("by" => 16, "ni" => 17);

        foreach ($idades as $x => $y) {
            echo "$x : $y <br>";
        }

    ?>
</body>
</html>