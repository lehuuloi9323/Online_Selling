<?php
// Lấy id sản phẩm
$id = (int)$_GET['id'];
add_cart($id);


update_info_cart();
// show_array($_SESSION['cart']);
redirect("?mod=cart&act=show");
?>