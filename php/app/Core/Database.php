<?php

namespace app\Core;

use PDO;
use PDOException;

class Database
{
    private static ?Database $instancia = null;
    private ?PDO $conexion = null;

    private function __construct()
    {
        $host    = $_ENV['DB_HOST'];
        $db      = $_ENV['DB_NAME'];
        $user    = $_ENV['DB_USER'];
        $pass    = $_ENV['DB_PASS'];
        //  $charset = 'utf8mb4';

        //$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        //sql no usa charset al igual mysql
        $dsn = "sqlsrv:Server={$host};Database={$db};TrustServerCertificate=1";
    
        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->conexion = new PDO($dsn, $user, $pass, $opciones);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
            // error_log($e->getMessage());
        }
    }

    public static function getInstancia(): static
    {
        if (self::$instancia === null) {
            self::$instancia = new static();
        }
        return self::$instancia;
    }

    public function getConexion(): ?PDO
    {
        return $this->conexion;
    }
}
