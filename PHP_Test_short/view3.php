<?php
class View
{
private $model;
private $controller;

public function __construct($controller,$model) {
$this->controller = $controller;
$this->model = $model;
}

public function output(){
return "<h2>" . $this->model->string . "</h2>";
}
}
