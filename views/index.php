<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header bg-primary text-white p-4 d-flex justify-content-between align-items-center">
                    <h2 class="h3 mb-0 d-flex align-items-center">
                        <i class="fas fa-list-alt me-3"></i>Danh Sách Nhân Viên
                    </h2>
                    <a href="?action=add" class="btn btn-light d-flex align-items-center">
                        <i class="fas fa-plus me-2"></i>Thêm Nhân Viên Mới
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-muted fw-bold">Mã NV</th>
                                    <th class="text-muted fw-bold">Tên Nhân Viên</th>
                                    <th class="text-muted fw-bold text-center">Giới Tính</th>
                                    <th class="text-muted fw-bold">Nơi Sinh</th>
                                    <th class="text-muted fw-bold">Phòng Ban</th>
                                    <th class="text-muted fw-bold">Lương</th>
                                    <th class="text-center text-muted fw-bold">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($employees->num_rows > 0) {
                                    while ($row = $employees->fetch_assoc()) { ?>
                                    <tr class="align-middle">
                                        <td class="text-muted"><?= htmlspecialchars($row['Ma_NV']) ?></td>
                                        <td class="fw-bold text-primary"><?= htmlspecialchars($row['Ten_NV']) ?></td>
                                        <td class="text-center">
                                            <img src="assets/images/<?= $row['Phai'] == 'NU' ? 'woman.png' : 'man.png' ?>" 
                                                 width="45" class="rounded-circle shadow-sm">
                                        </td>
                                        <td><?= htmlspecialchars($row['Noi_Sinh']) ?></td>
                                        <td class="text-muted"><?= htmlspecialchars($row['Ten_Phong']) ?></td>
                                        <td class="text-success fw-bold"><?= number_format($row['Luong'], 0, ',', '.') ?> VNĐ</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="?action=edit&id=<?= $row['Ma_NV'] ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="?action=delete&id=<?= $row['Ma_NV'] ?>" class="btn btn-sm btn-outline-danger delete-btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } } else { ?>
                                    <tr><td colspan="7" class="text-center text-muted py-5">Không có nhân viên nào</td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light py-3">
                    <nav aria-label="Phân trang">
                        <ul class="pagination justify-content-center mb-0">
                            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                    <a class="page-link" href="?action=index&page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>