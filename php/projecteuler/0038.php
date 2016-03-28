<?php

include_once "_mod.php";

#
#Take the number 192 and multiply it by each of 1, 2, and 3:
#
#192 × 1 = 192
#192 × 2 = 384
#192 × 3 = 576
#By concatenating each product we get the 1 to 9 pandigital, 192384576. We will call 192384576 the concatenated product of 192 and (1,2,3)
#
#The same can be achieved by starting with 9 and multiplying by 1, 2, 3, 4, and 5, giving the pandigital, 918273645, which is the concatenated product of 9 and (1,2,3,4,5).
#
#What is the largest 1 to 9 pandigital 9-digit number that can be formed as the concatenated product of an integer with (1,2, ... , n) where n > 1?


#x and (1*n) が9digit
#xの最大が9999(4digit)
#nの最大が9


$max = 0;
for ($i = 1; $i <= 9999; $i++) {
    $val = getConcatenated($i, 9);
    str_replace("0", "", $val, $count);

    if(strlen($val) == 9 && $count == 0 && isPandigital($val) && $val > $max) {
        $max = $val;
    }
}
e($max);

function getConcatenated($base, $digit) {
    $n = 1;
    $result = "";
    while(strlen($result) < $digit) {
        $result = $result.$n*$base;
        $n++;
    }
    return $result;
}

function isPandigital($num) {
    return strlen(strval($num)) == count(array_unique(str_split(strval($num))));
}


