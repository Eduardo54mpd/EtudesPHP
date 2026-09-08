<?php
    $x = 48;
    
    $y =& $x;

    echo $x;
    echo '<hr>';
    echo $y;

    echo "<h3>Reatribuição</h3>";

    $y = 465;
    echo $y;
    echo '<hr>';
    echo $x;
?>