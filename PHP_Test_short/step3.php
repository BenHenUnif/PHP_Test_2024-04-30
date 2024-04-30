<?php

define('ROOT', __DIR__);
require_once(ROOT . '/model3.php');
require_once(ROOT . '/view3.php');
require_once(ROOT . '/controller3.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();
