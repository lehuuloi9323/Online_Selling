<?php
function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        // xóa sản phẩm trong giỏ hàng
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
        }
        else{
            unset($_SESSION['cart']);
        }
        update_info_cart();
    }
}
