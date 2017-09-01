<?php
// 1. 創畫布(1. 白 2. 計有圖)
$imgS = ImageCreateFromJPEG("./imgs/h.jpg");
$imgT = ImageCreate(200,200);

// 2. 開始畫
$imgSW = imagesx($imgS); $imgSH = imagesy($imgS);
if ($imgSH > $imgSW){
    // 長型
    $imgTH = 200;
    $imgTW = $imgSW * $imgTH / $imgSH ;
}else{
    // 寬型
    $imgTW = 200;
    $imgTH = $imgSH * $imgTW / $imgSW;
}
//echo "{$imgTW} x {$imgTH}";
$whilt = imagecolorallocate($imgT, 255,255,255);
imagefilledrectangle($imgT,0,0,200,200,$whilt);
imagecopyresized ( $imgT , $imgS , 0 , 0 , 0 , 0 ,
    $imgTW , $imgTH , $imgSW , $imgSH );


// 3. 記憶體 -> 輸出 (1. 畫面 2. 檔案)
header("Content-type: image/jpeg");
imagejpeg($imgT);

// 4. 清除
imagedestroy($imgS);
imagedestroy($imgT);
