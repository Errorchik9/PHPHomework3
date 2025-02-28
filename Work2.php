<?php

function trimaxnum($arr) {
    $un = array_unique($arr);
    rsort($un);
    
    if (count($un) >= 3) {
        return $un[2];
    } else {
        return $un[0];
    }
}
 
$numbers = [3, 2, 2, 1];
echo "Третье максимальное число: " . trimaxnum($numbers);

?>