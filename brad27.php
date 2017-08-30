<?php
    date_default_timezone_set("Asia/Taipei");
    $dir = @opendir(".") or exit('Server Busy');

    while ($cont = readdir($dir)){

        echo $cont . " : ";
        if (is_dir("./{$cont}")){
            echo "[DIR] : ";
        }else if (is_file("./{$cont}")){
            echo "[FILE] : ";
        }

        echo date('Y-m-d H:i:s' ,filemtime("./{$cont}"));

        echo '<br>';

    }

    echo '<hr>';

    if (@copy('./dir1/file1', './dir3/file2')){
        echo 'Copy OK';
    }else{
        echo 'Copy Fail';
    }

    unlink("./dir2/file2");







