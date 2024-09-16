<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // Implement your solution here

    if(empty($A)) {
        return -1;
    }

    //sum of  = 1 + 2 + 3 + ... + N + N+1
    //S = n(a +l) /2
    //S -> sum, n - number of integer, a - first num, l - last num
    //s = ((n+1)(1 + (n + 1))) / 2
    //s = ((n+1)(n+2)) / 2

    $n = count($A);

    $expectedSum = (($n+1)*($n+2)) / 2;

    $resSum = array_sum($A);

    return $expectedSum - $resSum;
}

?>