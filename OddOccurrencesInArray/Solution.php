<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // Implement your solution here

    $unpaired = 0;
    $arr = [];
    if(empty($A)){
        goto done;
    }

    foreach($A as $item) {
        if(isset($arr[$item])) {
            $arr[$item]++;
        } else {
            $arr[$item] = 1;
        }
    }

    foreach($arr as $key => $count) {
        if($count % 2 !== 0) {
            return $key;
        }
    }
    done:
    return -1;//for invalid input
} 

?>