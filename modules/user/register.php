<?php

$error = array();
if (isset($_POST['btn_register'])) {
    if (empty($_POST['name'])) {
        $error['name'] = "Không được để trống tên người dùng! Vui lòng nhập họ và tên";
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống tên đăng nhập! Vui lòng nhập";
    } elseif (num_rows("select * from tbl_user where username = '{$_POST['username']}'") > 0) {
        $error['username'] = "Tài khoản đã được tồn lại";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống mật khẩu! Vui lòng nhập";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{6,32}$/', $_POST['password'])) {
        $error['password'] = 'Tối thiếu 6-32 ký tự nằm trong các ký tự từ chữ hoa,chữ thường';
    } elseif ($_POST['password'] != $_POST['check_password']) {
        $error['password'] = "Nhập lại mật khẩu của bạn không đúng. Thử lại !";
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['address'])) {
        $error['address'] = "Không được để trống địa chỉ";
    } else {
        $address = $_POST['address'];
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = 'Vui lòng chọn giới tính của bạn!';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone_number'])) {
        $error = "Không được để trống số điện thoại";
    } elseif (strlen(strval($_POST['phone_number'])) != 10) {
        $error = 'Đây không phải là số điện thoại';
    } else {
        $phone_number = $_POST['phone_number'];
    }


    if (empty($error)) {
        $sql = "INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `gender`, `address`, `registration_date`, `email`, `phone_number`) 
        VALUES (NULL, '{$name}', '{$username}', '{$password}', '{$gender}', '{$address}', TIMESTAMP('current_timestamp(6).000000'), '{$email}', '$phone_number')";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm thành công";
        } else {
            echo "Thất bại";
        }
    }
   
};
// show_array($error);
// show_array($_POST);


?>
<div class="container">
    <div class="row">
        <h3 class="col-md-12 text-primary text-center mt-2">Đăng Ký</h3>
        <div class="col-md-12">
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label text-danger-emphasis fw-bold">Tên người dùng</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập Họ và tên" value="<?php if(!empty($_POST['name'])){
                        echo $_POST['name'];
                    } ?>">
                    <div class="col-md-12 text-danger"><?php if(!empty($error['name'])){
                        echo $error['name'];
                    } ?></div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label text-danger-emphasis fw-bold">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nhập username đăng ký" value="<?php if(!empty($_POST['username'])){
                        echo $_POST['username'];
                    } ?>">
                    <div class="col-md-12 text-danger"><?php if(!empty($error['username'])){
                        echo $error['username'];
                    } ?></div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-danger-emphasis fw-bold">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" value="<?php if(!empty($_POST['password'])){
                        echo $_POST['password'];
                    } ?>">
                    <div class="col-md-12 text-danger"><?php if(!empty($error['password'])){
                        echo $error['password'];
                    } ?></div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-danger-emphasis fw-bold">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="check_password" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label text-danger-emphasis fw-bold">Địa chỉ</label>
                    <input type="text" value="<?php if(!empty($_POST['address'])){
                        echo $_POST['address'];
                    } ?>" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ chính xác của bạn để giao hàng">
                    <div class="col-md-12 text-danger"><?php if(!empty($error['address'])){
                        echo $error['address'];
                    } ?></div>
                </div>

                <label for="gender" class="form-label text-danger-emphasis fw-bold">Giới tính</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male">
                    <label class="form-check-label">
                        Nam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female">
                    <label class="form-check-label">
                        Nữ
                    </label>
                </div>
                <div class="col-md-12 text-danger"><?php if(!empty($error['gender'])){
                        echo $error['gender'];
                    } ?></div>
                <div class="mb-3">
                    <label for="email" class="form-label text-danger-emphasis fw-bold">Email</label>
                    <input type="email" value="<?php if(!empty($_POST['email'])){
                        echo $_POST['email'];
                    } ?>" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Nhập Email của bạn">
                    <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</div>
                    <div class="col-md-12 text-danger"><?php if(!empty($error['email'])){
                        echo $error['email'];
                    } ?></div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label text-danger-emphasis fw-bold">Số điện thoại</label>
                    <input type="number" value="<?php if(!empty($_POST['phone_number'])){
                        echo $_POST['phone_number'];
                    } ?>" class="form-control" id="phone" name="phone_number" placeholder="Nhập số điện thoại của bạn">
                    <div class="col-md-12 text-danger"><?php if(!empty($error['phone_number'])){
                        echo $error['phone_number'];
                    } ?></div>
                </div>
                <button type="submit" class="btn btn-success" name="btn_register" value="register">Đăng ký</button>

            </form>

        </div>
    </div>