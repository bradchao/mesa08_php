<?php
    $fp = fopen("./dir1/file1", 'r');

    while ($c = fread($fp,1)){
        echo $c;
    }


    fclose($fp);
