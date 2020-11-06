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
  public function displayModel()
  {
    echo "this is a model" . $this->model;
  }
}
