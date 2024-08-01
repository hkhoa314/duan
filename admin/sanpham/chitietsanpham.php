<!-- start  -->
<div class="row">
    <div class="col-md-12">
        <div class="mt-3">
            <div class="clearfix">
                <div class="float-left mb-2">
                    <img src="../upload/product/<?php echo $product['img'] ?>">
                </div>
                <div class="float-right" style="width: 300px;">
                    <h3 class="m-0 d-print-none">Thông tin sản phẩm</h3>
                    <p style="text-align: left; margin-top: 10px;"><strong>Tên sản phẩm: </strong> <?php echo $product['name'] ?></p>
                    <p style="text-align: left;"><strong>ID sản phẩm: </strong> #<?php echo $_GET['id'] ?></p>
                    <p style="text-align: left;"><strong>Giá sản phẩm: </strong> <?php echo $product['price'] ?> VNĐ</p>
                    <?php
                    if ($product['mota'] != '') {
                    ?>
                        <p style="text-align: left; white-space: pre-wrap; word-wrap: break-word"><b>Mô tả sản phẩm:</b> </br><?php echo $product['mota'] ?></p>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Bình luận về sản phẩm</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-centered mt-4">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nội dung</th>
                                    <th>Người bình luận</th>
                                    <th>Ngày bình luận</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($binhluan as $bl){
                                ?>
                                <tr>
                                    <td><?php echo $bl['id'] ?></td>
                                    <td><?php echo $bl['noidung'] ?></td>
                                    <td><?php echo $bl['name'] ?></td>
                                    <td><?php echo $bl['ngaybinhluan'] ?></td>
                                    <td class="text-right">
                                        <a href="index.php?act=editbl"><i class="ti-pencil"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->