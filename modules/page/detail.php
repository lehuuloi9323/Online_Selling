<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `tbl_page` where `id` = '$id'";
$list_page = array();
$list_page = sql_query($sql);
foreach ($list_page as $page){
    if($page['id'] == $id){

    }
}
?>

<div class="container min_height_600px">
    <div class="row">            
        <h4 class="col-md-12 mt-4">
            <?php echo $page['title']?>
        </h4>
        <div class="col-md-12">
            <hr class="border border-danger border-2 opacity-50">
        </div>
        <div class="col-md-12"><i class="fas fa-clock"></i>&nbsp<?php echo $page['date_time'] ?></div>
        <div class="col-md-12 mt-4"><?php echo $page['content']?></div>
    </div>
</div>
