<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('URL_PUBLIC_FIOLDER', 'public');
define('URL_PROTOCOL', '//'); // https:// or http://
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FIOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NALE', 'mini_mvc');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
