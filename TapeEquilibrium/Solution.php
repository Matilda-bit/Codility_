<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // Implement your solution here

    // if(empty($A)){
    //     return 0;
    // }

    $count = count($A);
    $minDiff = PHP_INT_MAX;

    for($p = 1; $p<$count; $p++) {
        $leftSum = array_sum(array_slice($A, 0, $p));
        $rightSum = array_sum(array_slice($A,$p));
        $diffAbs = abs($leftSum - $rightSum);

        // minimal difference
        $minDiff = min($minDiff,$diffAbs);

    }

    return $minDiff;
}

?>