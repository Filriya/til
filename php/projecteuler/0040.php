<?php

include_once "_mod.php";

#An irrational decimal fraction is created by concatenating the positive integers:
#
#0.123456789101112131415161718192021...
#
#It can be seen that the 12th digit of the fractional part is 1.
#If dn represents the nth digit of the fractional part, find the value of the following expression.
#d1 × d10 × d100 × d1000 × d10000 × d100000 × d1000000

e(getDigit(1) *
  getDigit(10) *
  getDigit(100) *
  getDigit(1000) *
  getDigit(10000) *
  getDigit(100000) *
  getDigit(1000000));

function getDigit($num) {
    $count = 0;
    $n = 1;
    while($count < $num) {
        if($count + strlen(strval($n)) < $num) {
            $count+=strlen(strval($n));
        } else {
            break;
        }
        $n++;
    }

    return substr(strval($n), $num - $count-1, 1);

}
