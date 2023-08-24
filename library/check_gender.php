<?php
function check_gender($gender){
    if($gender == 'Male'){
        $gender =  'Nam';
    }
    elseif($gender == 'Female'){
        $gender = 'Nữ';
    }
    else{
        $gender = 'Nam và Nữ';
    }
    return $gender;
}

?>