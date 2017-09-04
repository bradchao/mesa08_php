<?php
    $mysqli = new mysqli('localhost','root', 'root', 'iii');

    $account = $_GET['account'];
    $passwd = password_hash($_GET['passwd'], PASSWORD_DEFAULT);
    $realname = $_GET['realname'];
    $sql =
        "INSERT INTO member (account,passwd,realname) VALUES ('{$account}','{$passwd}','{$realname}')";
    $mysqli->query($sql);
    header("Location: brad55.php");
