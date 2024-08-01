<div class="left-side-menu">


    <div class="user-box">
        <div class="user-info">
            <p class="name"><?=$_SESSION['user']['name']?></p>
            <?php
            if ($_SESSION['user']['role'] == 1){
            ?>
            <p class="text-muted m-0">Nhân viên</p>
            <?php
            } else {
            ?>
            <p class="text-muted m-0">Administrator</p>
            <?php
            }
            ?>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Điều hướng</li>

            <li>
                <a href="index.php" class="test">
                    <i class="ti-home"></i>
                    <span> Trang chủ </span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listsp">
                    <i class="ti-package"></i>
                    <span> Sản phẩm </span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listdm">
                    <i class="ti-bookmark"></i>
                    <span> Danh mục </span>
                </a>
            </li>
            <!-- <li>
                <a href="index.php?act=listtk">
                    <i class="ti-user"></i>
                    <span> Người dùng </span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listbill">
                    <i class="ti-shopping-cart"></i>
                    <span> Đơn hàng </span>
                </a>
            </li>
            <li>
                <a href="index.php?act=thongke">
                    <i class="ti-pie-chart"></i>
                    <span> Thống kê </span>
                </a>
            </li> -->
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>


</div>