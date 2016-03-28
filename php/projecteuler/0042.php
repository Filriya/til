<?php

include_once "_mod.php";
include_once "0042_words.php";

#
#The nth term of the sequence of triangle numbers is given by, tn = ½n(n+1); so the first ten triangle numbers are:
#
#1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
#
#By converting each letter in a word to a number corresponding to its alphabetical position and adding these values we form a word value. For example, the word value for SKY is 19 + 11 + 25 = 55 = t10. If the word value is a triangle number then we shall call the word a triangle word.
#
#Using words.txt (right click and 'Save Link/Target As...'), a 16K text file containing nearly two-thousand common English words, how many are triangle words?

#tn = 1/2n(n+1);
#
# c > 0;

$result = 0;
foreach ($src as $x) {
    if (isTriangleNumber(getAlphabeticalNum($x))) {
        $result++;
    }
}
e($result);

function getAlphabeticalNum($str) {
    $list = array_flip(range("A", "Z"));

    $result = 0;
    foreach (str_split($str) as $char) {
        $result += $list[$char] + 1;
    }
    return $result;
}

function isTriangleNumber($num) {
    $sqrt = gmp_sqrtrem(1+8*$num);
    return $sqrt[1] == "0" && intval($sqrt[0]) % 2 == 1;
}
