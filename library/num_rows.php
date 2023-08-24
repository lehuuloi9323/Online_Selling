<?php
function num_rows($sql){
    global $conn;
    $result = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}
?>