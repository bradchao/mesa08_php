<?php
    $mysqli = new mysqli('localhost','root','root','iii');

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
    </tr>
    <?php

        while ($data = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$data->id}</td>";
            echo "<td>{$data->account}</td>";
            echo "<td>{$data->passwd}</td>";
            echo "<td>{$data->realname}</td>";
            echo '</tr>';
        }

    ?>


</table>