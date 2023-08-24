<?php
$id = $_POST['id'];
$qty = $_POST['qty'];

// lấy thông tin sản phẩm
$item = sql_query("select * from tbl_product where id = {$id}");

if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    //Cập nhật số lượng
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    // cập nhật tổng tiền
    $sub_total = ($item['0']['price'] - $item['0']['price'] * ($item['0']['discount'] / 100)) * $qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
    // cập nhật toàn bộ giỏ hàng
    update_info_cart();


    // Tổng giá trị trả về
    $total = $_SESSION['cart']['info']['total'];

    // giá trị trả về

    $data = array(
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total)
    );

    echo json_encode($data);
}
