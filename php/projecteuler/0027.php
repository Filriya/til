<?php
include_once "_mod.php";
//Euler discovered the remarkable quadratic formula:
//
//n² + n + 41
//
//It turns out that the formula will produce 40 primes for the consecutive values n = 0 to 39. However, when n = 40, 402 + 40 + 41 = 40(40 + 1) + 41 is divisible by 41, and certainly when n = 41, 41² + 41 + 41 is clearly divisible by 41.
//
//The incredible formula  n² − 79n + 1601 was discovered, which produces 80 primes for the consecutive values n = 0 to 79. The product of the coefficients, −79 and 1601, is −126479.
//
//Considering quadratics of the form:
//
//n² + an + b, where |a| < 1000 and |b| < 1000
//
//where |n| is the modulus/absolute value of n
//e.g. |11| = 11 and |−4| = 4
//Find the product of the coefficients, a and b, for the quadratic expression that produces the maximum number of primes for consecutive values of n, starting with n = 0.


//|a| < 1000, |b| < 1000
//n=0の時を考え bが素数
//n=1の時を考えると a+b+1=pが素数

// -1000 < a < 1000
// -1999 < p < 2001
$primes = getPrimeList(2000);
$primes_flipped = array_flip($primes);

$maxn = 0;
$resulta = 0;
$resultb = 0;
foreach ($primes as $b) {
    if ( $b > 1000) {
        break;
    }
    foreach ($primes as $x) {
        $a = $x - $b - 1;
        if ( $a > 1000 || $a < -1000) {
            break;
        }
        $n = 0;
        while(true) {
            $val = $n * $n + $a * $n + $b;

            if(!array_key_exists($val, $primes_flipped)) {
                break;
            }
            if($maxn < $n) {
               $maxn = $n;
               $resulta = $a;
               $resultb = $b;
            }
            $n++;
        }
    }
}
e($resulta*$resultb);
