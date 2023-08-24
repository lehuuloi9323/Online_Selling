<?php
function check_login_admin($username, $password)
{
    global $user_admin;
    foreach($user_admin as $user)
    {
        if($username == $user['username'] && md5($password) == $user['password']){
            return true;
        }
    }
    return false;
}



?>