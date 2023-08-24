<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Selling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/menu.css" type="text/css">
    <link rel="stylesheet" href="public/css/title.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/css/slider_product.css" type="text/css">
    <link rel="stylesheet" href="range.css" type="text/css">
    <script src="public/js/jquery-3.6.4.min.js"></script>



    <link rel="stylesheet" href="public/css/tab_pane.css" type="text/css">
    <link rel="stylesheet" href="public/css/detail_product.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />







</head>

<!-- menu -->
<div class="spinner-border text-primary z-3 position-fixed w-3 p-4" role="status" style="left: 50%; top: 50%;" id="spinner">
    <span class="visually-hidden">Loading...</span>
</div>

<div class="position-fixed w-100 top-0 start-50 translate-middle-x" style="z-index: 5;">
    <div class="container-fluid bg-dark text-light">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_SESSION['is_login_index'])) {
                ?>
                    <div class="col-md-3 mt-1 mb-1">Xin chào <?php echo $_SESSION['username'] . " !"; ?></div>
                <?php
                } else {
                ?>
                    <div class="col-md-3 mt-1 mb-1">Xin chào quý khách !</div>
                <?php
                }
                ?>
                <div class="col-md-4 mt-1 mb-1 text-warning fw-bold">Mua sắm vui vẻ 1 ngày tốt lành</div>
                <div class="col-md-2 mt-1 mb-1" style="text-align: right;"><a href="#"><img src="public/img/fb_icon_325x325.png" style="width: 25px; height: 25px;"></a>
                    <a href="#"><img src="public/img/youtube.png" style="width: 25px; height: 25px;"></a>
                    <a href="#"><img src="public/img/instagram.png" style="width: 25px; height: 25px;"></a>
                </div>
                <div class="col-md-3 mt-1 mb-1" style="text-align: right;">
                    <?php
                    if (isset($_SESSION['is_login_index'])) {

                    ?>
                        <button style="font-size:12px" class="rounded btn btn-outline-light" onclick="window.location.href='?mod=user&act=logout';">Đăng xuất</button>&nbsp|&nbsp
                    <?php
                    } else {
                    ?>
                        <button style="font-size:12px" class="rounded btn btn-outline-light" onclick="window.location.href='?mod=user&act=login';">Đăng nhập <i class="fas fa-user-alt fa-xl"></i></button>&nbsp|&nbsp
                    <?php
                    }
                    ?>
                    <button style="font-size:12px" class="rounded btn btn-outline-light" onclick="window.location.href='?mod=cart&act=show';">Giỏ hàng<i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #F5CE00;">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="public/img/LOGO.png" style="width: 85px; object-fit: contain;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="product.html">Tất cả sản phẩm</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="product.html" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                            Chọn mua
                        </a>
                        <div class="dropdown-menu dropdown-menu-fist" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=0&gender=0">Thời trang nam</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=1&gender=0">Giầy</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=2&gender=0">Dép</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=3&gender=0">Áo thun</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=4&gender=0">Áo khoác</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=5&gender=0">Áo sơ mi</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=6&gender=0">Quần dài</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=7&gender=0">Quần shorts</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=8&gender=0">Đồ lót nam</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=35&gender=0">Nón mũ</a></li>


                            </ul>
                            <ul>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=0&gender=1">Thời trang nữ</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=1&gender=1">Giầy</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=2&gender=1">Dép</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=3&gender=1">Áo thun</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=4&gender=1">Áo khoác</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=6&gender=1">Quần dài</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=9&gender=1">Váy</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=10&gender=1">Đầm</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=8&gender=1">Đồ lót nữ</a></li>
                                <li><a class="dropdown-item" href="?mod=product&act=main&cat_id=35&gender=1">Nón mũ</a></li>
                            </ul>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="?mod=product&act=main" role="button" data-bs-toggle="" aria-expanded="false">
                            Thương Hiệu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?mod=product&act=main&id_trade=1">Kappa</a></li>
                            <li><a class="dropdown-item" href="?mod=product&act=main&id_trade=5">NUNU&NICK</a></li>

                            <li><a class="dropdown-item" href="?mod=product&act=main&id_trade=3">Superga</a></li>
                            <li><a class="dropdown-item" href="?mod=product&act=main&id_trade=2">Ecko Untld</a></li>
                            <li><a class="dropdown-item" href="?mod=product&act=main&id_trade=4">Staple</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=page&act=main">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=page&act=detail&id=1">Giới thiệu</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="?mod=page&act=detail&id=2">Liên hệ</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Bạn cần tìm gì?" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

            </div>

        </div>
    </nav>
</div>
<!-- menu -->



<body>