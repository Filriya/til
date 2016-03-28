<?php

include_once "_mod.php";

#
#The number, 197, is called a circular prime because all rotations of the digits: 197, 971, and 719, are themselves prime.
#
#There are thirteen such primes below 100: 2, 3, 5, 7, 11, 13, 17, 31, 37, 71, 73, 79, and 97.
#
#How many circular primes are there below one million?

$result = 0;
for ($i = 1; $i < 1000000; $i++ ) {
    if(isCircularPrime($i)) {
        $result++;
    }
}
e($result);

function isCircularPrime($num) {
    $num = strval($num);
    for ($i = 0; $i < strlen($num); $i++) {
        if (!gmp_prob_prime(intval($num), 3)) {
            return false;
        }
        $num = substr($num, 1).substr($num, 0, 1);
    }
    return true;
}
