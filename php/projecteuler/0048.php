<?php

include_once "_mod.php";

#
#The series, 1^1 + 2^2 + 3^3 + ... + 10^10 = 10405071317.
#
#Find the last ten digits of the series, 11 + 22 + 33 + ... + 10001000.

$result = 0;
for($i = 1; $i <= 1000; $i++) {
    $result += getLastTenDigits($i);
}
e($result);


function getLastTenDigits($num) {
    $result = $num;
    for($i = 0; $i < $num - 1; $i++) {
        $result = $result * $num;
        $result = intval(substr(strval($result), -10));
    }
    return $result;
}
