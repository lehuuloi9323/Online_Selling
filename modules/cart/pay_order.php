<?php
if (empty($_SESSION['is_login_index'])) {
    redirect("?mod=cart&act=show");
}
$info_user = sql_query("select *from tbl_user where username = '{$_SESSION['username']}'");
$list_buy = get_list_buy_cart();
$list_info = get_num_buy_info();

// show_array($info_user);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <hr style="width: 100%; height: 10px; background-color: red;">
            <div class="col-md-12" style="color: orange;">
                <i class="fas fa-map-pin fa-2x" style="color: orange;"></i> <span class="fw-bold" style="font-size: 27px;">&nbspĐịa chỉ nhận hàng</span>
            </div>
            <div class="col-md-12 mt-3" style="font-size: 20px;">
                <span class="fw-bold"><?php echo $info_user[0]['name'] . " " . "(+84) " . $info_user[0]['phone_number']; ?></span>&nbsp&nbsp<span><?php echo $info_user[0]['address']; ?></span>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành Tiền</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list_buy as $pay) {


                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><img src="<?php echo $pay['product_thumb']; ?>" style="width: 105px; height: 105px;">&nbsp;&nbsp;<?php echo $pay['name']; ?></th>
                                <td><?php echo currency_format($pay['price'] - ($pay['price'] * ($pay['discount'] / 100))) ?></td>
                                <td><?php echo $pay['qty']; ?></td>
                                <td><?php echo currency_format(($pay['price'] - ($pay['price'] * ($pay['discount'] / 100))) * $pay['qty']) ?></td>
                            </tr>

                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-md-12 text-end fw-bold">Số tiền cần thanh toán: <span id="total-price" style="color: red;"><?php echo currency_format($list_info['total']); ?></span></div>
            <form method="POST" action="?mod=cart&act=payment_processing">
                <div class="col-md-12 text-end mt-2"><button class="btn btn-success" type="submit" name="button_buy" value="buy">Mua ngay</button></div>
            </form>
        </div>
    </div>
</div>