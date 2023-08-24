<?php
$list_buy = get_list_buy_cart();
$list_info = get_num_buy_info();
show_array($list_buy);
// show_array($list_info);
$error = array();
// echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && array_key_exists('is_login_index', $_SESSION) == FALSE) {
    $error['login'] = 'Vui lòng đăng nhập tài khoản';
}
elseif($_SERVER['REQUEST_METHOD'] == 'POST' && array_key_exists('is_login_index', $_SESSION) == true){
    redirect("?mod=cart&act=pay_order");
}
// show_array($error);
?>
<div class="container">
    <div class="row">
        <h3 class="col-md-12 text-center mt-2 fw-bold text-warning-emphasis">GIỎ HÀNG</h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (!empty($list_buy)) {
            ?> <table class="table text-center">
                    <thead>
                        <tr class="table-primary text-secondary">
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">Số lượng sản phẩm</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list_buy as $cart) {
                    ?>
                        <tbody>

                            <tr>
                                <th>#<?php echo $cart['id']; ?></th>
                                <td><a href="?mod=product&act=detail&id=<?php echo $cart['id']; ?>" class="link"><?php echo $cart['name']; ?></a></td>
                                <td><a href="#"><img src="<?php echo $cart['product_thumb']; ?>" style="width: 100px; height: 100px;"></td>
                                <td><?php echo currency_format($cart['price'] - ($cart['price'] * ($cart['discount'] / 100))) ?></td>
                                <td><input type="number" data-id="<?php echo $cart['id']; ?>" style="width: 55px;" class="rounded border border-danger-subtle" value="<?php echo $cart['qty']; ?>" id="qty" name="qty"></td>
                                <td id="sub-total-<?php echo $cart['id']; ?>"><?php echo currency_format(($cart['price'] - ($cart['price'] * ($cart['discount'] / 100))) * $cart['qty']) ?></td>
                                <td><a href="<?php echo $cart['url_delete_cart']; ?>" class="fa fa-trash"></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
        </div>
        <div class="col-md-12 text-end fw-bold">Tổng giá: <span id="total-price" style="color: red;"><?php echo currency_format($list_info['total']); ?></span></div>
        <div class="col-md-12 text-end mt-2">
            <form method="POST">
                <button type="submit" class="btn btn-primary" value="buy" name="btn_buy">Thanh Toán</button>
            </form>
        </div>
        <div class="col-md-12 text-end mt-2"><button class="btn btn-danger" type="button" onclick="window.location.href='?mod=cart&act=delete_all';">Xóa giỏ toàn bộ sản phẩm trên giỏ hàng</button></div>
<div class="col-md-12 text-center text-danger fw-bold" style="font-size: 30px;">
    <?php if(!empty($error['login'])){
        echo $error['login'];
    } ?>
</div>


    <?php
            } else {
    ?>
        <div class="col-md-12">Không có sản phẩm nào trong giỏ hàng</div>
    <?php
            }
    ?>
    </div>
</div>