<?php
    // 1. 創畫布(1. 白 2. 計有圖)
    $img = ImageCreateFromJPEG("./imgs/apple.jpeg");

    // 2. 開始畫
    $black = imagecolorallocate($img,0,0,0);
    imagettftext ( $img ,
        24, 0, 40, 200, $black,
        "./fonts/fireflysung.ttf" , "Hello, Brad");
    

    // 3. 記憶體 -> 輸出 (1. 畫面 2. 檔案)
    header("Content-type: image/jpeg");
    imagejpeg($img);

    // 4. 清除
    imagedestroy($img);