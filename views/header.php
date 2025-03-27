<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #3a5a96;
            --secondary-color: #5c7cfa;
            --gradient-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --card-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);
        }
        * {
            box-sizing: border-box; /* Đảm bảo padding/margin không làm tràn layout */
            transition: all 0.3s ease;
        }
        html {
            height: 100%; /* Chiều cao đầy đủ cho html */
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--gradient-bg);
            color: #2c3e50;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Chiều cao tối thiểu bằng viewport */
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto; /* Main mở rộng để đẩy footer xuống */
            padding-top: 100px; /* Khoảng cách với navbar fixed */
            padding-bottom: 20px; /* Thêm padding dưới để tránh footer chồng lên */
        }
        footer {
            flex-shrink: 0; /* Footer không co lại */
            background: #343a40;
            color: white;
            padding: 20px 0;
            width: 100%;
        }
        .navbar {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 15px 0;
        }
        .navbar-brand {
            color: white !important;
            font-weight: 700;
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }
        .navbar-brand i {
            margin-right: 10px;
            color: #fff;
        }
        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            display: flex;
            align-items: center;
            font-weight: 500;
        }
        .nav-link i {
            margin-right: 8px;
        }
        .nav-link:hover {
            color: white !important;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-users-cog"></i> Quản Lý Nhân Viên
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['admin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=add">
                                <i class="fas fa-user-plus"></i> Thêm Nhân Viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=logout">
                                <i class="fas fa-sign-out-alt"></i> Đăng Xuất
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <main>