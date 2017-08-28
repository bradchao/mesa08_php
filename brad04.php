<?php
    if (isset($_GET['x'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $result = $x + $y;
        echo "==> $x + $y = $result";
    }
?>
<form>
    <input type="text" name="x" />
    +
    <input type="text" name="y" />
    <input type="submit" value="=" />
</form>