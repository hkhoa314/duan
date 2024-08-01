<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Tạo tài khoản</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=addtk" method="post" class="form-validation">
                <div class="form-group">
                    <label for="tentk">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="text" name="tentk" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="user" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Mật khẩu<span class="text-danger">*</span></label>
                    <input type="text" name="pass" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="address" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="tel">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="tel" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="role">Vai trò<span class="text-danger">*</span></label>
                    <select class="custom-select" name="role" parsley-trigger="change" required>
                        <option value="0">User</option>
                        <option value="1">Nhân viên</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <div class="form-group text-right mb-0">
                    <input type="submit" value="Tạo tài khoản" class="btn btn-primary waves-effect waves-light mr-1" name="themmoi">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                    <a href="index.php?act=listtk" class="btn btn-secondary">Danh sách tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</div>