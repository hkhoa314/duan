<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật sản phẩm</h4>

        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=editsp&&id=<?php echo $product['id'] ?>" method="POST" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="tensp">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="tensp" parsley-trigger="change" required class="form-control" value="<?php echo $product['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="iddm">Danh mục<span class="text-danger">*</span></label>
                    <select class="custom-select" name="iddm" parsley-trigger="change" required>
                        <?php
                            foreach ($listdanhmuc as $dm){
                                if($product['iddm'] == $dm['id']) $s = "selected"; else $s = "";
                        ?>
                        <option value="<?php echo $dm['id'] ?>" <?php echo $s ?>><?php echo $dm['name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="giasp">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="giasp" parsley-trigger="change" required class="form-control" value="<?php echo $product['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="hinh">Hình ảnh</label>
                    <?php
                        if ($product['img'] != ''){
                    ?>
                    <img src="../upload/product/<?php echo $product['img'] ?>" style="width: 100px; height: 100px; position: relative; left: 40px; top: -10px;">
                    <?php
                        }
                    ?>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <textarea class="form-control" rows="5" name="mota"><?php echo $product['mota'] ?></textarea>
                </div>
                <div class="form-group text-right mb-0">
                    <input type="submit" value="Cập nhật" class="btn btn-primary waves-effect waves-light mr-1" name="capnhat">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                    <a href="index.php?act=listsp" class="btn btn-secondary">Danh sách sản phẩm</a>
                </div>
            </form>
        </div>
    </div>
</div>