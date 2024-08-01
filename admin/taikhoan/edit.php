<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật tài khoản</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=edittk&&id=<?php echo $tk[0][0]; ?>" method="post" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="tentk">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="text" name="tentk" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][1] ?>">
                </div>
                <div class="form-group">
                    <label for="user">Tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="user" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][2] ?>">
                </div>
                <div class="form-group">
                    <label for="pass">Mật khẩu<span class="text-danger">*</span></label>
                    <input type="text" name="pass" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][3] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][4] ?>">
                </div>
                
                <div class="form-group">
                    <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="address" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][5] ?>">
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <?php
                        if ($tk[0][6] != ""){
                    ?>
                    <img src="../upload/avatar/<?php echo $tk[0][6] ?>">
                    <?php
                        }
                    ?>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="tel">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="tel" parsley-trigger="change" required class="form-control" value="<?php echo $tk[0][7] ?>">
                </div>
                <div class="form-group">
                    <label for="status">Trạng thái<span class="text-danger">*</span></label>
                    <select class="custom-select" name="status" parsley-trigger="change" required>
                        <option value="0" <?php if($tk[0][8] == 0) echo "selected"; ?>>Dừng hoạt động</option>
                        <option value="1" <?php if($tk[0][8] == 1) echo "selected"; ?>>Hoạt động</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="role">Vai trò<span class="text-danger">*</span></label>
                    <select class="custom-select" name="role" parsley-trigger="change" required>
                        <option value="0" <?php if($tk[0][9] == 0) echo "selected"; ?>>User</option>
                        <option value="1" <?php if($tk[0][9] == 1) echo "selected"; ?>>Nhân viên</option>
                        <option value="2" <?php if($tk[0][9] == 2) echo "selected"; ?>>Admin</option>
                    </select>
                </div>
                <div class="form-group text-right mb-0">
                    <input type="submit" value="Cập nhật" class="btn btn-primary waves-effect waves-light mr-1" name="capnhat">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                    <a href="index.php?act=listtk" class="btn btn-secondary">Danh sách tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</div>