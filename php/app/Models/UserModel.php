<?php
namespace app\Models;

use PDO;
use app\Core\Database;

class UserModel
{
    public static function buscarPorNombre(string $nombre): array|false
    {
        $sql  = "SELECT IDUsuario, [Contraseña] FROM Usuarios WHERE Nickname = ?";
        $stmt = Database::getInstancia()->getConexion()->prepare($sql);
        $stmt->execute([$nombre]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

public static function crear(
    string $nomape,
    string $nickname,
    string $hash,
    string $email,
    int $terminos,
    string $tipo
): array {
    try {
        $sql  = "EXEC CrearUsuario @NomApe=?, @Nickname=?, @Contraseña=?, @Correo=?, @AceptacionTerminos=?, @Tipo=?";
        $stmt = Database::getInstancia()->getConexion()->prepare($sql);
        $stmt->execute([$nomape, $nickname, $hash, $email, $terminos, $tipo]);
        return ['success' => true];
    } catch (\PDOException $e) {
        if (str_contains($e->getMessage(), 'UNIQUE')) {
            return ['success' => false, 'error' => 'El correo ya está registrado'];
        }
        return ['success' => false, 'error' => 'Error al crear el usuario'];
    }
}

public static function actualizarPassword(int $id, string $hash): void
{
    $sql  = "UPDATE Usuarios SET [Contraseña] = ? WHERE IDUsuario = ?";
    $stmt = Database::getInstancia()->getConexion()->prepare($sql);
    $stmt->execute([$hash, $id]);
}

}