<?php
$id = (int) $_GET['id'];

$sql = "delete from tbl_product where id ={$id}";
if(mysqli_query($conn, $sql)){
    echo "Xóa thành công";
}
else{
    echo "Xóa thất bại";
}
?>