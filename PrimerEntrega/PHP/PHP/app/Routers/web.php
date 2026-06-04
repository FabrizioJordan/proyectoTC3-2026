<?php
use app\Controllers\AuthController;

$router->get('/register',  [AuthController::class, 'mostrarRegister']);
$router->post('/register', [AuthController::class, 'register']);

$router->get('/login',  [AuthController::class, 'mostrarLogin']);
$router->post('/login',  [AuthController::class, 'login']);
$router->get('/logout',  [AuthController::class, 'logout']);

$router->get('/dashboard', [AuthController::class, 'dashboard']);

