<?php
session_start();
unset($_SESSION['admin']);
header("Location: /views/login.php");
exit();
?>