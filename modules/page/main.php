<?php
$list_page = sql_query("select * from tbl_page where not id in (1,2) order by id desc");


?>
<div class="container mt-4">
    <div class="row">
        <h2 class="col-md-12 text-primary fw-bold">Tin mới hôm nay</h2>
    </div>
</div>
<div class="container border border-dark-subtle">
    <div class="row">
        <div class="col-md-12 mt-2">
            <ul id="main-page">
                <?php
                foreach ($list_page as $page) {
                ?>
                    <li class="mt-3" onclick="window.location.href='?mod=page&act=detail&id=<?php echo $page['id'];?>'">
                        <div class="col-md-2" style="display: inline-block;">
                            <img src="<?php echo $page['img_page']; ?>" alt="">
                        </div>
                        <div class="col-md-8 mx-3" style="display: inline-block;">
                            <a href="#"><?php echo $page['title']; ?></a><br>
                            <a href=""><?php echo substr($page['title'], 0, 500);?>.................................</a>

                        </div>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</div>