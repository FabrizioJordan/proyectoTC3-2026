<?php
namespace app\Services;

class SessionService {

    public static function iniciar(array $usuario, string $nombre): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['IDUsuario'] = $usuario['IDUsuario'];
        $_SESSION['Nombre']    = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
    }

    public static function cerrar(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_unset();
        session_destroy();
    }
}