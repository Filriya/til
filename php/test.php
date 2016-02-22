<?php
$array = array('10', '15', '20', '25', '30');

function total_with_for($array) {
    $result = 0;
    for ( $i = 0, $j = count($array); $i < $j; $i++) {
        $result += $array[$i];
    }
    return $result;
}

function total_with_while($array) {
    $result = 0;
    while ($array) {
        $result += array_shift($array);
    }
    return $result;
}

function total_with_recursion($array) {
    function callback($carry, $item) {
        $carry += $item;
        return $carry;
    }
    return array_reduce($array, callback);
}

var_dump(total_with_for($array));
var_dump(total_with_while($array));
var_dump(total_with_recursion($array));


function join_alternately($array1, $array2) {
    $result = array();

    while ($array1 || $array2) {
        if($array1) {
            $result[] = array_shift($array1);
        }

        if($array2) {
            $result[] = array_shift($array2);
        }
    }
    return $result;
}

$array1 = [1, 2, 3, 4, 5];
$array2 = ['a', 'b', 'c', 'd', 'e', 'f'];

var_dump(join_alternately($array1, $array2));

function get_fibonacci($length, $a = 1, $b = 0) {

    if ($length < 1) {
        return $b;
    } else {
        return get_fibonacci($length - 1, $a + $b, $a);
    }
}


$array = array(90, 9, 5, 91, 911);

function max_number($array) {
    function compare($a, $b) {
        return strcmp($b.$a, $a.$b);
    }
    uasort($array, 'compare');
    return implode("",$array);
}

var_dump(max_number($array));

function get_handreds() {
    $operators = ['', '+', '-'];

    for ($i = 0, $j = pow(3, 8); $i < $j; $i++) {
        $pattern = base_convert($i, 10, 3);
        $pattern = substr("00000000".$pattern, -8);
        $str = "";
        for ($k = 0; $k < 8; $k++) {
            $str = $str.strval($k + 1);
            $str = $str.$operators[substr($pattern, $k, 1)];
        }
        $str = $str.'9';
        eval('$result='.$str.';');
        if($result === 100) {
            echo $str."\n";
        }
    }

}

get_handreds();
