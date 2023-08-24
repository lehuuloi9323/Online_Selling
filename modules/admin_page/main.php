<?php
$list_page = sql_query("select * from tbl_page order by id desc");
// show_array($list_page);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tựa đề</th>
                        <th scope="col">ảnh bài viết</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_page as $page) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $page['id'];?></th>
                            <td><?php echo $page['title'];?></td>
                            <td><img src="<?php echo $page['img_page'];?>" alt="" style="width: 105px; height: 105px;"></td>
                            <td><a class="fas fa-tools" href="?mod=admin_page&act=update&id=<?php echo $page['id'];?>"></a>&nbsp&nbsp<a class="fa fa-trash" href="?mod=admin_page&act=delete&id=<?php echo $page['id'];?>"></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>