<?php
    $a = 101; $b = 8;
    switch ($a){
        case 1:
            echo 'A';
            break;
        default:
            echo 'Default';
            //break;
        case 10:
            echo 'B';
            //break;
        case 100:
            echo 'C';
            break;
    }
    echo '<br>Finish';