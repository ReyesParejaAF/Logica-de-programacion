<?php

require_once 'app/controllers/FormularioController.php';

$controller = new FormularioController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    default:
        require_once 'views/formulario/create.php';
        break;
}

