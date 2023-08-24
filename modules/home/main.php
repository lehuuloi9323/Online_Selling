<div class="container clear_menu">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/Slider/slider1.jpg" class="d-block w-100 height-slider" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Slider/slider2.jpg" class="d-block w-100 height-slider" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dony.vn/wp-content/uploads/2021/07/dam-ong-dam-quay-nu-dep-1.jpg" class="d-block w-100 height-slider" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Thương Hiệu Nổi Tiếng -->

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="title">Thương Hiệu Nổi Tiếng</span>
        </div>
        <div class="col-md-12">
            <ul class="style_ul_li">
                <?php
                $list_trade_mark = sql_query("Select * from tbl_trade_mark");
                foreach ($list_trade_mark as $trade_mark) {
                ?>
                    <li><a href="?mod=product&act=main&id_trade=<?php echo $trade_mark['id'];?>"><img src="<?php echo $trade_mark['logo']; ?>"></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<!-- Thương Hiệu Nổi Tiếng -->












<!-- Hàng Hiệu đồng giá -->
<div class="container mt-5 rounded-4" style="background-color: rgb(190, 9, 8);">
    <div class="row">
        <div class="col-md-12 text-center text-light mt-3"><span class="title" style="font-size: 40px;">ƯU ĐÃI - SIÊU HẠ GIÁ</span></div>
        <!-- 1 -->
        <div class="col-md-12 mb-5 mt-3">
            <div id="productSlider0" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="public/img/FREESHIP/freeship1.png" class="d-block w-80 m-auto" alt="Product 1">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="public/img/FREESHIP/freeship2.png" class="d-block w-80 m-auto" alt="Product 2">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="public/img/FREESHIP/freeship3.png" class="d-block w-80 m-auto" alt="Product 3">
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4">
                                <img src="public/img/FREESHIP/freeship4.png" class="d-block w-80 m-auto" alt="Product 7">
                            </div>
                            <div class="col-md-4">
                                <img src="public/img/FREESHIP/freeship5.png" class="d-block w-80 m-auto" alt="Product 8">

                            </div>
                            <div class="col-md-4">
                                <img src="public/img/FREESHIP/freeship6.png" class="d-block w-80 m-auto" alt="Product 9">

                            </div>


                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSlider0" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning rounded-pill" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSlider0" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-warning rounded-pill" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- 1 -->

        <div class="col-md-12 mt-3 text-center">
            <div id="productSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $list_sale = sql_query("select * from tbl_product order by discount desc limit 10");
                    // tách mảng ban đầu thành 2 mảng có kích thước bẳng nhau
                    $splitArray = array_chunk($list_sale, ceil(count($list_sale) / 2));
                    $list_sale1 = $splitArray[0];
                    $list_sale2 = $splitArray[1];

                    ?>
                    <div class="carousel-item active">
                        <div class="row">
                            <?php
                            foreach ($list_sale1 as $sale1) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $sale1['id']; ?>"><img src="<?php echo $sale1['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $sale1['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $sale1['price'] - ($sale1['price'] * ($sale1['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($sale1['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $sale1['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($sale1['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($sale1['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" onclick="window.location.href='?mod=cart&act=add&id=<?php echo $sale1['id'];?>'" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php
                            foreach ($list_sale2 as $sale2) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $sale2['id']; ?>"><img src="<?php echo $sale2['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $sale2['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $sale2['price'] - ($sale2['price'] * ($sale2['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($sale2['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $sale2['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($sale2['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($sale2['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" onclick="window.location.href='?mod=cart&act=add&id=<?php echo $sale2['id'];?>'" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-pill" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-pill" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3 mb-3">
            <form action="?mod=product&act=main" method="post">
            <button type="submit" class="btn btn-outline-light" name="btn_filter" value="">Xem tất cả sản phẩm</button>
            </form>
        </div>
    </div>
</div>
<!-- Hàng Hiệu đồng giá -->







<!-- Giày thời trang -->
<?php
$list_shoe = sql_query("select * from tbl_product where catalog_id=1 order by id desc limit 10");
$count_list_shoe = num_rows("select * from tbl_product where catalog_id=1 order by id desc");
$splitArray = array_chunk($list_shoe, ceil(count($list_shoe) / 2));
$list_shoe1 = $splitArray[0];
$list_shoe2 = $splitArray[1];
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center"><span class="title">NEW SHOE - HOT</span></div>
        <div class="col-md-12 mt-3 text-center">
            <div id="productSlider1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php
                            foreach ($list_shoe1 as $shoe1) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $shoe1['id']; ?>"><img src="<?php echo $shoe1['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $shoe1['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $shoe1['price'] - ($shoe1['price'] * ($shoe1['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($shoe1['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $shoe1['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($shoe1['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($shoe1['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php
                            foreach ($list_shoe2 as $shoe2) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $shoe2['id']; ?>"><img src="<?php echo $shoe2['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $shoe2['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $shoe2['price'] - ($shoe2['price'] * ($shoe2['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($shoe2['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $shoe2['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($shoe2['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($shoe2['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSlider1" data-bs-slide="prev">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider" aria-hidden="true">&#8826;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSlider1" data-bs-slide="next">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider">&#8827;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <hr><a href="?mod=product&act=main&cat_id=1" class="link">Xem thêm <p style="font-weight: bold; display: inline;"><?php echo $count_list_shoe; ?></p> sản phẩm</a>
            <hr>
        </div>
    </div>
</div>
<!-- Giày thời trang -->

<?php
$list_clothes = sql_query("select * from tbl_product where catalog_id in (3,7) order by id desc limit 10");
$count_list_clothes = num_rows("select * from tbl_product where catalog_id in (3,7) order by id desc");
$splitArray = array_chunk($list_clothes, ceil(count($list_clothes) / 2));
$list_clothes1 = $splitArray[0];
$list_clothes2 = $splitArray[1];

?>
<!-- Quần áo thời trang năng động -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center"><span class="title">Quần áo thời trang năng động</span></div>
        <div class="col-md-12 mt-3 text-center">
            <div id="productSlider2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php
                            foreach ($list_clothes1 as $clothes1) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $clothes1['id']; ?>"><img src="<?php echo $clothes1['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $clothes1['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $clothes1['price'] - ($clothes1['price'] * ($clothes1['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($clothes1['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $clothes1['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($clothes1['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($clothes1['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                        <?php
                            foreach ($list_clothes2 as $clothes2) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $clothes2['id']; ?>"><img src="<?php echo $clothes2['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $clothes2['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $clothes2['price'] - ($clothes2['price'] * ($clothes2['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($clothes2['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $clothes2['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($clothes2['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($clothes2['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSlider2" data-bs-slide="prev">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider" aria-hidden="true">&#8826;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSlider2" data-bs-slide="next">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider">&#8827;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <hr><a href="?mod=product&act=main&cat_id=37" class="link">Xem thêm <p style="font-weight: bold; display: inline;"><?php echo $count_list_clothes;?></p> sản phẩm</a>
            <hr>
        </div>
    </div>
</div>
<!-- Quần áo thời trang năng động -->




<?php
$list_hat = sql_query("select * from tbl_product where catalog_id =35 order by id desc limit 10");
$count_list_hat = num_rows("select * from tbl_product where catalog_id =35");
$splitArray = array_chunk($list_hat, ceil(count($list_hat) / 2));
$list_hat1 = $splitArray[0];
$list_hat2 = $splitArray[1];

?>
<!-- Nón mũ thời trang -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center"><span class="title">Nón mũ thời trang</span></div>
        <div class="col-md-12 mt-3 text-center">
            <div id="productSlider3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                        <?php
                            foreach ($list_hat1 as $hat1) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $hat1['id']; ?>"><img src="<?php echo $hat1['img_product'] ?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $hat1['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $hat1['price'] - ($hat1['price'] * ($hat1['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($hat1['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $hat1['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($hat1['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($hat1['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                        <?php
                            foreach ($list_hat2 as $hat2) {

                            ?>


                                <div class="col-md-2 bg-white rounded-3 m-auto">
                                    <a href="?mod=product&act=detail&id=<?php echo $hat2['id']; ?>"><img src="<?php echo $hat2['img_product']?>" class="d-block w-100" alt="Product"></a>
                                    <h6 class="col-md-12 mt-1" style="height: 55px;"><a href="#" style="text-decoration: none; color: black;"><?php echo $hat2['name'] ?></a></h6>
                                    <div class="col-md-12"><span style="color: red; font-weight: bold;"><?php $price = $hat2['price'] - ($hat2['price'] * ($hat2['discount']/100));
                                                                                                        echo currency_format($price); ?></span>&nbsp;&nbsp;<span class="text-decoration-line-through"><?php echo currency_format($hat2['price']); ?></span>&nbsp;&nbsp;<i>-<?php echo $hat2['discount']; ?>%</i></div>

                                    <div class="col-md-12 text-start ms-1">
                                        <a href="#"><?php
                                                    for ($i = 0; $i < count(check_link_list_img_product($hat2['list_img_product'])); $i++) {
                                                    ?>
                                                <img src="<?php echo check_link_list_img_product($hat2['list_img_product'])[$i]; ?>" style="width: 45px; height: 45px;">

                                            <?php
                                                    }
                                            ?></a>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2"><button type="button" class="btn btn-primary" style="width: 180px;">Mua ngay</button></div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSlider3" data-bs-slide="prev">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider" aria-hidden="true">&#8826;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSlider3" data-bs-slide="next">
                    <span class="border border-0 bg-black rounded-pill text-warning icon-slider">&#8827;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <hr><a href="?mod=product&act=main&cat_id=35" class="link">Xem thêm <p style="font-weight: bold; display: inline;"><?php echo $count_list_hat; ?></p> sản phẩm</a>
            <hr>
        </div>
    </div>
</div>
<!-- Nón mũ thời trang -->