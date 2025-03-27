<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Ma_NV = $_POST['Ma_NV'];
    $Ten_NV = $_POST['Ten_NV'];
    $Phai = $_POST['Phai'];
    $Noi_Sinh = $_POST['Noi_Sinh'];
    $Ma_Phong = $_POST['Ma_Phong'];
    $Luong = $_POST['Luong'];

    $sql = "INSERT INTO nhanvien (Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong)
            VALUES ('$Ma_NV', '$Ten_NV', '$Phai', '$Noi_Sinh', '$Ma_Phong', $Luong)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Thêm nhân viên thành công!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = '/indexs.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Lỗi khi thêm nhân viên',
                text: '" . $conn->error . "'
            });
        </script>";
    }
}
?>

<?php include 'header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h2 class="h3 mb-0">
                        <i class="fas fa-user-plus me-3"></i>Thêm Nhân Viên Mới
                    </h2>
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="Ma_NV" class="form-label">Mã Nhân Viên</label>
                            <input type="text" class="form-control" id="Ma_NV" name="Ma_NV" required>
                        </div>
                        <div class="mb-3">
                            <label for="Ten_NV" class="form-label">Tên Nhân Viên</label>
                            <input type="text" class="form-control" id="Ten_NV" name="Ten_NV" required>
                        </div>
                        <div class="mb-3">
                            <label for="Phai" class="form-label">Giới Tính</label>
                            <select class="form-select" id="Phai" name="Phai" required>
                                <option value="NAM">Nam</option>
                                <option value="NU">Nữ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Noi_Sinh" class="form-label">Nơi Sinh</label>
                            <input type="text" class="form-control" id="Noi_Sinh" name="Noi_Sinh" required>
                        </div>
                        <div class="mb-3">
                            <label for="Ma_Phong" class="form-label">Phòng Ban</label>
                            <select class="form-select" id="Ma_Phong" name="Ma_Phong" required>
                                <option value="QT">Quản Trị</option>
                                <option value="TC">Tài Chính</option>
                                <option value="KT">Kỹ Thuật</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Luong" class="form-label">Lương</label>
                            <input type="number" class="form-control" id="Luong" name="Luong" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Thêm Nhân Viên
                            </button>
                            <a href="index.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Quay Lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>