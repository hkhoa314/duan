<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Thống Kê sản phẩm</h4>
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
                        <th>Mã Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số Lượng Đã Bán</th>
                        <th>Số lượt xem</th>
                        <th>Kho</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                    ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><img src="../upload/product/<?= $img ?>" alt="" style="width: 80px;"></td>
                            <td><?= $name ?></td>
                            <td><?= $daban ?></td>
                            <td><?= $view ?></td>
                            <td><?= $kho ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <button style="border: 1px solid ; border-radius: 3px;"><a href="index.php?act=bieudo">Biểu Đồ Thống Kê</a></button>
        </div>
        <!-- end -->
    </div>
</div>