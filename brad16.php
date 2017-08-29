<?php
    $p = array(1=>0,0,0,0,0,0);    // 1=>0,2=>0,...
    for ($i=0; $i<10000; $i++){
        $point = rand(1,9);
        $p[$point>=7?$point-3:$point]++;
    }
    foreach ($p as $k => $v){
        echo "{$k}點出現{$v}次<br>";
    }
