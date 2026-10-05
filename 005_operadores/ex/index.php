<?php
    function ex001() {
        $x = 232;
        $y = 6;
        $z = 312;

        $a = ($x * $z) - $x * ($z / $y);

        echo $a; 
    }

    function ex002() {
        $separador = "<hr>";
        $ex = "40" * 52;

        echo gettype($ex);
        echo $separador;
        echo $ex;
    }

    function ex003() {
        $a = 3 + 6;
        $s = 9 - 2;
        $m = 10 * 35;
        $d = 312 / 104;

        echo "$a $s $m $d";
    }

    function ex004() {
        $separador = "<hr>";
        echo 30 % 3;
        echo $separador;
        echo 34 % 9;
    }

    function ex005() {
        $separador = "<hr>";
        $saudacao = "Sr.";
        $nome = "Mikhail";
        $sobrenome = "Dmitriev";

        $exp = "Excelentíssimo " . $saudacao . " " . $nome . " " . $sobrenome;
        echo $exp;
    }
    ex005();
?>