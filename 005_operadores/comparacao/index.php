<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador</title>
</head>
<body>
    <h1>Operadores de comaparação</h1>
    <ul>
        <li>
            == Igualdade
        </li>
        <li>
            === Idêntico
        </li>
        <li>
            != Diferente
        </li>
        <li>
            !== Não Idêntico
        </li>
        <li>
            > e >= Maior (maior ou igual)
        </li>
        <li>
            < e <= Menor (menor ou igual)
        </li>
        <hr>
    </ul>
    <?php
        function igual() {
            echo 2 == "2";
        }

        function identic() {
            echo 3 === 3;
        }

        function diferente () {
            echo 2 != 6;
        }

        function nonIdentic () {
            echo 2 !== '2';
            echo 1 !== '5'; // Retorna falso
        }

        function maior() {
            echo 2 > 1;
            echo 4 >= 4;
        }

        function menor () {
            echo 5 < 10;
            echo 7 <= 7;
        }
    ?>
</body>
</html>