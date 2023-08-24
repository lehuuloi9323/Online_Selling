<?php
//Lấy một mảng trong CSDL
function sql_query($query_string) {
    global $conn;
    $result = array();
    $mysqli_result = mysqli_query($conn,$query_string);
    while ($row = mysqli_fetch_assoc($mysqli_result)) {
        $result[] = $row;
    }
    mysqli_free_result($mysqli_result);
    return $result;
}
    