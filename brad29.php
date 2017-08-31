<?php
    $fp = fopen("./dir1/file2", 'a+');

    fwrite($fp, "Hello, World\nOK456\nBrad2");

    fclose($fp);