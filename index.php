<?php
session_start();
ob_start();
require 'database/connect.php';
require 'library/sql_query.php';
require 'library/show_array.php';
require 'library/redirect.php';
require 'include/header.php';
require 'library/currency_format.php';
require 'library/check_link_list_img_product.php';
require 'library/num_rows.php';
require 'library/check_gender.php';
require 'library/cart.php';
require 'library/get_list_buy_cart.php';
require 'library/get_num_order_cart.php';
require 'library/delete_cart.php';
require 'library/check_login_user.php';





?>
<!-- https://hoang-phuc.com/ -->

<!-- Page -->




<!-- content -->
<div class="clear_menu"></div>
<?php

if (empty($_GET['mod'])) {
    $mod = 'home';
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





<!-- content -->



<?php
require 'include/footer.php';
?>

