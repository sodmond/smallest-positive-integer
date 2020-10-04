<?php
function solution($A) {
    // write your code in PHP7.0
    $new = array();
    foreach ($A as $val){
        $low = ($val - 1);
        $high = ($val + 1);
        if ($low > 0 && !in_array($low, $A)){
            $new[] = $low;
        }
        if ($high > 0 && !in_array($high, $A)){
        	$new[] = $high;
        }
    }
    $result = (count($new) < 1) ? 1 : min($new);
    return $result;
}

/*
Other sample test inputs

[10, -49, 6, 213, 190, 72]
[2, 3, 7, 6, 8, -1, -10, 15]
[ 2, 3, -7, 6, 8, 1, -10, 15 ]
[1, 1, 0, -1, -2]
*/
?>
