<?php

class ProtectedClass
{
}

class PublicClass
{
}

class Test 
{
  protected $protected;
  public $public;

  public function __construct() {
      $this->protected = new ProtectedClass();
      $this->public = new PublicClass();
  }

  public function getProtected() {
      return $this->protected;
  }

}

$test = new Test();
$protected = $test->getProtected();
$protected = 'hoge';
var_dump($test->getProtected());
var_dump($test->public);
    
