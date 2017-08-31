<?php
    //$fp = fopen("./dir1/tree.csv", 'r');
    $fp = fopen("http://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=25bbcd34-16a8-4c4e-a341-4666cd0db5b4&rid=f2d37d43-9d52-46e7-b560-5dea853d4ba5", 'r');

    $line = fgets($fp);
    $line = fgets($fp);
    $line = iconv("BIG5","UTF-8",$line);
    $row = explode(',',$line);
    foreach ($row as $v){
        echo "{$v}<br>";
    }















    
    fclose($fp);
