<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use app\Core\Request;
use app\Routers\Router;

$request = new Request();
$router  = new Router();

require_once __DIR__ . '/../app/Routers/web.php';

$router->dispatch($request);