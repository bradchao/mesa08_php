<?php
    include 'bradapi.php';
    session_start();

    $cart = $_SESSION['cart'];

    $name = $cart->getMember()->getName();

    echo "Page2: {$name}<hr>";
    $list = $cart->getBuylist();
    foreach ($list as $k => $v){
        echo "{$k} : {$v}<br>";
    }