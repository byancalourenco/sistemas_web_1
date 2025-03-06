<?php

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];


    if (($n1 > $n2) && ($n1 > $n3)){
        $maior = $n1;
    }elseif (($n2 > $n1) && ($n2 > $n3)){
        $maior = $n2;
    }else{
        $maior = $n3;
    }

    echo "O maior número é: ".$maior;
?>