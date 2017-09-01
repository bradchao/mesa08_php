<?php
    $rate = $_GET['rate'];

    // 1. 創畫布(1. 白 2. 計有圖)
    $img = ImageCreate(400, 40);

    // 2. 開始畫
    $yellow = ImageColorAllocate($img, 255,255,0);
    $red = ImageColorAllocate($img, 255,0,0);
    ImageFilledRectangle ($img,0,0,400,40,$yellow);
    ImageFilledRectangle ($img,0,0,(int)(400*$rate/100),40,$red);

    // 3. 記憶體 -> 輸出 (1. 畫面 2. 檔案)
    header("Content-type: image/jpeg");
    imagejpeg($img);

    // 4. 清除
    imagedestroy($img);