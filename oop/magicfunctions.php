<?php

class Test
{
  public $model;

  public function __construct($model = null)
  {
    if ($model) {
      $this->model = $model;
    }
  }
  public function getModel()
  {
    echo "The model is :" . $this->model;
  }
}
$m = new Test();
$m->getModel();
