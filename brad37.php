<?php
    // 1. 創畫布(1. 白 2. 計有圖)
    $img = ImageCreateFromJPEG("./imgs/apple.jpeg");

    // 2. 開始畫
    $black = imagecolorallocate($img,0,0,0);
    imagettftext ( $img ,
        24, -30, 40, 200, $black,
        "./fonts/fireflysung.ttf" , "資策會論壇專屬, 歡迎拷貝");


    // 3. 記憶體 -> 輸出 (1. 畫面 2. 檔案)
    //header("Content-type: image/jpeg");
    imagejpeg($img, "./upload/brad.jpg");

    // 4. 清除
    imagedestroy($img);