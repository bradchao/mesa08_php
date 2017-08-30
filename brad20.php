<?php
    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        echo "{$account} : {$passwd}<br>";

        $like = $_REQUEST['like'];
        foreach ($like as $k => $v){
            echo "{$k} : {$v}<br>";
        }


    }
