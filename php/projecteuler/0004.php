<?php

function isPalindromic($val) {
    $str1 = strval($val);
    $str2 = strrev(strval($val));

    return $str1 === $str2;
}

function palindromic() {
    $result = 0;

    for($i = 100; $i < 1000; $i++ ) {
        for($j = 100; $j < 1000; $j++ ) {
            if(isPalindromic($i * $j) && $result < $i * $j) {
                $result = $i * $j;
            }
        }
    }
    return $result;
}

var_dump(palindromic(12321));
