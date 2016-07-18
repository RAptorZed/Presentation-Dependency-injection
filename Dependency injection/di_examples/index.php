<?php
//Constructor injection
class User
{
  function  __construct($storage) {
    $this->storage = $storage;
  }
}

//Setter injection
class User2
{
  function  setSessionStorage($storage){
    $this->storage = $storage;
  }
}

//Property Injection
class User3
{
  public $sessionStorage;
}
$user->sessionStorage = $storage;