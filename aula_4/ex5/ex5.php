<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 5</title>
</head>
<body style="background-color: <?php $favcolor = $_POST['favcolor']; echo "$favcolor"; ?>;">
    <h1>EXERCÍCIO 5</h1>
    <p>
        Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a
        cor de fundo da página. Utilize a escala de cores a seguir;
        http://www.w3schools.com/html/html_colors.asp
    </p>

    <form action="" method="post">
        <label for="favcolor">Escolha sua cor favorita:</label>
        <input type="color" id="favcolor" name="favcolor" value="#ff0000">
        <input type="submit" value="enviar">
    </form>
</body>
</html>