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


    //
    $cart->addItem('P042', 72);
    $cart->addItem('P142', 2);
    $cart->addItem('P049', 7);
    $cart->rmItem('P003');

?>
<a href="brad43.php">Close</a>



