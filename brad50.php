<?php
    include 'bradapi.php';
    start_session(30);

    $var1 = 12;
    $var2 = array(1,2,3);
    $var3 = false;

    $_SESSION['var1'] = $var1;
    $_SESSION['var2'] = $var2;
    $_SESSION['var3'] = $var3;
?>
<a href="brad51.php">Brad51</a>
