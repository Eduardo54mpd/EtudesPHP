<?php
    $texto = 'Escrevendo um texto <hr>';
    echo $texto;

    $texto2 = "Outro texto para escrever <hr>";
    echo $texto2;

    if(is_string($texto2)) {
        echo "<h1>É cadeia de caracteres</h1>";
    }
?>