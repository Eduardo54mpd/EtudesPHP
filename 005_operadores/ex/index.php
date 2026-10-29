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
        $saudacao = "Sr.";
        $nome = "Mikhail";
        $sobrenome = "Dmitriev";

        $exp = "Excelentíssimo " . $saudacao . " " . $nome . " " . $sobrenome;
        echo $exp;
    }

    function ex006(){
        $separador = "<hr>";
        echo 2 == 1;
        echo $separador;
        echo 9 == "9";
    }

    function ex007() {
        $a = 5;
        $b = 3;

        if ($a == $b) {
            echo "igual";
        }
        if ($a != $b) {
            echo "diferente";
        }
        if ($a === $b) {
            echo "idêntico";
        }
        if ($a !== $b) {
            echo "não idêntico";
        }
    }

    function ex008() {
        if (
            (15 > 5 && "João" === "João") &&
            ("teste" > 5 && 1) &&
            (2 == 3 && 5 >= 3)
        ) {
            echo "Sim";
        } else {
            echo "Não";
        }
    }

    function ex009() {
        if (
            (12 < 5 || "João" === "João") ||
            (1 > 5 || 1) ||
            (20 === "20" && 51 >= 31)
        ) {
            echo "Sim";
        } else {
            echo "Não";
        }
    }
?>