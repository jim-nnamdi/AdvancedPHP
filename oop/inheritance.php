<?php

class Inheritance
{
  private $model;

  public function __construct($model = null)
  {
    if ($model)
      $this->model = $model;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }
  public function getModel()
  {
    return $this->model;
  }
  final public function displayModel()
  {
    echo "this is a model" . $this->model;
  }
}

// inherit the parent class 

class ChildModel extends Inheritance
{
  public function wModel()
  {
    echo "hello" . $this->displayModel();
  }
}

$t = new ChildModel("sam");
$t->wModel();
