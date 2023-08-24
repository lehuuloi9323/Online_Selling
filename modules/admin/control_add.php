<form class="mt-2" method="post" action="?mod=admin&act=add" enctype="multipart/form-data">
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
        <input class="form-control" type="file" id="formFile" name="img_product">
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
            <option selected>Chọn thương hiệu</option>
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
            <option selected>Danh mục</option>
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