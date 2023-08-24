<?php
$id = (int)$_GET['id'];
echo $id;
$list_page = sql_query("select * from tbl_page where id = {$id}");

foreach ($list_page as $page) {
};
if (!empty($_POST['submit'])) {
    $title = !empty($_POST['title']) ? "title='{$_POST['title']}'" : "title='{$page['title']}'";
    $img_page = !empty($_POST['img_page']) ? "img_page='{$_POST['img_page']}'" : "img_page='{$page['img_page']}'";
    $content = !empty($_POST['detail']) ? "content='{$_POST['detail']}'" : "content='{$page['content']}'";
    $sql = "UPDATE `tbl_page` SET {$title}, {$img_page},{$content} WHERE id = {$id}";
    if (mysqli_query($conn, $sql)) {
        echo "Sửa thành công";
    } else {
        echo "Lỗi" . "<br>" . $sql;
    }
}
?>
<h2 style="text-align: center;">Sửa bài viết</h2>
<h5 class="text-center text-danger">Lưu ý: chỉ nhập vào những địa chỉ cần sửa. Nếu không cần sửa thì bỏ trống</h5>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <form method="POST">
                <input type="text" name="title" placeholder="Nhập tiêu đề bài biết" class="form-control rounded rounded-pill" value="<?php if (!empty($_POST['title'])) {
                                                                                                                                            echo $_POST['title'];
                                                                                                                                        } ?>"><br>
                <input type="text" name="img_page" value="<?php if (!empty($_POST['img_page'])) {
                                                                echo $_POST['img_page'];
                                                            } ?>" placeholder="Dán link ảnh tiêu đề" class="form-control rounded rounded-pill"><br>
                <textarea class="ckeditor" name="detail" value="<?php if (!empty($_POST['detail'])) {
                                                                    echo $_POST['detail'];
                                                                } ?>"></textarea>
                <input type="submit" value="Thêm bài viết" name="submit" class="form-control rounded rounded-pill w-50 mt-3 text-center m-auto btn btn-success">
            </form>
        </div>
    </div>
</div>