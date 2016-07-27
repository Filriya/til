<?php
//因数分解
function factorization($val, $arr = array()) {

    // 平方根を保存
    $sqrt = floor(sqrt($val));

    // 2から平方根までの素因数を求める
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($val % $i == 0) {
            $arr[] = $i;
            return factorization($val / $i, $arr);
        }
    }
    $arr[] = $val;
    return $arr;
}

function getSumOfDivisors($num) {
    $arr = factorization($num);
    $arr = array_count_values($arr); //216 = [2=>3, 3=>3]

    $result = 1;
    foreach ($arr as $key => $value) {
        $sum = 0;
        for ($i = 0; $i <= $value; $i++) {
            $sum += pow($key, $i);
        }
        $result = $result * $sum;
    }
    return $result - $num;
}

function getPrimeList($to) {
    $result = array();
    $sqrt = floor(sqrt($to));
    $src = range(2, $to);

    $callback = function ($root) {
        return function ($var) use ($root) {
            return ($var % $root !== 0);
        };  
    };

    while(count($src) > 0) {
        $root = array_shift($src);
        $result[] = $root;
        $src = array_filter($src, $callback($root));
    }
    return $result;
}

function isPandigital($num) {
    $arr = str_split(strval($num));
    sort($arr);
    return count($arr) == count(array_unique($arr)) && $arr[count($arr) - 1] == count($arr);
}

function isPalindromic($str) {
    return strval($str) == strrev(strval($str));
}

function countDigits($num) {
    return strlen(strval($num));
}

function hasSameDigits($a, $b) {
    $aList = str_split(strval($a));
    sort($aList);
    $bList = str_split(strval($b));
    sort($bList);
    return $aList == $bList;
}



function e($val) {
    if(is_bool($val)) {
        $val = $val ? 'true': 'false';
    }
    echo $val;
    echo "\n";
}

