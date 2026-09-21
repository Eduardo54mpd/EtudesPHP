<?php
    /*
    Escopos:
     Local: Variáveis declaradas dentro de uma função só podem ser acessadas dentro dela.
     Global: Variáveis declaradas fora de uma função podem ser acessadas dentro dela,
     mas para isso é necessário utilizar a palavra reservada global.
     Static: Variáveis declaradas como static não perdem seu valor quando a função é encerrada.
     Parâmetros: Variáveis declaradas como parâmetros de uma função só podem ser acessadas dentro dela.
    */

    function teste() {
        $local = "Local"; // Variável local
        echo $local;
    }

    teste();
    echo "<hr/>";

    $global = "Global"; // Variável global
    echo $global;
    echo "<hr/>";

    function estatico() {
        static $static = 0; // Variável estática
        echo $static;
        $static++;
        echo $static;
    }

    estatico();
    estatico();
    echo "<hr/>";

    function parametros($parametro) {
        echo $parametro; // Variável parâmetro
    }
    parametros("Parâmetro");
?>