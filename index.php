<?php
require_once 'config.php';

spl_autoload_register(function($class) {
  if (strpos($class, 'Controller') > -1) {
    if (file_exists('controller/' . $class . '.php')) 
      require_once 'controller/' . $class . '.php';
  } else if (file_exists('model/' . $class . '.php')) {
    require_once 'model/' . $class . '.php';
  } else if (file_exists('core/' . $class . '.php')) {
    require_once 'core/' . $class . '.php';
  }
});

$core = new Core;
$core->run();