<?php
require_once 'model/Database.php';
require_once 'model/User.php';
require_once 'controller/UserController.php';

$controller = new UserController();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'save':
        $controller->save();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}
