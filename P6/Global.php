<?php
    $x = 75;
    $y = 25;

    function additions() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    additions();
    echo $z;
?>



