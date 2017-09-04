<?php
    $passwd = '123456';
    $newpasswd = password_hash($passwd, PASSWORD_DEFAULT);
    echo $newpasswd;
    echo '<hr>';

    $input = '123456';
    if (password_verify($input, $newpasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }
