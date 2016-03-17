<?php

function nextChain($var) {
    if ( $var % 2 == 0) {
        return $var / 2;
    } else {
        return 3 * $var + 1;
    }
}

function chainLength($var) {
    $count = 1;
    while($var != 1) {
        $var = nextChain($var);
        $count++;
    }
    return $count;
}

$result = 0;
$longest = 0;
for($i = 1; $i < 1000000; $i++) {
    $length = chainLength($i);
    if ($longest < $length) {
        $longest = $length;
        $result = $i;
        echo $result."\n";
    }
}

echo $result;
