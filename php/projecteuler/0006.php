<?php
function main($val) {

    $ret1 = array_reduce(range(1, $val), function($carry, $i) {
        return $carry + pow($i, 2);
    });

    $ret2 = array_reduce(range(1, $val), function($carry, $i) {
        return $carry + $i;
    });
    var_dump($ret1);
    var_dump($ret2);

    return pow($ret2, 2) - $ret1;
}

var_dump(main(100));
