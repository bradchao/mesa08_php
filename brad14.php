<?php
    // 1. call array function
    $a = array(1,2,3,4,5,6);
    echo count($a);

    echo '<hr />';
    // 2.
    $b[0] = 12;
    $b[7] = 12.3;
    $b[4] = 'Brad';
    echo gettype($b) . ':' . count($b);

    echo '<hr />';
    // 3.
    $c[] = 12;
    $c[] = 12.123;
    echo gettype($c) . ':' . count($c);

    echo '<hr />';
    // 4.
    $d['name'] = 'Brad';
    $d['gender'] = false;
    $d['age'] = 51;
    echo gettype($d) . ':' . count($d);

    echo '<hr />';
    $ary = array(1,2);
    $ary[] = '123'; // 1,2,123
    $ary[7] = 12.3; // 0=>1,1=>2,2=>123,7=>12.3
    $ary['name'] = 'Brad'; //0=>1,1=>2,2=>123,7=>12.3,'name'=>'Brad'
    var_dump($ary);

    echo '<hr />';
    for ($i=0; $i<count($a); $i++){
        echo "{$a[$i]}<br>";
    }

    echo '<hr />';
    foreach ($ary as $key => $value){
        echo "{$key} --> {$value}<br>";
    }












