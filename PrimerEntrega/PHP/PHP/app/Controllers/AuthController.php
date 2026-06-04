<?php
namespace app\Controllers;

use app\Core\Request;
use app\Core\Response;
use app\Services\ValidationService;
use app\Services\AuthService;
use app\Services\SessionService;
use app\Models\UserModel;

class AuthController
{
    public function login(Request $request): void
    {
        $datos = $request->post(['nombre', 'contra', 'email']);

        $datos = array_map('trim', $datos);

        $validacion = ValidationService::login($datos);
        if (!$validacion['success']) {
            echo $validacion['error'];
            return;
        }

        $resultado = AuthService::login($datos['nombre'], $datos['contra']);
        if (!$resultado['success']) {
            echo $resultado['error'];
            return;
        }

        SessionService::iniciar($resultado['usuario'], $datos['nombre']);
        Response::redirect('/dashboard');
    }


public function mostrarRegister(): void
{
    require_once __DIR__ . '/../Views/auth/register.php';
}

public function register(Request $request): void
{
    $datos = $request->post(['nomape', 'nickname', 'email', 'contra', 'terminos']);
    $datos = array_map('trim', $datos);

    $validacion = ValidationService::register($datos);
    if (!$validacion['success']) {
        echo $validacion['error'];
        return;
    }

    $hash = password_hash($datos['contra'], PASSWORD_BCRYPT, ['cost' => 12]);

    $resultado = UserModel::crear(
        $datos['nomape'],
        $datos['nickname'],
        $hash,
        $datos['email'],
        1,
        'Jugador'
    );

    if (!$resultado['success']) {
        echo $resultado['error'];
        return;
    }

    Response::redirect('/login');
}


public function mostrarLogin(): void
{
    require_once __DIR__ . '/../Views/auth/login.php';
}





public function dashboard(): void
{
    require_once __DIR__ . '/../Views/auth/dashboard.php';
}

    public function logout(): void
    {
        SessionService::cerrar();
        Response::redirect('/login');
    }


}