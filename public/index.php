<?php

require "../bootstrap.php";

use App\Classes\Layout;
use App\Classes\Uri;
use App\Classes\Route;

$layout = new Layout;

require Route::getRoute(Uri::getUri(), $routes);

require $layout->master('layout');
