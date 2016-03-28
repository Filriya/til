<?php
include_once "_mod.php";

function a($arr, $str = "", $sum = 0) {
    if(count($arr) == 0) {
        return $str;
    }
    $i = 0;
    while(true) {
        if( $sum + gmp_fact(count($arr) - 1) >= 1000000) {
            break;
        } 
        $sum += gmp_fact(count($arr) - 1);
        $i++;
    }

    $str = $str.strval($arr[$i]);
    unset($arr[$i]);
    $arr = array_values($arr);

    return a($arr, $str, $sum);
}

e(a(range(0, 9)));
