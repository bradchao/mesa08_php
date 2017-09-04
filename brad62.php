<?php
    $mysqli = new mysqli('localhost','root','root', 'iii');
    $account = $_GET['account'];
    $sql = "SELECT account FROM member WHERE account='{$account}'";
    $result = $mysqli->query($sql);
    echo $result->num_rows;

