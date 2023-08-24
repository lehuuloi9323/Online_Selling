<?php
unset($_SESSION['cart']);
update_info_cart();
redirect("?mod=cart&act=show");
?>