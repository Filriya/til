<?php

include_once "_mod.php";

#
#It was proposed by Christian Goldbach that every odd composite number can be written as the sum of a prime and twice a square.
#
#9 = 7 + 2×1^2
#15 = 7 + 2×2^2
#21 = 3 + 2×3^2
#25 = 7 + 2×3^2
#27 = 19 + 2×2^2
#33 = 31 + 2×1^2
#
#It turns out that the conjecture was false.
#
#What is the smallest odd composite that cannot be written as the sum of a prime and twice a square?

#A = B + 2*C^2
#Aは素数でない奇数
#Bは素数
#Cは自然数
#
#CはA/2の平方根以下
#c < ceil(sqrt(a/2));
#
#A/2 = c^2

$a = 9;
while(true) {
    if( !gmp_prob_prime($a, 3) && !isGoldbach($a) ) {
        e($a);
        break;
    }
    $a += 2;
}


function isGoldbach($num) {
    $sqrt = ceil(sqrt($num / 2));
    for($c = 1; $c < $sqrt; $c++) {
        if( gmp_prob_prime($num - 2 * $c * $c, 3)) {
            return true;
        }
    }
    return false;
}
