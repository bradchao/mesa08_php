<?php
    // 1. 洗牌
    $card = 10;
    for ($i=0; $i<$card; $i++){
        do {
            $temp = rand(0,$card-1);

            // 檢查機制
            $isRepeat = false;
            for ($j=0; $j<$i; $j++){
                if ($poker[$j] == $temp){
                    // 重複了
                    $isRepeat = true;
                    break;
                }
            }

        }while ($isRepeat);

        $poker[$i] = $temp;
        echo "{$temp}<br>";
    }
    // 2. 發牌 =>4

    // 3. 攤牌 (理牌)