<?php
$id = (int)$_GET['id'];
?>
<h4>Sửa sản phẩm có ID là <?php echo $id;?></h4>
<form class="mt-2" method="post" enctype="multipart/form-data">
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Name Product</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name_product" placeholder="Nhập tên sản phẩm / Enter product name">
    </div>

    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Price</label>
        <input type="number" class="form-control" name="price" id="formGroupExampleInput" placeholder="Nhập giá sản phẩm / Enter product price ">
    </div>
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Discount</label>
        <input type="number" class="form-control" name="discount" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-1">
        <label for="formFile" class="form-label text-primary fw-bold">Image product</label>
        <!-- <input class="form-control" type="file" id="formFile" name="img_product"> -->
        <input type="text" class="form-control mt-1" name="img_product" id="formGroupExampleInput" placeholder="Nếu là đường dẫn Online thì dán vào đây">
    </div>
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">List image product</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="list_img_product"></textarea>
            <label for="floatingTextarea2">Mỗi đường dẫn được ngăn cách bởi dấu ,</label>
        </div>
    </div>
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="all" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                All
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Female">
            <label class="form-check-label" for="flexRadioDefault1">
                Female
            </label>
        </div>
    </div>
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Trademark</label>
        <select class="form-select" aria-label="Default select example" name="trademark">
            <option selected></option>
            <?php
            $list_trademark = sql_query("select id,name_trade_mark from tbl_trade_mark");
            show_array($list_trademark);
            foreach($list_trademark as $trademark){
                
            ?>
            <option value="<?php echo $trademark['id'];?>"><?php echo $trademark['name_trade_mark'];?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="mb-1">
        <label for="formGroupExampleInput" class="form-label text-primary fw-bold">Catalog</label>
        <select class="form-select" aria-label="Default select example" name="catalog">
            <option selected></option>
            <?php
            $list_catalog = sql_query("select * from tbl_catalog");
            show_array($list_catalog);
            foreach($list_catalog as $catalog){
                
            ?>
           <option value="<?php echo $catalog['id'];?>"><?php echo $catalog['name'];?></option>
           <?php

            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3" name="btn_add" value="Thêm">Thêm</button>
</form>

<?php
$old_value_product = sql_query("select * from tbl_product where id={$id}");
// show_array($old_value_product);
foreach ($old_value_product as $old_product) {
}
if (!empty($_POST['btn_add'])) {
    $name_product = !empty($_POST['name_product']) ? "name='{$_POST['name_product']}'" : "name='{$old_product['name']}'";
    $price = !empty($_POST['price']) ? "price={$_POST['price']}" : "price={$old_product['price']}";
    $discount = !empty($_POST['discount']) ? "discount={$_POST['discount']}" : "discount={$old_product['discount']}";
    $img_product = !empty($_POST['img_product']) ? "img_product ='{$_POST['img_product']}'" : "img_product ='{$old_product['img_product']}'";
    $list_img_product = !empty($_POST['list_img_product']) ? "list_img_product='{$_POST['list_img_product']}'" : "list_img_product='{$old_product['list_img_product']}'";
    $gender = !empty($_POST['gender']) ? "gender='{$_POST['gender']}'" : "gender='{$old_product['gender']}'";
    $trademark = !empty($_POST['trademark']) ? "id_trade_mark={$_POST['trademark']}" : "id_trade_mark={$old_product['id_trade_mark']}";
    
    $catalog = !empty($_POST['catalog']) ? "catalog_id={$_POST['catalog']}" : "catalog_id={$old_product['catalog_id']}";
    $baner_trade_mark = "";
    $tb_trade_mark = sql_query("select * from tbl_trade_mark");
    if ($trademark == "id_trade_mark=1") {
        $baner_trade_mark = $tb_trade_mark[0]['banner_trade_mark'];
    } else if ($trademark == "id_trade_mark=2") {
        $baner_trade_mark = $tb_trade_mark[1]['banner_trade_mark'];
    } else if ($trademark == "id_trade_mark=3") {
        $baner_trade_mark = $tb_trade_mark[2]['banner_trade_mark'];
    } else if ($trademark == "id_trade_mark=4") {
        $baner_trade_mark = $tb_trade_mark[3]['banner_trade_mark'];
    } else if ($trademark == "id_trade_mark=5") {
        $baner_trade_mark = $tb_trade_mark[4]['banner_trade_mark'];
    }

    $sql = "UPDATE `tbl_product` SET {$name_product},{$price},{$discount},{$img_product},{$list_img_product},{$gender},baner_trade_mark='{$baner_trade_mark}'   ,{$catalog},{$trademark} Where id={$id}";
    if(mysqli_query($conn, $sql)){
        echo "Sửa thành công";
    }
    else{
        echo "Lỗi"."<br>".$sql;
    }

}





?>