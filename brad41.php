<?php
    include 'bradapi.php';
    session_start();

    $member = new Member('001', 'Brad', 1);
    $cart = new Cart($member);
    $_SESSION['cart'] = $cart;

    $cart->addItem('P001', 20);
    $cart->addItem('P003', 12);
    $cart->edItem('P001', 41);

    $list = $cart->getBuylist();


    //----------------------------------
    echo "Member: {$member->getName()}, Welcome<br>";
    echo '<hr>';

    foreach ($list as $k => $v){
        echo "{$k} : {$v}<br>";
    }
?>
<a href="brad42.php">Next Page</a>




