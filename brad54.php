<?php
    $mysqli = @new mysqli(
            'localhost',
            'root',
            'root',
            'iii');

    $sql = "INSERT INTO member (account,passwd,realname) " .
            "VALUES ('brad','123','Brad')";
    $mysqli->query($sql);

//    $sql = "DELETE FROM member WHERE id = 5";

//    $sql = "UPDATE member SET account='tony',passwd='321' WHERE id=2";

    $sql = "SELECT * FROM member";


    $result = $mysqli->query($sql);    // return a mysqli_query Object

    //$data = $result->fetch_array();
//    while ($data = $result->fetch_assoc()){
//        echo "{$data['id']} : {$data['account']} : {$data['realname']}<br>";
//    }

    $data = $result->fetch_object();
    echo $data->account;




