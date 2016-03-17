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

var_dump((factorization(600851475143)));
