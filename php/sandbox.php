<?php

class Hoge extends RuntimeException
{
}


try {
  throw new Hoge('hogehoge');
} catch (RuntimeException $e) {
  var_dump($e);
}
