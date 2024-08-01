<style>
    .header-title.mb-3{
        margin: 50px 0 50px 370px ;
        font-size: 30px;
    }
</style>
<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3" style="position: relative;right: 30px;bottom: 25px;">Cập nhật tài khoản</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=suatk&&id=<?php echo $tk[0][0]; ?>" method="post" class="form-validation" enctype="multipart/form-data">
                <?php
                if (!empty($tk)) {
                    // Kiểm tra xem $tk có phần tử nào không trước khi truy cập các phần tử
                    $id = $tk[0][0];
                ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="tentk">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][1] ?>">
                </div>
                <div class="form-group">
                    <label for="user">Tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="user" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][2] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][4] ?>">
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <?php
                        if ($tk[0][5] != ""){
                    ?>
                    <img src="upload/avatar/<?php echo $tk[0][5] ?>" style="width: 80px; height: 80px; margin-bottom: 25px;">
                    <?php
                        }
                    ?>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="address" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][6] ?>">
                </div>
                <div class="form-group">
                    <label for="tel">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="tel" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][7] ?>">
                </div>
                <?php
                } else {
                    echo "Không có dữ liệu cho tài khoản này.";
                }
                ?>
                <div class="form-group text-right mb-0">
                    <input type="submit" value="Cập nhật" class="btn btn-primary waves-effect waves-light mr-1" name="capnhat">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                </div>
            </form>
        </div>
    </div>
</div>
