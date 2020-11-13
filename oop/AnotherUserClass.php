<?php

class Useri
{
  private $username;

  public function setUserName($username)
  {
    $this->username = $username;
  }
  public function getUserName()
  {
    return $this->username;
  }
}

class Admin extends Useri
{
  public function expressYourRole()
  {
    echo "Admin";
  }
  public function sayHello()
  {
    echo " Hello " . $this->getUserName();
  }
}

$obj = new Admin("balt");
$obj->sayHello();
