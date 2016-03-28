<?php
include_once '_mod.php';

#In England the currency is made up of pound, £, and pence, p, and there are eight coins in general circulation:
#
#1p, 2p, 5p, 10p, 20p, 50p, £1 (100p) and £2 (200p).
#It is possible to make £2 in the following way:
#
#1×£1 + 1×50p + 2×20p + 1×5p + 1×2p + 3×1p
#How many different ways can £2 be made using any number of coins?


#f(10, arr) = 10*1, f(10, arr(n-1))
#           = 10*1, 5*2, f(5, arr(n-2))
#           = 10*1, 5*2, 2*2, 2*1


function patternNum($sum, $arr) {
    if(count($arr) == 1) {
       return 1;
    } else {
        $val = array_pop($arr);
        $result = 0;
        for($i = 0; $i*$val <= $sum; $i++) {
            $result += patternNum($sum-$val*$i, $arr);
        }
        return $result;

    }
}
//$arr = [1, 2];
$arr = [1, 2, 5, 10, 20,50,100,200];
var_dump(patternNum(200, $arr));

    
//100, 99*f(2, [1]).....
//100=200/2*f(1);
//20+19*f(5, [1,2])+18*f(10, [1,2]);
//

