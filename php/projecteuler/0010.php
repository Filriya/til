<?php
function getPrimeSum($to) {
    $prime = 1;
    $result = 0;
    while(true) {
        $prime = gmp_nextprime($prime);
        if($prime > $to) {
            break;
        } else {
            $result += $prime;
        }
    }
    return $result;
}

var_dump(getPrimeSum(2000000));
