<?php

$user = sql_query("select * from tbl_user where username = '{$_SESSION['username']}'");
// show_array($user);

if (!empty($_POST['button_buy'])) {
    $list_buy = get_list_buy_cart();
    $list_info = get_num_buy_info();
    show_array($list_buy);
    show_array($list_info);
    $sql_order = "insert into tbl_order(id_user,sum_price,name,email,phone_number,address) values({$user[0]['id']},{$list_info['total']},
        '{$user[0]['name']}','{$user[0]['email']}',{$user[0]['phone_number']},'{$user[0]['address']}')";
    mysqli_query($conn, $sql_order);
    $order = sql_query("SELECT * FROM tbl_order WHERE id_order = (SELECT MAX(id_order) FROM tbl_order)");
    // show_array($order);
    echo $order[0]['id_order'] . "<br>";
    $sql_order_details = "INSERT INTO `tbl_order_details` (`id_order_detail`, `id_product`, `id_oder`, `quaty`, `sum_order`) values(NULL," . "'";
    foreach ($list_buy as $buy) {
        $sql_order_details .= $buy['id'] . " ";
        echo "'" . $buy['id'] . "'" . " ";
    }
    $sql_order_details .= "'" . ",'{$order[0]['id_order']}','{$list_info['num_order']}','{$list_info['total']}')";
    mysqli_query($conn, $sql_order_details);
} else {
    redirect("?mod=cart&act=show");
}


$order_detail = sql_query("select * from tbl_order_details where id_order_detail = (select max(id_order_detail) from tbl_order_details)");

?>

<?php

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/PHPMailer/src/Exception.php';
require 'library/PHPMailer/src/PHPMailer.php';
require 'library/PHPMailer/src/SMTP.php';

// Create a new instance of PHPMailer
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
// SMTP settings for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = 'lehuuloi9323@gmail.com';
$mail->Password = 'fpzacvuafwnrzbbo';

// Set the sender and recipient email addresses
$mail->setFrom('lehuuloi9323@gmail.com', 'Hữu Lợi');
$mail->addAddress("{$user[0]['email']}", "{$user[0]['name']}");

// Set the subject and body of the email
$mail->isHTML(true); 
$mail->Subject = 'Thông tin đơn hàng của anh/chị: ' . " " . "{$user[0]['name']}";
$mail->Body ='Tổng hóa đơn của anh chị là: ' . currency_format($list_info['total']);

// Send the email
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
?>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-success fw-bold">Thông tin hóa đơn đang được xử lý và đã gửi thông tin chi tiết qua Email cá nhân của quý khách!</div>
            <div class="col-md-12 text-success fw-bold">Xin Cảm Ơn</div>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary text-center mt-2" style="width: 50%;" onclick="window.location.href='?mod=home&act=main';">Về Trang Chủ</button>
            </div>
        </div>
    </div>
<?php
unset($_SESSION['cart']);
}

?>

