<?php
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

var_dump(getPrimeList(120000)[10000]);
