<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Pecee\SimpleRouter\SimpleRouter;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Register Helpers
|--------------------------------------------------------------------------
*/
require __DIR__ . '/../src/Helper/helpers.php';

/*
|--------------------------------------------------------------------------
| Register Routes
|--------------------------------------------------------------------------
*/
require __DIR__ . "/../src/Routes/api.php";


SimpleRouter::start();