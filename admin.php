<?php

session_start();
ob_start();
require 'database/connect.php';
require 'library/sql_query.php';
require 'library/show_array.php';
require 'library/check_link_list_img_product.php';
require 'include/sidebar_admin.php';
require 'library/database.php';
require 'library/redirect.php';

?>

<!-- <a class="far fa-plus-square"></a>&nbsp&nbsp<a class="fas fa-tools"></a>&nbsp&nbsp<a class="fa fa-trash"></a> -->

<div class="col-md-10 tab-content"  id="nav-tabContent">

    <?php
if (empty($_SESSION['is_login'])) {
    redirect('login_admin.php');
}

    if (empty($_GET['mod'])) {
        $mod = 'admin';
    } else {
        $mod = $_GET['mod'];
    }


    if (empty($_GET['act'])) {

        $act = 'main';
    } else {
        $act = $_GET['act'];
    }
    $path = "modules/{$mod}/{$act}.php";
    if (file_exists($path)) {
        require $path;
    } else {
        require 'include/404.php';
    }
   
    ?>










</div>



















</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>