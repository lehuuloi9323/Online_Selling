<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="public/css/style_admin.css" type="text/css" rel="stylesheet" />
    <script src="library/ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 bg-dark text-light">
                        <i class="fas fa-user-alt fa-xl mt-3 mb-3 "></i> &nbsp Admin
                    </div>
                    <div class="col-md-12 bg-warning-subtle"  style="min-height: 58.2rem;">
                        <ul>
                            <li><a href="?mod=admin&act=main">All Product</a></li>
                            <li><a href="?mod=admin&act=control_add">Add Product</a></li>
                            <li><a href="?mod=admin_page&act=main">All page</a></li>
                            <li><a href="?mod=admin_page&act=add">Add page</a></li>
                            <li><a href="login_admin.php">Thoát</a></li>
                        </ul>
                    </div>
                </div>
            </div>