<?php
function fibo($max, $sum, $a = 1, $b = 2) {
    $c = $a + $b;
    if ($c >  $max) {
        return $sum;
    } else if($c % 2 == 0) {
        $sum += $c;
    }
    return fibo($sum, $b, $c);
}

echo fibo(4000);

