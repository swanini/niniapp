<?php

class Router {
    public static function route($uri) {
        if ($uri === '/' || $uri === '/home') {
            require_once __DIR__ . '/../Controller/HomeController.php';
            $controller = new HomeController();
            $controller->index();
        } else {
            http_response_code(404);
            echo "페이지를 찾을 수 없습니다.";
        }
    }
}
