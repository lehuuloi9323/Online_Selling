<?php
$id = (int) $_GET['id'];

$sql = "delete from tbl_page where id ={$id}";
if(mysqli_query($conn, $sql)){
    echo "Xóa thành công";
}
else{
    echo "Xóa thất bại";
}
?>