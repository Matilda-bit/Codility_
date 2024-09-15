<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $K) {
    // Implement your solution here

    if(empty($A)) {
        return $A;
    }
    
    $count = count($A);

    if($count === $K || $K % $count === 0 
    || $K === 0 || $count === 0) {
        return $A;
    }

    $newK = $K % $count;// 5 % 3 = 2 - 2 times rotate

    //[1,2,3] => array_slice(arr, 1) [2,3]

    $limit = $count - $newK; 

    $chunk1 = array_slice($A, $limit);//[2,3]
    $chunk2 = array_slice($A, 0, $limit);//[1]

    $rotatedArr = array_merge($chunk1, $chunk2);

    return $rotatedArr;
}

?>