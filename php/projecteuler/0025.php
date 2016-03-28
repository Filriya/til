<?php
include_once '_mod.php';

function fibo($max,$a=1, $b=1, $i=3) {
    while (true) {
        $c = gmp_add($a, $b);
        $a = $b;
        $b = $c;

        e( $i.": ".strlen($b));
        if(strlen($b) >= 1000) {
            break;
        }
        $i++;
    }
    e($i.": ".strlen($c));
}

fibo(100000);

