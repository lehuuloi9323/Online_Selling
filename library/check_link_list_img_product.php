<?php
function check_link_list_img_product($list_img_product) {
    if(substr($list_img_product,0,1)=="h"){
        $string = $list_img_product;
        // Tìm vị trí của ký tự bắt đầu trong chuỗi
        $starting_char = "h";
        // Lấy chuỗi con bắt đầu từ ký tự bắt đầu
        $starting_pos = strpos($string, $starting_char);
        $sub_string = substr($string, $starting_pos);
        
    }
    else{
        $string = $list_img_product;
        // Tìm vị trí của ký tự bắt đầu trong chuỗi
        $starting_char = "p";
        // Lấy chuỗi con bắt đầu từ ký tự bắt đầu
        $starting_pos = strpos($string, $starting_char);
        $sub_string = substr($string, $starting_pos);
    }
        //Tách chuỗi con thành một mảng bằng cách sử dụng dấu phân cách bằng dấu phẩy
        $list_img = explode(",", $sub_string);
        return $list_img;
}

?>