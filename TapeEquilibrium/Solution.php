<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // Implement your solution here
    $totalSum = array_sum($A);
    $leftSum = 0; 
    $minDiff = PHP_INT_MAX; 

    for ($i = 0; $i < count($A) - 1; $i++) {
        $leftSum += $A[$i]; 
        $rightSum = $totalSum - $leftSum; 

        $currentDiff = abs($leftSum - $rightSum);

        if ($currentDiff < $minDiff) {
            $minDiff = $currentDiff;
        }
    }

    return $minDiff; 
}

?>