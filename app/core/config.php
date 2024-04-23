<?php
// пространство имен App\core
namespace App\core;

// указываем корневую директорию проекта
define("ROOT", dirname(__DIR__, 2) . DIRECTORY_SEPARATOR);

// определить директории приложения
define("APP", ROOT . "app" . DIRECTORY_SEPARATOR);
define("CORE", APP . "core" . DIRECTORY_SEPARATOR);
define("DATA", APP . "data" . DIRECTORY_SEPARATOR);
define("MODEL", APP . "models" . DIRECTORY_SEPARATOR);
define("VIEW", APP . "views" . DIRECTORY_SEPARATOR);
define("CONTROLLER", APP . "controllers" . DIRECTORY_SEPARATOR);
