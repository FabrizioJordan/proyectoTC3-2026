<?php
namespace app\Core;

class Request
{
    public function post(array $keys): array
    {
        $data = [];
        foreach ($keys as $key) {
            $data[$key] = $_POST[$key] ?? null;
        }
        return $data;
    }

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}