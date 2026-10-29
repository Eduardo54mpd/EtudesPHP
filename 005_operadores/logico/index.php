<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógico</title>
</head>
<body>
    <h2>
        Operadores lógicos
    </h2>
    <ul>
        <li>
            && vale AND
        </li>
        <li>
            || vale OR
        </li>
        <li>
            ! vale NOT
        </li>
    </ul>
    <hr>
    <?php
        function e() {
            $a = 4 > 2;
            $b = 3 <= 2;

            if ($a && $b) {
                echo "<p>Igual</p>";
            } else {
                echo "<p>Diferente</p>";
            }
        }
        function ou() {
            $a = 4 > 2;
            $b = 3 <= 2;

            if ($a || $b) {
                echo "<p>Igual</p>";
            } else {
                echo "<p>Diferente</p>";
            }
        }
        function nao() {
            $a = 4 > 2;

            if (!$a) {
                echo "<p>Não</p>";
            } else {
                echo "<p>Sim</p>";
            }
        }
    ?>
</body>
</html>