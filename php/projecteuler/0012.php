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

function countDivisor($var) {
    $arr = factorization($var);
    $arr = array_count_values($arr);

    $result = 1;
    foreach ($arr as $i) {
        $result = $result*($i+1);
    }

    return $result;
}

function getTriangleNumber($nth) {
   return (1 + $nth) * $nth / 2;
}


$i = 1;
while (true) {
   $temp = getTriangleNumber($i);
   if(countDivisor($temp) > 500) {
       echo $temp;
       break;
   }
   $i += 1;
}
