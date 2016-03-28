<?php

include_once "_mod.php";

#We shall say that an n-digit number is pandigital if it makes use of all the digits 1 to n exactly once; for example, the 5-digit number, 15234, is 1 through 5 pandigital.
#
#The product 7254 is unusual, as the identity, 39 × 186 = 7254, containing multiplicand, multiplier, and product is 1 through 9 pandigital.
#
#Find the sum of all products whose multiplicand/multiplier/product identity can be written as a 1 through 9 pandigital.
#
#HINT: Some products can be obtained in more than one way so be sure to only include it once in your sum.

#1d*4d=4d
#2d*3d=4d
#
#結果が5dはない
#結果が3dもない
#for文で4d

var_dump(array_sum(array_unique(getPandigitals())));

function getPandigitals() {
    $result = [];
    for ($i = 1234; $i <= 9876; $i++) {
        if(isPandigital($i)) {
            $result[] = $i;
        }
    }
    return $result;
}

function isPandigital($num) {
    $str = "123456789";
    foreach (str_split(strval($num)) as $val) {
        $str = str_replace($val, "", $str, $count);
        if($count == 0) {
            return false;
        }
    }

    for ($j = 1234; $j <= 4987; $j++) {
        $remain = $str;
        $continue  = true;
        foreach (str_split(strval($j)) as $val) {
            $remain = str_replace($val, "", $remain, $count);
            if($count == 0) {
                $continue = false;
                break;
            }
        }
        if(!$continue) {
            continue;
        }
        if($j * intval($remain) == $num) {
            return true;
        }
    }

    for($i = 123; $i <= 489; $i++) {
        $remain = $str;
        $continue  = true;
        foreach (str_split(strval($i)) as $val) {
            $remain = str_replace($val, "", $remain, $count);
            if($count == 0) {
                $continue = false;
                break;
            }
        }
        if(!$continue) {
            continue;
        }
        if($i * intval($remain) == $num) {
            return true;
        }
        if($i * intval(strrev($remain)) == $num) {
            return true;
        }
    }
    return false;
}

