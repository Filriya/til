<?php

$arr = [
    1 =>  3, //one
    2 =>  3, //two
    3 =>  5, //three
    4 =>  4, //four
    5 =>  4, //five
    6 =>  3, //six
    7 =>  5, //seven
    8 =>  5, //eight
    9 =>  4, //nine
    10 =>  3, //ten
    11 =>  6, //eleven
    12 =>  6, //twelve
    13 =>  8, //thirteen
    14 =>  8, //fourteen
    15 =>  7, //fifteen
    16 =>  7, //sixteen
    17 =>  9, //seventeen
    18 =>  8, //eighteen
    19 =>  8, //nineteen
    20 =>  6, //twenty
    30 =>  6, //thirty
    40 =>  5, //forty
    50 =>  5, //fifty
    60 =>  5, //sixty
    70 =>  7, //seventy
    80 =>  6, //eighty
    90 =>  6, //ninety
    100 =>  7, //hundred
    1000 =>  8, //thousand
];

function getAlphabeticalNum($val) {
    global $arr;
    $digit1 = $val % 10;
    $digit2 = floor($val / 10) % 10;
    $digit3 = floor($val / 100) % 10;
    $digit4 = floor($val / 1000) % 10;

    $result = 0;

    if($digit4 > 0) {
        $result += $arr[$digit4];
        $result += $arr[1000];
    }

    if($digit3 > 0) {
        $result += $arr[$digit3];
        $result += $arr[100];
        if ( $digit2 != 0 || $digit1 != 0) {
            $result += 3; // and
        }
    }

    if(array_key_exists($digit2.$digit1, $arr)) {
        $result += $arr[$digit2.$digit1];
    } else {
        if($digit2 > 0) {
            $result += $arr[$digit2.'0'];
        }
        if($digit1 > 0) {
            $result += $arr[$digit1];
        }
    }

    return $result;
}

$ret = 0;
for ( $i = 1; $i <= 1000; $i++ ) {
    echo $i.": ".getAlphabeticalNum($i)."\n";
    $ret += getAlphabeticalNum($i);
}

echo $ret;
