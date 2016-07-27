<?php

include_once "_mod.php";

#
#A googol (10^100) is a massive number: one followed by one-hundred zeros; 100^100 is almost unimaginably large: one followed by two-hundred zeros. Despite their size, the sum of the digits in each number is only 1.
#
#Considering natural numbers of the form, ab, where a, b < 100, what is the maximum digital sum?

$result = "0";

for ($i = 1; $i <= 100; $i++) {
    for ($j = 1; $j <= 100; $j++) {
        $str = gmp_strval(gmp_pow($i, $j));
        $sum = sumOfDigits($str);

        if(gmp_cmp($sum, $result) > 0) {
            $result = $sum;
        }
    }
}
e($result);

function sumOfDigits($str) {
    $arr = str_split($str, 1);
    $result = 0;
    while(count($arr) > 0) {
        $i = array_shift($arr);
        $result = $result + intval($i);
    }
    return $result;
}
