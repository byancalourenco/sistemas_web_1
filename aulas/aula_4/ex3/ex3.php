<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (($login == "etec") && ($senha == "informatica")){
        echo "logado com sucesso!";
    }else{
        echo "login ou senha incorreto!";
    }

?>