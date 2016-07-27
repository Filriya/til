<?php

function clojure() {
    $i;
    $closure = function() use (&$i){
        if(!$i) {
            $i = 1;
        } else {
            $i++;
        }
        return $i;
    };
    return $closure();
}

echo(clojure());
echo(clojure());
echo(clojure());
echo(clojure());

