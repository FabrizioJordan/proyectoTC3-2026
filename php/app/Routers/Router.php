<?php
namespace app\Routers;

use app\Core\Request;

class Router
{
    private array $rutas = [];

    public function get(string $ruta, array $controlador): void
    {
        $this->rutas['GET'][$ruta] = $controlador;
    }

    public function post(string $ruta, array $controlador): void
    {
        $this->rutas['POST'][$ruta] = $controlador;
    }

    public function dispatch(Request $request): void
    {
        $metodo = $request->method();
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->rutas[$metodo][$uri])) {
            [$clase, $accion] = $this->rutas[$metodo][$uri];
            $controlador = new $clase();
            $controlador->$accion($request);
        } else {
            http_response_code(404);
            echo "Ruta no encontrada";
        }
    }
}
