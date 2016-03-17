<?php
function fibo($sum, $a, $b) {
    $c = $a + $b;
    if ($c > 4000000) {
        return $sum;
    } else if($c % 2 == 0) {
        $sum += $c;
    }
    return fibo($sum, $b, $c);
}

echo fibo(2, 1, 2);
