<?php

class User
{
  public $first_name;
  public $last_name;

  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name  = $last_name;
  }
  public function sayHello()
  {
    echo "Hello" . $this->first_name . $this->last_name;
  }
  public function register()
  {
    echo $this->first_name . $this->last_name . "registered ";
    return $this;
  }
  public function maili()
  {
    echo "emailed";
    return $this;
  }
}

$user1 = new User("jane", "roe");
$user1->register()->maili()->sayHello();
