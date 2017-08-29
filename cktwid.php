<?php

    if (isset($_GET['twid'])){
        $twid = $_GET['twid'];

        if (preg_match('/^[A-Z][12][0-9]{8}$/',$twid)){
            echo 'OK';
        }else{
            echo 'XX';
        }



    }

?>
<form>
    <input name="twid" />
    <input type="submit" value="check" />
</form>