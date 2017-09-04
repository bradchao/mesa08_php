<?php
    $mysqli = new mysqli('localhost','root','root', 'iii');
    $account = $_GET['account'];
    $id = $_GET['id'];
    $sql = "SELECT id,account FROM member WHERE id != {$id} and account='{$account}'";
    $result = $mysqli->query($sql);
    echo $result->num_rows;

