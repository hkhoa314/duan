<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Danh sách người dùng</h4>
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
                            <th>Tên người dùng</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($listtk as $tk) {
                        ?>
                        <tr>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['id'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['name'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['user'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['pass'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['email'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'">
                                <?php
                                if ($tk['avatar'] != ''){
                                ?>
                                <img class="rounded-circle" src="../upload/avatar/<?php echo $tk['avatar'] ?>" style="width: 48px; height: 48px;">
                                <?php
                                }
                                ?>
                            </td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['address'] ?></td>
                            <td onclick="document.location.href = 'index.php?act=chitiettk&&id=<?php echo $tk['id'] ?>'"><?php echo $tk['tel'] ?></td>
                            <?php
                                if($tk['active'] == 0) {
                                    echo '<td><div class="btn btn-dark" style="cursor: default;">Tạm dừng</div></td>';
                                } else echo'<td><div class="btn btn-success" style="cursor: default;">Hoạt động</div></td>';
                            ?>
                            <?php
                                if($tk['role'] == 0) {
                                    echo '<td>User</td>';
                                } else if($tk['role'] == 1) {
                                    echo '<td>Nhân viên</td>';
                                } else echo '<td>Admin</td>';
                            ?>
                            <td>
                                <a href="index.php?act=edittk&&id=<?php echo $tk['id'] ?>" style="font-size: 20px;"><i class="ti-pencil"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <a href="index.php?act=addtk" class="btn btn-secondary">Thêm tài khoản</a>
            </div>
            <!-- end -->
        </div>
    </div>
</div>