<?php
    $cptm = new Trem();

    $cptm->vagoes = 8;

    echo $cptm->vagoes; // Embora o compilador interprete como erro, funciona

    echo "<hr>";

    $cptm->acelerar();
?>