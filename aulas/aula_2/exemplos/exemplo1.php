<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo 01 - php</title>
</head>
<body>

    <?php
        $nome = "byanca";
    ?>

    <h1>AULA INTRODUTÓRIA - PHP</h1>
    <h2>Byanca lourenço</h2>

    <p>oiiii, sou a bya- html</p>
    
    <?php
        echo "<p>oiiii, sou a bya- php</p>";
        echo "<p>oiiii, sou a $nome - outra forma php</p>";
        echo "<p>oiiii, sou a " . $nome . "- outra forma php</p>";
    ?>
</body>
</html>