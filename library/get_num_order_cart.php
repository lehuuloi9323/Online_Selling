<?php
function get_num_buy_info()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
    return false;
}
