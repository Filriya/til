<?php

include_once "_mod.php";

#
#The decimal number, 585 = 1001001001 (binary), is palindromic in both bases.
#
#Find the sum of all numbers, less than one million, which are palindromic in base 10 and base 2.
#
#(Please note that the palindromic number, in either base, may not include leading zeros.)

$result = 0;
for ($i = 0; $i < 1000000; $i++) {
    if(isPalindromic($i) && isPalindromic(decbin($i)) && substr(decbin($i), -1, 1) != 0) {
        $result += $i;
    }
}
e($result);

function isPalindromic($str) {
    return strval($str) == strrev(strval($str));
}
