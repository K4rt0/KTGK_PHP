<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include 'config/db.php';
include 'models/Employee.php';

class EmployeeController {
    private $employee;

    public function __construct($db) {
        $this->employee = new Employee($db);
    }

    public function index() {
        $limit = 5;
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
        $start = ($page - 1) * $limit;

        $employees = $this->employee->getAll($start, $limit);
        $total = $this->employee->getTotal();
        $total_pages = ceil($total / $limit);

        include 'views/index.php';
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'Ma_NV' => $_POST['Ma_NV'], 'Ten_NV' => $_POST['Ten_NV'],
                'Phai' => $_POST['Phai'], 'Noi_Sinh' => $_POST['Noi_Sinh'],
                'Ma_Phong' => $_POST['Ma_Phong'], 'Luong' => $_POST['Luong']
            ];
            if ($this->employee->add($data)) {
                header("Location: index.php?action=index");
            }
        } else {
            include 'views/add.php';
        }
    }

    public function edit() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'Ma_NV' => $_POST['Ma_NV'], 'Ten_NV' => $_POST['Ten_NV'],
                'Phai' => $_POST['Phai'], 'Noi_Sinh' => $_POST['Noi_Sinh'],
                'Ma_Phong' => $_POST['Ma_Phong'], 'Luong' => $_POST['Luong']
            ];
            if ($this->employee->update($data)) {
                header("Location: index.php?action=index");
            }
        } else {
            $row = $this->employee->getById($_GET['id']);
            include 'views/edit.php';
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            if ($this->employee->delete($_GET['id'])) {
                header("Location: index.php?action=index");
            }
        }
    }
}
?>