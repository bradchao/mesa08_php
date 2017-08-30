<?php
    function sayYa($count, $name = 'World'){
        for ($i=0; $i<$count; $i++){
            echo "Ya, {$name}<br>";
        }
    }

    function fx($x){
        return 2 * $x + 1;
    }

    function test(){
        for ($i=0; $i<func_num_args(); $i++){
            echo func_get_arg($i) . '<br>';
        }
    }

    function testv2(){
        $args = func_get_args();
        foreach ($args as $v){
            echo "{$v}<br>";
        }
    }


