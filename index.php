<?php
require_once __DIR__ . '/config/common.php';
if(DEBUG === true)
{
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
}

require_once __DIR__ . '/config/autoload.php';
$m = new IndexModel();
$c = new IndexController();
$v = new IndexView();




 ?>
