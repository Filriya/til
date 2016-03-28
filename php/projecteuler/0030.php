<?php
include_once '_mod.php';

#Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:
#
#1634 = 1^4 + 6^4 + 3^4 + 4^4
#8208 = 8^4 + 2^4 + 0^4 + 8^4
#9474 = 9^4 + 4^4 + 7^4 + 4^4
#As 1 = 14 is not a sum it is not included.
#
#The sum of these numbers is 1634 + 8208 + 9474 = 19316.
#
#Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.


#最大値は 9^5 * 5 or 6 or 7程度

$result = 0;
for($i = 2; $i < 500000; $i++) {
    $digits = str_split(strval($i));
    $sum = 0;
    foreach ($digits as $digit) {
        $sum += pow($digit, 5);
    }
    if($sum == $i ) {
        e($i);
        $result += $i;
    }
}

echo $result;
