<?php

        $nome = $_GET['nome'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];


        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "Olá ".$nome." <br> A média das notas é: ".$media;


?>