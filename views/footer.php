</main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-2">
                        <i class="fas fa-copyright me-2"></i> 
                        <?= date('Y') ?> Hệ Thống Quản Lý Nhân Viên
                    </p>
                    <div style="color: #ccc;">
                        <small>
                            Phát triển bởi Nhóm Sinh Viên 
                            <i class="fas fa-code ms-2 me-2"></i> 
                            Phiên bản 1.0
                        </small>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    Swal.fire({
                        title: 'Xác nhận xóa?',
                        text: 'Bạn có chắc chắn muốn xóa nhân viên này?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đồng ý',
                        cancelButtonText: 'Hủy'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = href;
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>