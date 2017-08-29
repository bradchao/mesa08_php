<?php
    // 洗牌
    $poker = range(0,51);
    shuffle($poker);

    // 發牌
    foreach ($poker as $k => $v) {
        $players[$k%4][(int)($k/4)] = $v;
    }

    // 攤牌
    $patterns = array('&spades;',
        '<font color="red">&hearts;</font>',
        '<font color="red">&diams;</font>',
        '&clubs;');
    $values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    echo '<table border="1" width="100%">';
    foreach ($players as $player){
        sort($player);
        echo '<tr>';
        foreach ($player as $card){
            echo '<td>';
            $pattern = (int)($card / 13);
            $value = $card % 13;
            echo "{$patterns[$pattern]}{$values[$value]}";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
