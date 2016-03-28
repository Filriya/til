<?php

include_once "_mod.php";

#The fraction 49/98 is a curious fraction, as an inexperienced mathematician in attempting to simplify it may incorrectly believe that 49/98 = 4/8, which is correct, is obtained by cancelling the 9s.
#
#We shall consider fractions like, 30/50 = 3/5, to be trivial examples.
#
#There are exactly four non-trivial examples of this type of fraction, less than one in value, and containing two digits in the numerator and denominator.
#
#If the product of these four fractions is given in its lowest common terms, find the value of the denominator.

#64: 16 = 4/1
#65: 26 = 5/2
#95: 19 = 5/1
#98: 49 = 2/1

//i 分母 j 分子
for ($i = 11; $i <= 99; $i++) {
    for($j = 10;$j < $i; $j++ ) {
        if(isCurious($i, $j)) {
            e($i.": ".$j);
        }
    }
}

function isCurious($i, $j) {
    $sameList = getSameKey($i, $j);
    if(count($sameList) != 1) {
        return false;
    } else {
        $iSprit = intval(str_replace($sameList[0], "", strval($i)));
        $jSprit = intval(str_replace($sameList[0], "", strval($j)));
        if ($sameList[0] != 0 && $iSprit != 0 && $j / $i == $jSprit / $iSprit) {
            return true;
        }
        return false;
    }
}

function getSameKey($i, $j) {
    $result = [];
    foreach (str_split($i) as $k) {
        str_replace($k, "", $j, $count);
        if($count != 0) {
            $result[] = $k;
        }
    }
    return $result;
}
