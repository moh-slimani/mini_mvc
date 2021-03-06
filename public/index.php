<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

require APP . 'config/config.php';

require APP . 'core/application.php';
require APP . 'core/controller.php';
require APP . 'core/model.php';

session_start();
$app = new Application();
