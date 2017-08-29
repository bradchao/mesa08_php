<?php
    // 洗牌
    $poker = range(0,51);
    shuffle($poker);

    // 發牌
    $players = array(array(),array(),array(),array());
    foreach ($poker as $k => $v) {
        $players[$k%4][(int)($k/4)] = $v;
    }

    // 攤牌
    echo '<table border="1" width="100%">';
    foreach ($players as $player){
        echo '<tr>';
        foreach ($player as $card){
            echo '<td>';
            echo $card;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
