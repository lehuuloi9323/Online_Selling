<?php
$errol = array();
if (isset($_POST['submit'])) {
    if (empty($_POST['title'])) {
        $errol['title'] = "Không được bỏ trống tiêu đề";
    }
    else{
        $title = $_POST['title'];
    }
    if(empty($_POST['detail'])) {
        $errol['detail'] = "Không được để trống nội dung bài viết";
    }elseif(strlen($_POST['detail'])<= 200)
    {
        $errol['detail'] = 'Bài viết quá ngắn';
    }
    else{
        $content = $_POST['detail'];
    }
    if (empty($_POST['img_page'])) {
        $errol['img_page'] = "Hãy dán ảnh bài viết vào";
    }
    else{
        $img_page = $_POST['img_page'];
    }

    if(empty($errol)){
        $sql = "INSERT INTO `tbl_page`(`title`, `img_page`, `content`) VALUES ('{$title}','{$img_page}','{$content}')";
        if(mysqli_query($conn,$sql)){   
        echo "<script>
        alert('Thêm bài viết thành công !');
        </script>";
        }
        else{
            echo 'Thêm thất bại'.$sql."<br>".mysqli_error($conn);
        }
    }
};
?>

<h2 style="text-align: center;">Thêm bài viết</h2>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <form method="POST">
                <input type="text" name="title" placeholder="Nhập tiêu đề bài biết" class="form-control rounded rounded-pill" value="<?php if(!empty($_POST['title'])){
                    echo $_POST['title'];
                } ?>"><br>
                <input type="text" name="img_page" value="<?php if(!empty($_POST['img_page'])){
                    echo $_POST['img_page'];
                } ?>" placeholder="Dán link ảnh tiêu đề" class="form-control rounded rounded-pill" ><br>
                <textarea class="ckeditor" name="detail" value="<?php if(!empty($_POST['detail'])){
                    echo $_POST['detail'];
                } ?>"></textarea>
                <input type="submit" value="Thêm bài viết" name="submit" class="form-control rounded rounded-pill w-50 mt-3 text-center m-auto btn btn-success">
            </form>
        </div>
    </div>
</div>

<br>
<div class="col-md-12">
    <?php
    if (isset($_POST['detail'])) {
        echo $_POST['detail'];
    }
    ?>
</div>



<!-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error)
        });
</script> -->