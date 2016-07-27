<?php

include_once "_mod.php";

#
#The prime 41, can be written as the sum of six consecutive primes:
#
#41 = 2 + 3 + 5 + 7 + 11 + 13
#This is the longest sum of consecutive primes that adds to a prime below one-hundred.
#
#The longest sum of consecutive primes below one-thousand that adds to a prime, contains 21 terms, and is equal to 953.
#
#Which prime, below one-million, can be written as the sum of the most consecutive primes?

#1000以下で21term
#1000000以下で100termは超えるんじゃなかろうか
#1000000/100 = 10000
#48000以下の素数列を考える

#$iから始めて$j番目まで

$primes = getPrimeList(10000);

$length = 0;
$result = 0;
for($i = 0, $count = count($primes); $i < $count; $i++) {
    $sum = 0;
    for ($j = $i; $j < $count; $j++) {
        $sum += $primes[$j];
        if($sum > 1000000) {
            break;
        }
        if (gmp_prob_prime($sum) && $length < $j - $i + 1) {
            $result = $sum;
            $length = $j - $i + 1;
        }
    }
}
e($length);
e($result);
