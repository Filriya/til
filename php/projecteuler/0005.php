<?php
function commonMultiple($a, $b) {
    $i = 1;
    while(true) {
        if($a * $i % $b === 0) {
            return $a * $i;
        }
        $i++;
    }
}

function commonMultipleWithRange($from, $to, $ret = 1) {
    if ($from < $to) {
        $ret = commonMultiple($from, $ret);
        return commonMultipleWithRange($from + 1, $to, $ret);
    } else {
        return commonMultiple($ret, $to);
    }
}

var_dump(commonMultipleWithRange(1, 20));
