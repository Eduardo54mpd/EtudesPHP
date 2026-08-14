<?php

    class Trem {
        public $velocidade = 0;

        function acelerar() {
            echo $this->velocidade += 1;
        }
    }

    $cptm = new Trem();

    $cptm->vagoes = 8;

    echo $cptm->vagoes; // Embora o compilador interprete como erro, funciona

    echo "<hr>";

    $cptm->acelerar();