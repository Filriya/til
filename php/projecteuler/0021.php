<?php
function factorization($val, $arr = array()) {

    // 平方根を保存
    $sqrt = floor(sqrt($val));

    // 2から平方根までの素因数を求める
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($val % $i == 0) {
            $arr[] = $i;
            return Factorization($val / $i, $arr);
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

function main() {
    $result = 0;
    for ($i = 1; $i <= 10000; $i++) {
        $a = getSumOfDivisors($i);
        $b = getSumOfDivisors($a);
        if($i == $b && $i != $a) {
            echo ($a.": ".$b."\n");
            $result += $i;
        }
    }
    echo $result;
}

main();
