<?php

include_once "_mod.php";

#
#The first two consecutive numbers to have two distinct prime factors are:
#
#14 = 2 × 7
#15 = 3 × 5
#
#The first three consecutive numbers to have three distinct prime factors are:
#
#644 = 2² × 7 × 23
#645 = 3 × 5 × 43
#646 = 2 × 17 × 19.
#
#Find the first four consecutive integers to have four distinct prime factors. What is the first of these numbers?

#a = prime1 * prime2 * prime3......
#a 4つに一つチェック->ヒットしたら前後3つずつ見る

$i = 646;
while(true) {
    if(countDistinctFactors($i) == 4) {
        $count = 1;
        $result = $i;
        for($j = 1; $j <= 3; $j ++) {
            if(countDistinctFactors( $i - $j ) == 4) {
                $count++;
                $result = $i - $j;
            } else {
                break;
            }
        }
        for($j = 1; $j <= 3; $j ++) {
            if(countDistinctFactors( $i + $j ) == 4) {
                $count++;
            } else {
                break;
            }
        }
        e($i.': '.$count);
        if ($count == 4) {
            e($result);
            break;
        }
    }

    $i += 4;
}

function countDistinctFactors($num) {
    $factors = array_unique(factorization($num));
    return count($factors);
}
