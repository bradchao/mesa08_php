<?php
    // 1.
    $upload = $_FILES['upload'];

    if ($upload['error'] == 0){
        if (copy("{$upload['tmp_name']}",
            "./upload/{$upload['name']}")){
            // copy success
            echo 'Upload OK';
        }else{
            // copy fail
            echo 'Copy error';
        }

    }else{
        // error
        echo 'Upload Fail';
    }

