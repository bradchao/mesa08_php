<?php
$json = file_get_contents('http://localhost/brad69.php');
$root = json_decode($json);
var_dump($root);
echo '<hr>';
foreach ($root as $data){
    $member = $data->member;  // Object
    echo "Member:{$member->name}({$member->id})<br>";

    $list = $data->list;    // Object => Array
    foreach ($list as $p => $q){
        echo "{$p} : {$q}<br>";
    }
    echo '<hr>';
}







