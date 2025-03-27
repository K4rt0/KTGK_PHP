<?php
include 'config/db.php';

class AuthController {
    public function login() {
        if (isset($_SESSION['admin'])) {
            header("Location: /index.php?action=index");
            exit();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $admin_username = "admin";
            $admin_password = "123";

            if ($username === $admin_username && $password === $admin_password) {
                $_SESSION['admin'] = $username;
                header("Location: /index.php?action=index");
            } else {
                $error = "Sai tài khoản hoặc mật khẩu!";
                include 'login.php';
            }
        } else {
            include 'login.php';
        }
    }

    public function logout() {
        unset($_SESSION['admin']);
        header("Location: login.php");
        exit();
    }
}
?>