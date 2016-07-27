<?php

include_once "_mod.php";

#
#The arithmetic sequence, 1487, 4817, 8147, in which each of the terms increases by 3330, is unusual in two ways: (i) each of the three terms are prime, and, (ii) each of the 4-digit numbers are permutations of one another.
#
#There are no arithmetic sequences made up of three 1-, 2-, or 3-digit primes, exhibiting this property, but there is one other 4-digit increasing sequence.
#
#What 12-digit number do you form by concatenating the three terms in this sequence?


# 1001 <= $a <= 3339

isCompatible(123, 321);

for ($a = 1001; $a <= 3339; $a += 2) {
    if(!gmp_prob_prime($a)) {
        continue;
    }
    $b = $a + 3330;
    if(!isCompatible($a, $b) || !gmp_prob_prime($b)) {
        continue;
    }
    $c = $b + 3330;
    if(!isCompatible($b, $c) || !gmp_prob_prime($c)) {
        continue;
    }
    e($a.$b.$c);
}

function isCompatible($a, $b) {
    $aList = str_split(strval($a));
    sort($aList);
    $bList = str_split(strval($b));
    sort($bList);

    return $aList == $bList;
}
