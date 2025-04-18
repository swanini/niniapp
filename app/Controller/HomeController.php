<?php
require_once __DIR__ . '/../Model/Database.php';

class HomeController
{

    public function index()
    {

        $pdo = Database::connect();

        if ($pdo) {
            $connectionStatus = 'success';
            $errorMessage = null;
        } else {
            $connectionStatus = 'fail';
            $errorMessage = Database::getError();
        }

        require_once __DIR__ . '/../View/home.php';
    }

}