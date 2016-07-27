<?php

include_once "_mod.php";

#
#By replacing the 1st digit of the 2-digit number *3, it turns out that six of the nine possible values: 13, 23, 43, 53, 73, and 83, are all prime.
#
#By replacing the 3rd and 4th digits of 56**3 with the same digit, this 5-digit number is the first example having seven primes among the ten generated numbers, yielding the family: 56003, 56113, 56333, 56443, 56663, 56773, and 56993. Consequently 56003, being the first member of this family, is the smallest prime with this property.
#
#Find the smallest prime which, by replacing part of the number (not necessarily adjacent digits) with the same digit, is part of an eight prime value family.
#

#8パターン -> 0 or 1 or 2が最小
#1の位は24680になりえないので変わらない

#0か1か2を2つ以上持つ場合を検討

#3つ以上の場合 -> 複数パターンを検討?

main();

function main() {
    $prime = 56003;
    while(true) {
        $prime = gmp_nextprime($prime);
        $char_counts = array_count_values(str_split(substr(strval($prime), 0, -1)));
        for($i = 0; $i <= 2; $i++) {
            if(array_key_exists($i, $char_counts) && $char_counts[$i] >= 2) {
                $count = 1;
                e($prime);
                for($j = $i + 1; $j <= 9; $j++) {
                    if(isReplacedPrime($prime, $i, $j)) {
                        $count++;
                    }
                }
                if($count == 8) {
                    e($prime);
                    return;
                }
            }
        }
    }
}

function isReplacedPrime($num, $replace, $replacee) {
    $replaced = str_replace($replace, $replacee, substr(strval($num), 0, -1));
    $lastDigit = substr(strval($num), -1);
    e($replaced.$lastDigit);

    return gmp_prob_prime(intval($replaced.$lastDigit)) > 0;
}
