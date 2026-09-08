<?php

    class Trem {
        public $velocidade = 0;

        function acelerar() {
            echo $this->velocidade += 1;
        }
    }