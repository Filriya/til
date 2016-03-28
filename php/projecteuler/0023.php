<?php
include "_mod.php";

function abunduntList($max) {
    $result = array();
    for ($i = 1; $i <= $max; $i++) {
        if( $i < getSumOfDivisors($i) ){
            $result[] = $i;
        }  
    }
    return $result;
}

function twoAbunduntList() {
   $list = abunduntList(28123);
   $result = array();

   for($i = 0, $j = count($list); $i < $j; $i++) {
       for ($k = 0; $k <= $i; $k++) {
           $val = $list[$i] + $list[$k];
           if ($val > 28123) {
               break;
           }
           if (!array_key_exists($val, $result)) {
               $result[$val] = $val;
           }
       }
   }
   return $result;
}


function main() {
    $twoAbunduntSums = twoAbunduntList();
    $result = 0;
    foreach (range(1, 28123) as $x) {
        if(!array_key_exists($x, $twoAbunduntSums)) {
            echo $x."\n";
            $result += $x;
        }
    }
    echo $result;
}

main();


//$result = range(1, 28123)
