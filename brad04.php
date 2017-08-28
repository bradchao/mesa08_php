<?php
    $x = $y = $result = '';
    if (isset($_GET['x'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $result = $x + $y;
        //echo "==> $x + $y = $result";
    }
?>
<form>
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    +
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="=" />
    <?php echo $result ?>
</form>