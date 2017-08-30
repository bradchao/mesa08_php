<?php
    if (!isset($_REQUEST['account']))
        header("Location: brad19.php?error=2");

    $account = $_REQUEST['account'];
    echo $account;