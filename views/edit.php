<?php include 'header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h2 class="h3 mb-0"><i class="fas fa-user-edit me-3"></i>Chỉnh Sửa Nhân Viên</h2>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="?action=edit&id=<?= htmlspecialchars($row['Ma_NV']) ?>">
                        <div class="mb-3">
                            <label for="Ma_NV" class="form-label">Mã Nhân Viên</label>
                            <input type="text" class="form-control" id="Ma_NV" name="Ma_NV" 
                                   value="<?= htmlspecialchars($row['Ma_NV']) ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Ten_NV" class="form-label">Tên Nhân Viên</label>
                            <input type="text" class="form-control" id="Ten_NV" name="Ten_NV" 
                                   value="<?= htmlspecialchars($row['Ten_NV']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="Phai" class="form-label">Giới Tính</label>
                            <select class="form-select" id="Phai" name="Phai" required>
                                <option value="NAM" <?= $row['Phai'] == 'NAM' ? 'selected' : '' ?>>Nam</option>
                                <option value="NU" <?= $row['Phai'] == 'NU' ? 'selected' : '' ?>>Nữ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Noi_Sinh" class="form-label">Nơi Sinh</label>
                            <input type="text" class="form-control" id="Noi_Sinh" name="Noi_Sinh" 
                                   value="<?= htmlspecialchars($row['Noi_Sinh']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="Ma_Phong" class="form-label">Phòng Ban</label>
                            <select class="form-select" id="Ma_Phong" name="Ma_Phong" required>
                                <option value="QT" <?= $row['Ma_Phong'] == 'QT' ? 'selected' : '' ?>>Quản Trị</option>
                                <option value="TC" <?= $row['Ma_Phong'] == 'TC' ? 'selected' : '' ?>>Tài Chính</option>
                                <option value="KT" <?= $row['Ma_Phong'] == 'KT' ? 'selected' : '' ?>>Kỹ Thuật</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Luong" class="form-label">Lương</label>
                            <input type="number" class="form-control" id="Luong" name="Luong" 
                                   value="<?= htmlspecialchars($row['Luong']) ?>" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save me-2"></i>Cập Nhật</button>
                            <a href="?action=index" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Quay Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>