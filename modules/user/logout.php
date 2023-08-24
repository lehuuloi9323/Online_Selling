<?php
unset($_SESSION['is_login_index']);
unset($_SESSION['username']);
unset($_SESSION['password']);
redirect("index.php");
?>