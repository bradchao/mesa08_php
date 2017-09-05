<?php
$mysqli = new mysqli('localhost','root','root','iii');
$sql = "SELECT * FROM food";
$result = $mysqli->query($sql);
?>
<table width="100%" border="1">
    <tr>
        <th>縣市</th>
        <th>城鎮</th>
        <th>名稱</th>
        <th>緯度</th>
        <th>經度</th>
    </tr>
    <?php
        while ($data = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$data->city}</td>";
            echo "<td>{$data->town}</td>";
            echo "<td>{$data->name}</td>";
            echo "<td>{$data->lat}</td>";
            echo "<td>{$data->lng}</td>";
            echo '</tr>';
        }

    ?>
</table>

