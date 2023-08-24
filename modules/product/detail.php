<?php
$id = $_GET['id'];
// echo $id;
$list_product = sql_query("select * from tbl_product where id = {$id}");

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card-wrapper">
                <div class="card">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <?php
                                foreach ($list_product as $product) {
                                    for ($i = 0; $i < count(check_link_list_img_product($product['list_img_product'])); $i++) {
                                ?>
                                        <img class="img_detail" src="<?php echo check_link_list_img_product($product['list_img_product'])[$i]; ?>" alt="shoe image">
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="img-select">
                            <?php
                            for ($i = 0; $i < count(check_link_list_img_product($product['list_img_product'])); $i++) {
                            ?>
                                <div class="img-item">
                                    <a href="#" data-id="<?php echo $i + 1; ?>">
                                        <img class="img_detail" src="<?php echo check_link_list_img_product($product['list_img_product'])[$i]; ?>" alt="shoe image">
                                    </a>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <!-- card right -->
                    <div class="product-content">
                        <h2 class="product-title"><?php echo $product['name']; ?></h2>

                        <a href="#" class="product-link">Ghé thăm<?php
                                                                    $trade_mark = sql_query("SELECT * FROM tbl_trade_mark where id = {$product['id_trade_mark']}");
                                                                    echo $trade_mark[0]['name_trade_mark'];
                                                                    ?>
                        </a>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class="product-price">
                            <p class="last-price">Giá cũ: <span><?php echo currency_format($product['price']); ?></span></p>
                            <p class="new-price">Giá mới: <span><?php $price = $product['price'] - ($product['price'] * ($product['discount']/100));
                                                                echo currency_format($price); ?> (-<?php echo $product['discount']; ?>%)</span></p>
                        </div>

                        <div class="product-detail">
                            <h2>Mô tả sản phẩm</h2>
                            <table class=" table table-dark">
                                <tr>
                                    <td>Mã sản phẩm: <span class="fw-bold">#<?php echo $product['id']; ?></span></td>
                                    <td>Giới tính: <span class="fw-bold"><?php
                                                                            echo check_gender($product['gender']);
                                                                            ?></span></td>
                                </tr>
                                <tr>
                                    <td>Thương hiệu: <span class="fw-bold"><?php
                                                                            $trademark = sql_query("select name_trade_mark from tbl_trade_mark where id ={$product['id_trade_mark']}");
                                                                            echo $trademark[0]['name_trade_mark'];
                                                                            ?></span></td>
                                    <td>Season: <span class="fw-bold"><?php
                                                                        $string = $product['creation_time'];
                                                                        $ss = substr($string, 0, 4);
                                                                        echo $ss;
                                                                        ?></span></td>
                                </tr>
                            </table>
                            <!-- <h6>Chọn size</h6>
                            <form action="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">36</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">37</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">38</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">39</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">40</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">41</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">42</label>
                                </div>
                            </form> -->

                            <ul>
                                <li><img src="public/img/shoes_images/checked.png" style="width: 18px; height: 18px;"> Màu sắc: <span>Black</span></li>
                                <li><img src="public/img/shoes_images/checked.png" style="width: 18px; height: 18px;"> Trạng thái mặt hàng: <span>Có sẵn</span></li>
                                <li><img src="public/img/shoes_images/checked.png" style="width: 18px; height: 18px;"> Loại mặt hàng: <span style="text-transform: capitalize;">
                                        <?php
                                        $catalog = sql_query("SELECT * FROM tbl_catalog where id = {$product['catalog_id']}");
                                        echo $catalog[0]['name'];
                                        ?>
                                    </span></li>
                                <li><img src="public/img/shoes_images/checked.png" style="width: 18px; height: 18px;"> Khu vực vận chuyển: <span>Trong nước</span></li>
                                <li><img src="public/img/shoes_images/checked.png" style="width: 18px; height: 18px;"> Phí vận chuyển: <span style="font-weight: bold; color: brown">Free</span></li>
                            </ul>
                        </div>

                        <div class="purchase-info">
                            <!-- <input type="number" min="0" value="1"> -->
                            <button type="button" onclick="window.location.href='?mod=cart&act=add&id=<?php echo $product['id'];?>'" class="btn">
                                Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button" onclick="window.location.href='?mod=cart&act=add&id=<?php echo $product['id'];?>'" class="btn">Mua ngay</button>
                        </div>

                        <div class="social-links">
                            <p>Share At: </p>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<div class="container" style="margin-top: 3%;">
    <div class="row">
        <div class="col-md-12 tabset mt-5">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="TH" checked>
            <label for="tab1">Thương Hiệu</label>
            <!-- Tab 2 -->
            <input type="radio" name="tabset" id="tab2" aria-controls="BH">
            <label for="tab2">Bảo Hành</label>


            <div class="tab-panels">
                <section id="TH" class="tab-panel">
                    <h5>Chính sách đổi trả sản phẩm</h5>
                    <h6 class="mt-2 mb-2">1. Phạm vi áp dụng</h6>
                    <div>Chính sách Bảo hành và Chính sách Đổi sản phẩm của <a href="index.php" class="link">Online Selling</a> áp dụng đối với:
                        Sản phẩm do Hoàng Phúc phân phối tại các cửa hàng Hoàng Phúc trên toàn quốc và tại website <a href="index.php" class="link">Online Selling</a>
                        Sản phẩm do đối tác (hợp pháp) trên lãnh thổ Việt Nam do Hoàng Phúc Quốc Tế chỉ định tùy từng thời điểm.
                        Chính sách này không áp dụng đối với sản phẩm mua ở nước ngoài (không được phân phối bởi Hoàng Phúc Quốc Tế).
                    </div>
                    <h6 class="mt-2 mb-2">2. Chính sách và điều kiện bảo hành</h6>
                    <div>Áp dụng cho các sản phẩm giày, dép sẽ được bảo hành về keo - chỉ trong thời gian 180 ngày.
                        Áp dụng cho sản phẩm còn trong thời gian bảo hành. Ngoài thời gian Bảo Hành, khách hàng có nhu cầu vui lòng sử dụng dịch vụ (có tính phí) của Trung Tâm Bảo Hành.
                        Chính sách bảo hành không áp dụng đối với các sản phẩm bị lỗi phát sinh từ việc sử dụng và/ hoặc bảo quản không đúng cách, ngay cả trong thời hạn quy định, các phụ kiện: vớ, dây giày, xi, lót giày, đồ lót.
                    </div>
                    <h6 class="mt-2 mb-2">Chính sách và điều kiện đổi sản phẩm</h6>
                    <div>Các sản phẩm nằm trong phạm vi áp dụng sẽ được <span class="font-weight: bold;">Miễn phí đổi hàng trong thời gian 90 ngày.</span></div>
                    <h6 class="mt-2 mb-2">3. Điều kiện đổi sản phẩm</h6>
                    <div>Sản phẩm đổi phải chưa qua sử dụng, còn nguyên tem nhãn và hoá đơn mua hàng.</div>
                    <div>Mỗi sản phẩm được áp dụng đổi một lần.</div>
                    <div>Khi đổi sang sản phẩm có giá trị cao hơn, Quý khách hàng vui lòng thanh toán bổ sung phần giá chênh lệch giữa hai sản phẩm. Trong trường hợp Quý khách hàng đổi sang sản phẩm có giá trị thấp hơn, phần chênh lệch giá sẽ không được hoàn lại. </div>
                    <div>Giá trị của sản phẩm gốc được tính theo giá tiền thực tế khách hàng đã thanh toán, giá trị của sản phẩm đổi được tính theo giá bán lẻ niêm yết tại thời điểm đổi.</div>
                    <div>Các trường hợp sản phẩm đã qua sử dụng và/hoặc chưa sử dụng nhưng do bảo quản không đúng cách, ngay cả trong thời hạn quy định; các phụ kiện như vớ, dây giày, xi, lót giày, đồ lót sẽ không được áp dụng chính sách đổi hàng.</div>
                </section>
                <section id="BH" class="tab-panel">
                    <div style="text-align: center;"><img src="<?php echo $product['baner_trade_mark'] ?>" alt="" width="450px" height="650px"></div>
                </section>

            </div>

        </div>

        <h5 class="col-md-12">
            Sản phẩm tương tự
            <ul class="ul_li_detail_product">
                <?php

                $list_similar = sql_query("select * from tbl_product where catalog_id = {$product['catalog_id']}");
                ?>
                <?php


                foreach ($list_similar as $similar) {
                ?>
                    <li><a href="?mod=product&act=detail&id=<?php echo $similar['id']; ?>"><img src="<?php echo $similar['img_product']; ?>"></a>
                        <h6 class="mt-1 mb-2" style="max-width: 200px;"><?php echo $similar['name']; ?></h6>
                        <div><?php $price = $similar['price'] - ($similar['price'] * (1 / $similar['discount']));
                                echo currency_format($price); ?></div>&nbsp;&nbsp;<span><?php echo currency_format($similar['price']); ?></span>&nbsp;&nbsp;<i style="color: orange; display: block; margin: 2% 0;">SALE <?php echo "-" . $similar['discount'] . "% "; ?></i>
                        <a href="?mod=product&act=detail&id=<?php echo $similar['id']; ?>" class="d-block">
                            <?php
                            for ($i = 0; $i < count(check_link_list_img_product($similar['list_img_product'])); $i++) {
                            ?>
                                <img src="<?php echo check_link_list_img_product($similar['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

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

            </ul>
        </h5>
    </div>
</div>