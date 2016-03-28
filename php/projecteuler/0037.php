<?php

include_once "_mod.php";

#
#The number 3797 has an interesting property. Being prime itself, it is possible to continuously remove digits from left to right, and remain prime at each stage: 3797, 797, 97, and 7. Similarly we can work from right to left: 3797, 379, 37, and 3.
#
#Find the sum of the only eleven primes that are both truncatable from left to right and right to left.
#
#NOTE: 2, 3, 5, and 7 are not considered to be truncatable primes.

main();

function main() {

    $result = [];

    $i = 10;
    while (count($result) < 11) {
        if(isTruncatablePrime($i)) {
            e($i);
            $result[] = $i;
        }
        $i++;
    }
    e(array_sum($result));
}
function isTruncatablePrime($i) {
    $str = strval($i);
    str_replace("0", "", $str, $count);
    if($count != 0) {
        return false;
    }

    $str1 = $str;
    while(strlen($str1) > 0) {
        if( !gmp_prob_prime(intval($str1), 3) ) {
            return false;
        }
        $str1 = substr($str1, 0, strlen($str1)-1);
    }

    $str2 = $str;
    while(strlen($str2) > 0) {
        if( !gmp_prob_prime(intval($str2), 3) ) {
            return false;
        }
        $str2 = substr($str2, 1, strlen($str)-1);
    }
    return true;
}
