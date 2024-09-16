<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $Y, $D) {
    // Implement your solution here

    if($Y < $X || $D <= 0 || $Y <= 0 || $X < 0 ) {
        return -1;
    }

    $distance = $Y - $X;
    $res = ceil($distance / $D);

    return (int) $res;
}

?>