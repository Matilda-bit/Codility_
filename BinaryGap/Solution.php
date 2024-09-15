<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
    // Implement your solution here
    $binary = decbin($N); //convert to binary

    $gaps = explode('1', $binary);

    $maxGap = 0;

    if(substr($binary, -1) === '0') {
        array_pop($gaps);
    }

    foreach ($gaps as $g) {
        $maxGap = max($maxGap, strlen($g));
    }

    return $maxGap;
}

?>