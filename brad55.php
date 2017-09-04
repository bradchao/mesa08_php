<?php
    $mysqli = new mysqli('localhost','root','root','iii');

    if (isset($_GET['delid'])){
        // dele
        $delid = $_GET['delid'];
        $sql = "DELETE FROM member WHERE id={$delid}";
        $mysqli->query($sql);

    }

    $sql = "SELECT * FROM member";
    $result = $mysqli->query($sql);


?>
<a href="brad57.php">New Member</a><hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Account</th>
        <th>Password</th>
        <th>Real name</th>
        <th>del</th>
    </tr>
    <?php

        while ($data = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$data->id}</td>";
            echo "<td>{$data->account}</td>";
            echo "<td>{$data->passwd}</td>";
            echo "<td>{$data->realname}</td>";
            echo "<td><a href='?delid={$data->id}'>del</td>";
            echo '</tr>';
        }

    ?>


</table>