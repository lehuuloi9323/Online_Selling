<?php
// echo $_SERVER['REQUEST_METHOD'];
$list_user_login = sql_query("select * from tbl_user");
// show_array($list_user_login);

$error = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username'])) {
        $error['username'] = 'Vui lòng nhập tài khoản';
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'Vui lòng nhập mật khẩu';
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {
        if (check_login_user($username, $password)) {
            $_SESSION['is_login_index'] = true;
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $username;
            redirect("?mod=cart&act=show");
        } else {
            $error['account'] = 'account không tồn tại';
        }
    }
};
// show_array($error);
// show_array($_SESSION);


?>
<div class="container min_height_600px">
    <div class="row">
        <h3 class="col-md-12 text-primary text-center mt-2">Đăng nhập</h3>
        <div class="col-md-12">
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nhập username" value="<?php
                     if(!empty($_POST['username'])){
                        echo $_POST['username'];
                     }
                    ?>">
                     <div class="col-md-12 text-danger">
                        <?php if(!empty($error['username'])){
                        echo $error['username'];
                     } ?>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" value="<?php
                     if(!empty($_POST['password'])){
                        echo $_POST['password'];
                     }
                      ?>">
                     <div class="col-md-12 text-danger"><?php if(!empty($error['password'])){
                        echo $error['password'];
                     } ?>
                     <?php
                     if(!empty($error['account'])){
                    echo $error['account']; 
                    }
                     ?>
                     </div>
                </div>


                <button type="submit" class="btn btn-primary" name="btn_login" value="Đăng Nhập">Đăng nhập</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='?mod=user&act=register';">Đăng Ký</button>
            </form>
        </div>
    </div>
</div>