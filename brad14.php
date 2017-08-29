<?php
    // 1. call array function
    $a = array(1,2,3,4,5,6);
    echo count($a);

    echo '<hr />';
    // 2.
    $b[0] = 12;
    echo gettype($b) . ':' . count($b);

    echo '<hr />';
    // 3.
    $c[] = 12;
    echo gettype($c) . ':' . count($c);

    echo '<hr />';
    // 4.
    $d['name'] = 'Brad';
    echo gettype($d) . ':' . count($d);