<?php
include 'config/db.php';
include 'controllers/EmployeeController.php';
include 'controllers/AuthController.php';

$employeeController = new EmployeeController($conn);
$authController = new AuthController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $employeeController->index();
        break;
    case 'add':
        $employeeController->add();
        break;
    case 'edit':
        $employeeController->edit();
        break;
    case 'delete':
        $employeeController->delete();
        break;
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        $employeeController->index();
}
?>