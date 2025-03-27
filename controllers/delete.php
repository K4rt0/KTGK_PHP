<?php
include '../config/db.php';

if (isset($_GET['id'])) {
    $Ma_NV = $_GET['id'];
    $sql = "DELETE FROM nhanvien WHERE Ma_NV='$Ma_NV'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Lỗi khi xóa: " . $conn->error;
    }
}
?>
