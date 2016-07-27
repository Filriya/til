<?php

include_once "_mod.php";

#
#Starting with 1 and spiralling anticlockwise in the following way, a square spiral with side length 7 is formed.
#
#37 36 35 34 33 32 31
#38 17 16 15 14 13 30
#39 18  5  4  3 12 29
#40 19  6  1  2 11 28
#41 20  7  8  9 10 27
#42 21 22 23 24 25 26
#43 44 45 46 47 48 49
#
#It is interesting to note that the odd squares lie along the bottom right diagonal, but what is more interesting is that 8 out of the 13 numbers lying along both diagonals are prime; that is, a ratio of 8/13 ≈ 62%.
#
#If one complete new layer is wrapped around the spiral above, a square spiral with side length 9 will be formed. If this process is continued, what is the side length of the square spiral for which the ratio of primes along both diagonals first falls below 10%?

#a(n) = 右上 = d(n-1) + 2n
#b(n) = 左上 = a(n) + 2n
#c(n) = 左下 = b(n) + 2n
#d(n) = 右下 = c(n) + 2n

#width(n) = 幅 = 2n + 1
#diagonalCount(n) = 4n + 1

$primeCount = 0;
$n = 0;
$current = 1;
while(true) {
    $n++;
    for($i = 0; $i < 4; $i++) {
        $current = $current + 2 * $n;
        if(gmp_prob_prime($current)) {
            $primeCount++;
        }
    }

    if($primeCount / (4 * $n + 1) < 0.1) {
        e(2 * $n + 1);
        break;
    }
}
