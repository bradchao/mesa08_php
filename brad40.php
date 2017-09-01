<?php

class Bike {
    var $color;
    private $speed;

    // 建構式/方法/子 => 物件初始化
    function __construct($s = 0){

        $this->speed = $s;
    }

    function upSpeed(){
        $this->speed = ($this->speed<1)?1:$this->speed*1.2;
    }

    function downSpeed(){
        $this->speed = ($this->speed<1)?0:$this->speed*0.7;
    }

    function getSpeed(){
        return $this->speed;
    }
}

$myBike  = new Bike;
echo "myBike : {$myBike->getSpeed()}<br>";

$urBike  = new Bike('Brad');
echo "urBike : {$urBike->getSpeed()}<br>";

$urBike->upSpeed(); // 1
$urBike->upSpeed(); // 1.2
$urBike->upSpeed(); // 1.2 * 1.2
echo "urBike : {$urBike->getSpeed()}";


//$urBike = new Bike;

/*
$myBike->upSpeed();
$myBike->upSpeed();
$myBike->upSpeed();
$myBike->upSpeed();

echo "myBike : {$myBike->getSpeed()}<br>";
echo "urBike : {$urBike->getSpeed()}<br>";
*/