<?php

class Router
{
    private $getRoutes = [];
    private $postRoutes = [];

    public function get($path, $callback)
    {
        $this->getRoutes[$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->postRoutes[$path] = $callback;
    }

    public function dispatch($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        if ($method === 'GET' && isset($this->getRoutes[$uri])) {
            $this->call($this->getRoutes[$uri]);
        } elseif ($method === 'POST' && isset($this->postRoutes[$uri])) {
            $this->call($this->postRoutes[$uri]);
        } else {
            http_response_code(404);
            echo "The page cannot be found.";
        }
    }

    private function call($callback)
    {
        if (is_string($callback)) {
            [$controllerName, $methodName] = explode('@', $callback);
            require_once __DIR__ . '/../Controller/' . $controllerName . '.php';
            $controller = new $controllerName();
            $controller->$methodName();
        }
    }
}