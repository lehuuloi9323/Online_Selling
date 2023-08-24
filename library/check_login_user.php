<?php
function check_login_user($username, $password)
{
    global $list_user_login;
    foreach($list_user_login as $user)
    {
        if($username == $user['username'] && $password == $user['password']){
            return true;
        }
    }
    return false;
}
