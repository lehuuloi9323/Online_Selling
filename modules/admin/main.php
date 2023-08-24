<table class="table table-hover">
                        <thead class="bg-dark text-warning">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">% giảm</th>
                                <th scope="col">Ảnh đại diện sản phẩm</th>
                                <th scope="col">Danh sách ảnh sản phẩm</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Loại sản phẩm</th>
                                <th scope="col">Thương Hiệu</th>
                                <th scope="col">Sửa / Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list_product = sql_query("SELECT * FROM tbl_product order by id desc");
                            foreach ($list_product as $product) {
                            ?>

                                <tr>
                                    <th scope="row"><?php echo $product['id']; ?></th>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $product['discount']; ?></td>
                                    <td><img src="<?php echo $product['img_product']; ?>" width="80px" height="80px" /></td>
                                    <td><?php
                                        for ($i = 0; $i < count(check_link_list_img_product($product['list_img_product'])); $i++) {
                                        ?>
                                            <img src="<?php echo check_link_list_img_product($product['list_img_product'])[$i]; ?>" width="80px" height="80px" style="display: inline-block;" />
                                        <?php
                                        }

                                        ?>
                                    </td>
                                    <td><?php echo $product['gender']; ?></td>
                                    <td><?php echo $product['creation_time']; ?></td>
                                    <td><?php echo $product['view']; ?></td>
                                    <td><?php echo $product['catalog_id'] ?></td>
                                    <td><?php echo $product['id_trade_mark']; ?></td>
                                    <td><a class="fas fa-tools" href="?mod=admin&act=update&id=<?php echo $product['id'];?>?>"></a>&nbsp&nbsp<a class="fa fa-trash" href="?mod=admin&act=delete&id=<?php echo $product['id'];?>"></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>q