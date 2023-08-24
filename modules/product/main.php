<!-- style_active -->
<?php

if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
} else {
    $cat_id = "";
};

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
} else {
    $gender = "";
};

if (isset($_GET['id_trade'])) {
    $id_trade = $_GET['id_trade'];
} else {
    $id_trade = "";
};
// echo "id_trade: " . $id_trade;

// echo "cat_id= " . $cat_id . "gender=" . $gender;

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">Trang chủ &#10148; Tất cả sản phẩm</div>
        <!-- <div class="col-md-12 mt-3">
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="0">Giày</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="1">Giày</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="2">Dép</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="3">Áo thun</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="4">Áo khoác</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="5">Áo sơ mi</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="6">Quần dài</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="7">Quần short</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="8">Đồ lót nam</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="9">Đồ lót nữ</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="10">Váy</button>
            <button type="button" class="btn btn-outline-dark rounded rounded-pill btn_filter" id="btn-filter" value="11">Đầm</button>

        </div> -->
        <!-- <script type="text/javascript">
            // Get all elements with the class "myButton"
            const buttons = document.querySelectorAll(".btn_filter");

            // Loop through each button and attach a click event listener
            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    // Get the value of the clicked button
                    const buttonValue = button.value;

                    // Display the value in the console
                    console.log(buttonValue);
                });
            });
        </script> -->


        <div class="col-md-12">
            <hr class="border border-danger border-2 opacity-50">
        </div>

        <!-- <div class="col-md-1">
            <select class="form-select rounded-pill" aria-label="Default select example" style="width: 100px;">
                <option selected>Giới tính</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
        </div>
        <div class="col-md-1" style="text-align: left;">
            <select class="form-select rounded-pill" aria-label="Default select example" style="width: 100px;">
                <option selected>Giá</option>
                <option value="male">0 - 1.000.000</option>
                <option value="female">> 1.000.000</option>
            </select>
        </div> -->
        <?php
        if ($cat_id == 0 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') order by id desc");
        } elseif ($cat_id == 1 && $gender == 0) {
            $list_product = sql_query("select * from tbl_product where gender IN ('Male','all') and catalog_id = 1 order by id DESC;");
            $count_product = num_rows("select * from tbl_product where gender IN ('Male','all') and catalog_id = 1 order by id DESC;");
        } elseif ($cat_id == 2 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 2 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 2 order by id desc");
        } elseif ($cat_id == 3 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 3 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 3 order by id desc");
        } elseif ($cat_id == 4 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 4 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 4 order by id desc");
        } elseif ($cat_id == 5 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 5 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 5 order by id desc");
        } elseif ($cat_id == 6 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 6 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 6 order by id desc");
        } elseif ($cat_id == 7 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 7 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 7 order by id desc");
        } elseif ($cat_id == 8 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 8 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 8 order by id desc");
        } elseif ($cat_id == 35 && $gender == 0) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Male','all') and catalog_id = 35 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Male','all') and catalog_id = 35 order by id desc");
        } elseif ($cat_id == 1) {
            $list_product = sql_query("select *from tbl_product where catalog_id = 1 order by id desc");
            $count_product = num_rows("select *from tbl_product where catalog_id = 1 order by id desc");
        } elseif ($cat_id == 37) {
            $list_product = sql_query("select * from tbl_product where catalog_id in (3,7) order by id desc");
            $count_product = num_rows("select * from tbl_product where catalog_id in (3,7) order by id desc");
        } elseif ($cat_id == 35) {
            $list_product = sql_query("select * from tbl_product where catalog_id =35 order by id desc");
            $count_product = num_rows("select * from tbl_product where catalog_id =35 order by id desc");
        } elseif ($cat_id == 1 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 1 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 1 order by id desc");
        } elseif ($cat_id == 2 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 2 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 2 order by id desc");
        } elseif ($cat_id == 3 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 3 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 3 order by id desc");
        } elseif ($cat_id == 4 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 4 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 4 order by id desc");
        } elseif ($cat_id == 6 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 6 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 6 order by id desc");
        } elseif ($cat_id == 8 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 8 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 8 order by id desc");
        } elseif ($cat_id == 9 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 9 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 9 order by id desc");
        } elseif ($cat_id == 10 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 10 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 10 order by id desc");
        } elseif ($cat_id == 35 && $gender == 1) {
            $list_product = sql_query("select *from tbl_product where gender IN ('Female','all') and catalog_id = 35 order by id desc");
            $count_product = num_rows("select *from tbl_product where gender IN ('Female','all') and catalog_id = 35 order by id desc");
        } elseif ($id_trade == 1) {
            $list_product = sql_query("select *from tbl_product where id_trade_mark = 1 order by id desc");
            $count_product = num_rows("select *from tbl_product where id_trade_mark = 1 order by id desc");
        } elseif ($id_trade == 2) {
            $list_product = sql_query("select *from tbl_product where id_trade_mark = 2 order by id desc");
            $count_product = num_rows("select *from tbl_product where id_trade_mark = 2 order by id desc");
        } elseif ($id_trade == 3) {
            $list_product = sql_query("select *from tbl_product where id_trade_mark = 3 order by id desc");
            $count_product = num_rows("select *from tbl_product where id_trade_mark = 3 order by id desc");
        } elseif ($id_trade == 4) {
            $list_product = sql_query("select *from tbl_product where id_trade_mark = 4 order by id desc");
            $count_product = num_rows("select *from tbl_product where id_trade_mark = 4 order by id desc");
        } elseif ($id_trade == 5) {
            $list_product = sql_query("select *from tbl_product where id_trade_mark = 5 order by id desc");
            $count_product = num_rows("select *from tbl_product where id_trade_mark = 5 order by id desc");
        } else {
            $list_product = sql_query("Select * from tbl_product order by id desc");
            $count_product = num_rows("Select * from tbl_product order by id desc");
        }
        ?>
        <div class="col-md-12">
            <div class="col-md-8">
                <span><?php

                        echo "Có " . $count_product . " sản phẩm"; ?></span>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: -25px;">
        <div class="row">
            <div class="col-md-12">
                <ul class="ul_li_product">
                    <?php


                    foreach ($list_product as $product) {
                    ?>
                        <li><a href="?mod=product&act=detail&id=<?php echo $product['id']; ?>"><img src="<?php echo $product['img_product']; ?>"></a>
                            <h6 class="mt-1 mb-2" style="max-width: 200px;"><?php echo $product['name']; ?></h6>
                            <div><?php $price = $product['price'] - ($product['price'] * ($product['discount'] / 100));
                                    echo currency_format($price); ?></div>&nbsp;&nbsp;<span><?php echo currency_format($product['price']); ?></span>&nbsp;&nbsp;<i><?php echo "-" . $product['discount'] . "% "; ?></i>
                            <a href="?mod=product&act=detail&id=<?php echo $product['id']; ?>" class="d-block">
                                <?php
                                for ($i = 0; $i < count(check_link_list_img_product($product['list_img_product'])); $i++) {
                                ?>
                                    <img src="<?php echo check_link_list_img_product($product['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                <?php
                                }
                                ?>
                            </a>
                            <a href="#" class="btn btn-warning disabled mt-2" tabindex="-1" role="button" aria-disabled="true" style="width: 100px; height: 25px; font-size: 10px; font-weight: bold;"><i class="fa-regular fa-truck-fast"></i>Free Ship</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="col-md-12 text-center">
                <hr><a href="?mod=product&act=main" class="link">Xem tất cả sản phảm</a>
                <hr>
            </div>

        </div>
    </div>