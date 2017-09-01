<?php
    class Cart {
        private $member;
        private $buylist;
        function __construct($member){
            $this->member = $member;
            $this->buylist = array();
        }
        function addItem($pid, $qty){
            /*
            if (!array_key_exists($pid, $this->buylist)){

            }
            */
            if (!isset($this->buylist[$pid])){
              $this->buylist[$pid] = $qty;
            }

        }
        function edItem($pid, $qty){
            if (isset($this->buylist[$pid])){
                $this->buylist[$pid] = $qty;
            }
        }
        function rmItem($pid){
            if (isset($this->buylist[$pid])){
                unset($this->buylist[$pid]);
            }
        }
        function getBuylist(){
            return $this->buylist;
        }
        function getMember(){
            return $this->member;
        }

    }

    class Member {
        private $id, $name, $level;
        function __construct($id,$name,$level){
            $this->id = $id;
            $this->name = $name;
            $this->level = $level;
        }
        function getId(){return $this->id;}
        function getName(){return $this->name;}
        function getLevel(){return $this->level;}
    }