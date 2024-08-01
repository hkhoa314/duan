<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Danh sách sản phẩm</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-12">
        <div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listProduct as $row) {
                    ?>
                        <tr style="text-align: center;">
                            <td style="line-height: 100px;" onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'"><?php echo $row['id'] ?></td>
                            <td style="line-height: 100px;" onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'"><?php echo $row['name'] ?></td>
                            <td style="line-height: 100px;" onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'"><?php echo $row['cate_name'] ?></td>
                            <td style="line-height: 100px;" onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'"><?php echo $row['price'] ?>đ</td>
                            <td onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'">
                                <?php
                                    if ($row['img'] != ''){
                                ?>
                                    <img src="../upload/product/<?php echo $row['img'] ?>" style="width: 100px; height: 100px;">
                                <?php
                                    }
                                ?>
                            </td>
                            <td onclick="document.location.href = 'index.php?act=chitietsanpham&&id=<?php echo $row['id'] ?>'">
                                <div style="width: 100px; line-height: 100px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                    <?php echo $row['mota'] ?>
                                </div>
                            </td>
                            <td style="line-height: 100px;">
                                <a href="index.php?act=editsp&&id=<?php echo $row['id'] ?>" style="font-size: 20px;"><i class="ti-pencil"></i></a>
                                <a href="index.php?act=delsp&&id=<?php echo $row['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
            <a href="index.php?act=addsp" class="btn btn-secondary">Thêm sản phẩm</a>
        </div>
        <!-- end -->
    </div>
</div>