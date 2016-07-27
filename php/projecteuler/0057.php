<?php

include_once "_mod.php";

#
#It is possible to show that the square root of two can be expressed as an infinite continued fraction.
#
#√ 2 = 1 + 1/(2 + 1/(2 + 1/(2 + ... ))) = 1.414213...
#
#By expanding this for the first four iterations, we get:
#
#1 + 1/2 = 3/2 = 1.5
#1 + 1/(2 + 1/2) = 7/5 = 1.4
#1 + 1/(2 + 1/(2 + 1/2)) = 17/12 = 1.41666...
#1 + 1/(2 + 1/(2 + 1/(2 + 1/2))) = 41/29 = 1.41379...
#
#The next three expansions are 99/70, 239/169, and 577/408, but the eighth expansion, 1393/985, is the first example where the number of digits in the numerator exceeds the number of digits in the denominator.
#
#In the first one-thousand expansions, how many fractions contain a numerator with more digits than denominator?

#a(n) = b(n) / c(n) としたとき
#a(n+1) = 1 + 1 / (1 + a(n))
#       = (b(n) + 2c(n))/(b(n) + c(n))
$expansion = [3, 2];
$result = 0;
for($i = 2; $i <= 1000; $i++) {
    $expansion = getNextExpansion($expansion);

    $b = gmp_strval($expansion[0]);
    $c = gmp_strval($expansion[1]);

    e($b.'/'.$c);
    if(strlen($b) > strlen($c)) {
      $result++; 
    }
}
echo($result);

function getNextExpansion($arr) {
    $b = $arr[0];
    $c = $arr[1];

    $result = [
        gmp_add($b, gmp_mul(2, $c)),
        gmp_add($b, $c)
    ];
    return $result;
}
