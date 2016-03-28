<?php

include_once "_mod.php";

#
#We shall say that an n-digit number is pandigital if it makes use of all the digits 1 to n exactly once. For example, 2143 is a 4-digit pandigital and is also prime.
#
#What is the largest n-digit pandigital prime that exists?

#987654321 = 3の倍数
#87654321 = 3の倍数

$current = 7654321;

while(true) {
    if (!isPandigital($current)) {
        $current--;
        continue;
    }

    str_replace("0", "", strval($current), $count);
    if($count > 0) {
        $current--;
        continue;
    }
        
    if(!gmp_prob_prime($current, 3)) {
        $current--;
        continue;
    }
    e($current);
    break;
}


