<?php
function add_cart($id)
{
    $item = sql_query("select * from tbl_product where id = {$id}");
    // số lượng sản phẩm khi add lần đầu tiên
    $qty = 1;
    // Kiểm tra nếu qty của sản phẩm đó đã tồn tại thì + thêm 1 cho lần add sau 
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    // Thêm vào bằng Session
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['0']['id'],
        'name' => $item['0']['name'],
        'price' => $item['0']['price'],
        'discount' => $item['0']['discount'],
        'product_thumb' => $item['0']['img_product'],
        'list_img_product' => $item['0']['list_img_product'],
        'qty' => $qty,
        'sub_total' => ($item['0']['price'] - $item['0']['price'] * ($item['0']['discount'] / 100)) * $qty
    );
    // cập nhật hóa đơn
    update_info_cart();
}




function update_info_cart()
{
    if (isset($_SESSION['cart'])) {
        // tổng số lượng đã mua
        $num_order = 0;
        // tổng tiền
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $sum) {
            $num_order += $sum['qty'];
            $total += $sum['sub_total'];
        }

        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}
