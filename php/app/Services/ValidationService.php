<?php
namespace app\Services;

class ValidationService
{
    public static function login(array $datos): array
    {
        ['nombre' => $nombre, 'contra' => $contra, 'email' => $email] = $datos;

        if (empty($nombre) || empty($contra) || empty($email)) {
            return ['success' => false, 'error' => 'Datos requeridos incompletos'];
        }

        if (strlen($contra) < 8) {
            return ['success' => false, 'error' => 'Contraseña inválida, mínimo 8 caracteres'];
        }

        if (strlen($contra) > 255) {
            return ['success' => false, 'error' => 'Contraseña demasiado larga'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'error' => 'Email inválido'];
        }

        return ['success' => true];
    }

public static function register(array $datos): array
{
    ['nomape' => $nomape, 'nickname' => $nickname, 'email' => $email, 'contra' => $contra] = $datos;

    if (empty($nomape) || empty($nickname) || empty($email) || empty($contra)) {
        return ['success' => false, 'error' => 'Todos los campos son requeridos'];
    }

    if (strlen($nickname) < 3) {
        return ['success' => false, 'error' => 'El usuario debe tener al menos 3 caracteres'];
    }

    if (strlen($contra) < 8) {
        return ['success' => false, 'error' => 'La contraseña debe tener al menos 8 caracteres'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'error' => 'Email inválido'];
    }

    if (empty($datos['terminos'])) {
        return ['success' => false, 'error' => 'Debes aceptar los términos y condiciones'];
    }

    return ['success' => true];
}




}