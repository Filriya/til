<?php

class Encrypter
{
  protected $iv = 'j7zKMiETUnrKenm3';
  protected $key = '9a4NNVBB2T6mmR2ytVt7Mmb9WKPojiwcKgoDikx66ro6JyUzBnkADNDMNgshRic6';

  public function decrypt($base64Encrypted): string
  {
    $encrypted = base64_decode($base64Encrypted);
    return openssl_decrypt($encrypted, 'AES-256-CBC', $this->key, 0, $this->iv);
  }

  public function encrypt($password): string
  {
    $encrypted = openssl_encrypt($password, 'AES-256-CBC', $this->key, 0, $this->iv);
    return base64_encode($encrypted);
  }
}

$enc = new Encrypter();

$passwords = [
  'fbc44hy4',
  'kdkmhzcd',
  'kz8esbc6',
  'rxawake2'
];

foreach( $passwords as $password ) {
  $enced = $enc->encrypt($password);
  var_dump($enced);
  var_dump($enc->decrypt($enced));
}
