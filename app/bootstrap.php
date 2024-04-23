<?php
// пространство имен App
namespace App;

use App\core\Router;

// стартуем сессию
session_start();

// подгрузка файла config.php
require_once  "core" . DIRECTORY_SEPARATOR . "config.php";

// подключение autoload.php из папки vendor
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

Router::start();