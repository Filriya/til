<?php

$fact = gmp_fact(100);
$arr = str_split($fact, 1);
echo array_sum($arr);
