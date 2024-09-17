<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // Implement your solution here

    //72%
    // Calculate the total sum and limit the calculation to non-negative values
    $totalSum = array_sum(array_map('abs', $A));
    $halfSum = intval($totalSum / 2);
    
    // Initialize DP array
    $dp = array_fill(0, $halfSum + 1, false);
    $dp[0] = true;

    // Process each number in the array
    foreach ($A as $num) {
        $num = abs($num);
        
        // Traverse DP array from the back to avoid overwriting
        for ($i = $halfSum; $i >= $num; $i--) {
            if ($dp[$i - $num]) {
                $dp[$i] = true;
            }
        }
    }

    // Find the closest achievable sum to half the total sum
    for ($i = $halfSum; $i >= 0; $i--) {
        if ($dp[$i]) {
            // Early exit when the optimal difference is found
            return $totalSum - 2 * $i;
        }
    }
    
    return $totalSum; // Fallback for edge cases


    //old solution 2
    // // Implement your solution here
    // //A = [1,5,2,-2]

    // $totalSum = array_sum($A);//6
    // $halfSum = intval($totalSum/2); //3
    // $count = count($A); //4

    // $dynamicPro = array_fill(0, $halfSum+1, false); 
    // // dynamicPro = [false, false, false, false, false]
    // $dynamicPro[0] = true; // to get sum of 0


    // foreach($A as $num) {
    //     //0: num = 1 //go into loop
    //     //1: num = 5 // go into loop
    //     //2: num = 2
    //     //3: num = -2

    //     // |num| < i < 3
    //     for( $i = $halfSum; $i >= abs($num); $i--) {
    //         $dynamicPro[$i] = $dynamicPro[$i] || $dynamicPro[$i - abs($num)];
    //         //0:
    //         //i=3, i >= 1:
    //         //dp[3] = false || dp[3-1] => dp[2] = false
    //         //i=2, i >= 1:
    //         //dp[2] = false || dp[2-1] => dp[1] = false
    //         //i=1, i >= 1:
    //         //dp[1] = false || dp[1-1] => dp[0] = true;
    //         //dp = [true, true, false, false]
    //         //i=0, i >= 1 => false

    //         //1:
    //         //i=3, i >= 5 => false

    //         //2:
    //         //i=3, i >= 2
    //         //dp[3] = false || dp[3-2] => dp[1] = true
    //         //dp = [true, true, false, true]
    //         //i=2, i >= 2
    //         //dp[2] = false || dp[2-2] => dp[0] = true
    //         //dp = [true, true, true, true]

    //         //3:
    //         //i=3, i >= |-2|
    //         //dp[3] = true;
    //         //i=2, i >= |-2|
    //         //dp[2] = true;
    //         //i=1, i >= |-2| => false
    //     }
    // }

    // //0<i<3

    // for($i=$halfSum; $i>=0; $i--) {
    //     //0: dp[3] = true
    //     if ($dynamicPro[$i]) {
    //         //0: 6 - 2*3 = 0;
    //         return $totalSum -2 * $i;
    //     }
    // }


    //old bad solution
    // $count = count($A);//4
    // $res = [];

    // foreach($A as $key => $val) {
    //     if($key % 2 === 0) {
    //         $res[] = $val * (-1);
    //     } else {
    //         $res[] = $val;
    //     }
    // }

    // return abs(array_sum($res));
}

?>