<?php

include_once "_mod.php";

#
#145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.
#
#Find the sum of all numbers which are equal to the sum of the factorial of their digits.
#
#Note: as 1! = 1 and 2! = 2 are not sums they are not included.

#9! = 362880
#9!*7 = 2540160
#最大7桁

$max = 9999999;

for($i = 3; $i < $max; $i++) {
    if(getFactorialSum($i) == $i) {
        e($i);
    }
}

function getFactorialSum($num) {
    $result = 0;
    foreach (str_split(strval($num)) as $x) {
        $result += gmp_fact(intval($x));
    }
    return $result;
}
