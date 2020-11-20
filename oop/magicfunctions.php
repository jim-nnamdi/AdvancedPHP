<?php

class Magic
{
  public $name;
  public $color;

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  function getName()
  {
    return $this->name;
  }

  function getColor()
  {
    return $this->color;
  }
}

# initialize an obj . 
$test = new Magic("jim", "red");
echo $test->getName() . "<br>";
echo $test->getColor();
