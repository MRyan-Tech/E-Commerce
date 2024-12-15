<?php

    $menu = 7;
    $bilangan1 = 75;
    $bilangan2 = 40;

    if ($menu == 1) {
        echo $bilangan1 + $bilangan2;
    } elseif ($menu == 2) {
        echo $bilangan1 - $bilangan2;
    } elseif($menu == 3) {
        echo $bilangan1 * $bilangan2;
    } else {
        echo $bilangan1 / $bilangan2;
    };

?>

