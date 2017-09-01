<?php
    session_start();

    $var1 = $_SESSION['var1'];
    $var2 = $_SESSION['var2'];
    $var3 = $_SESSION['var3'];

    var_dump($var1);
    echo '<hr>';
    var_dump($var2);
    echo '<hr>';
    var_dump($var3);
    echo '<hr>';