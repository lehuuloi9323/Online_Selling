<?php

$name_product = $_POST['name_product'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$img_product = $_POST['img_product'];
if(substr($_POST['img_product'], 0, 4) != "http"){
    $img_product = "public/img/Product/"."{$_FILES['img_product']['name']}";
}else{
    $img_product = $_POST['img_product']; 
}

$list_img_product = $_POST['list_img_product'];
$gender = $_POST['gender'];
$trademark = $_POST['trademark'];
$catalog = $_POST['catalog'];
$baner_trade_mark = "";
$tb_trade_mark = sql_query("select * from tbl_trade_mark");

if($trademark == 1){
    $baner_trade_mark = $tb_trade_mark[0]['banner_trade_mark'];
    }
    else if($trademark == 2){
        $baner_trade_mark = $tb_trade_mark[1]['banner_trade_mark'];
    }
    else if($trademark == 3){
        $baner_trade_mark = $tb_trade_mark[2]['banner_trade_mark'];
    }
    else if($trademark == 4){
        $baner_trade_mark = $tb_trade_mark[3]['banner_trade_mark'];
    }
    else if($trademark == 5){
        $baner_trade_mark = $tb_trade_mark[4]['banner_trade_mark'];
    }
    
if(isset($_POST['btn_add'])){
    
    
    $sql = "INSERT INTO tbl_product (name, price, discount, img_product, list_img_product,gender,view,baner_trade_mark,catalog_id,id_trade_mark) 
VALUES ('{$name_product}',{$price},{$discount},'{$img_product}','{$list_img_product}','{$gender}',1,'{$baner_trade_mark}',{$catalog},{$trademark})";
    if(mysqli_query($conn, $sql)){
        echo 'Đã thêm thành công';
    }else{
        echo 'Thêm thất bại'.$sql."<br>".mysqli_error($conn);
    }
}
?>