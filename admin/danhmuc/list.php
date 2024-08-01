<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Danh sách danh mục</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Hình ảnh</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($list_danhmuc as $danhmuc) {
                        ?>
                        <tr>
                            <td><?php echo $danhmuc['id'] ?></td>
                            <td><?php echo $danhmuc['name'] ?></td>
                            <td>
                                <?php
                                if ($danhmuc['img'] != ''){
                                ?>
                                <img src="../upload/category/<?php echo $danhmuc['img'] ?>" style="width: 100px; height: 100px;">
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <a href="index.php?act=editdm&&id=<?php echo $danhmuc['id'] ?>" style="margin-right: 20px;font-size: 20px;"><i class="ti-pencil"></i></a>
                                <a href="index.php?act=deldm&&id=<?php echo $danhmuc['id'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không?')" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <a href="index.php?act=adddm" class="btn btn-secondary">Thêm danh mục</a>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
</div>