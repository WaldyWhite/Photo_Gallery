<?php

// App namespace
namespace App;

use App\core\Router;

// let's start the session
session_start();

// loading the config.php file
require_once "core" . DIRECTORY_SEPARATOR . "config.php";

// connecting autoload.php from the vendor folder
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

Router::start();