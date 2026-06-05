<?php
namespace app\Services;

use app\Models\UserModel;

class AuthService
{
    public static function login(string $nombre, string $contra): array
    {
        $usuario = UserModel::buscarPorNombre($nombre);

        if (!$usuario) {
            return ['success' => false, 'error' => 'Usuario no encontrado'];
        }

        if (!password_verify($contra, $usuario['Contraseña'])) {
            return ['success' => false, 'error' => 'Contraseña incorrecta'];
        }

        $opciones = ['cost' => 12];

        if (password_needs_rehash($usuario['Contraseña'], PASSWORD_BCRYPT, $opciones)) {
            $nuevoHash = password_hash($contra, PASSWORD_BCRYPT, $opciones);
            UserModel::actualizarPassword($usuario['IDUsuario'], $nuevoHash);
        }

        return ['success' => true, 'usuario' => $usuario];
    }
}
