<?php

    include_once 'produto.class.php';

    // instancias

    $produto1 = new Produto("celular",1200,50);

    $produto1->adicionarEstoque(50);
    $produto1->removerEstoque(50);

    $produto1->mostrarDetalhes();













?>