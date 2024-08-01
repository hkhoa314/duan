<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from stroyka.html.themeforest.scompiler.ru/themes/default-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 09:43:40 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="admin/css/images/favicon.ico"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="css/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="css/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/css/style.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.min.css"><!-- font - stroyka -->
    <link rel="stylesheet" href="css/fonts/stroyka/stroyka.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-8');
    </script>
    <?php
    $soluong = 0;
    $cart_total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $cart) {
            $soluong += $cart[1];
        };
    };
    ?>
</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <div class="site-header__middle container">
                    <div class="site-header__logo"><a href="index.php">
                            <!-- logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="196px" height="26px">
                                <path d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z">
                                </path>
                            </svg>
                            <!-- logo / end -->
                        </a></div>
                    <div class="site-header__search">
                        <div class="search search--location--header">
                            <div class="search__body">
                                <form class="search__form" action="index.php?act=allsanpham" method="POST">
                                    <input class="search__input" name="kyw" placeholder="Tìm kiếm hơn 1000 sản phẩm" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" name="timkiem" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="css/images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>

                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Hỗ trợ khách hàng</div>
                        <div class="site-header__phone-number">0123456789JQKA</div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky>
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="index.php">
                                                <div class="nav-links__item-body">Trang chủ</div>
                                            </a>
                                        </li>
                                        <ul class="nav-links__list">
                                            <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="#">
                                                    <div class="nav-links__item-body">Danh mục <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                            </use>
                                                        </svg></div>
                                                </a>
                                                <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                    <!-- .menu -->
                                                    <div class="menu menu--layout--classic">
                                                        <div class="menu__submenus-container"></div>
                                                        <ul class="menu__list">
                                                            <?php
                                                            foreach ($listdm as $dm) {
                                                            ?>
                                                                <li class="menu__item">
                                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="index.php?act=danhmuc&&id=<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></a>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </ul>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="index.php?act=allsanpham">
                                                <div class="nav-links__item-body">Sản phẩm</div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="index.php?act=gioithieu">
                                                <div class="nav-links__item-body">Giới thiệu</div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="index.php?act=lienhe">
                                                <div class="nav-links__item-body">Liên hệ</div>
                                            </a>
                                        </li>
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                        ?>
                                            <li style="line-height: 54px; text-align: right; width: 373px;">
                                                <marquee width="200px">Xin chào! <?php echo $_SESSION['user']['name'] ?></marquee>
                                            <?php
                                        }
                                            ?>

                                            </li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                    ?>
                                        <div class="indicator indicator--trigger--click" id="dropdowncart">
                                            <div class="indicator__button">
                                                <span class="indicator__area">
                                                    <svg width="20px" height="20px">
                                                        <use xlink:href="css/images/sprite.svg#cart-20"></use>
                                                    </svg>
                                                    <?php
                                                    if ($soluong > 0) {
                                                    ?>
                                                        <span class="indicator__value"><?= $soluong ?></span>
                                                    <?php
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="indicator__dropdown">
                                                <!-- .dropcart -->
                                                <div class="dropcart dropcart--style--dropdown">
                                                    <div class="dropcart__body">
                                                        <div class="dropcart__products-list">
                                                            <?php
                                                            foreach ($_SESSION['cart'] as $cart) {
                                                                $sp = listone_sanpham($cart[0]);
                                                            ?>
                                                                <div class="dropcart__product">
                                                                    <div class="product-image dropcart__product-image">
                                                                        <a href="index.php?act=chitietsanpham&idsp=<?php echo $sp['id'] ?>" class="product-image__body">
                                                                            <img class="product-image__img" src="upload/product/<?php echo $sp['img'] ?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="dropcart__product-info">
                                                                        <div class="dropcart__product-name"><a href="index.php?act=chitietsanpham&idsp=<?php echo $sp['id'] ?>"><?php echo $sp['name'] ?></a></div>
                                                                        <div class="dropcart__product-meta"><span class="dropcart__product-quantity"><?php echo $cart[1] ?></span> ×
                                                                            <span class="dropcart__product-price"><?php echo $sp['price'] ?> VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon" onclick="addToCart(<?php echo $sp['id'] ?>, 'del')"><svg width="10px" height="10px">
                                                                            <use xlink:href="css/images/sprite.svg#cross-10">
                                                                            </use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            <?php
                                                                $cart_total += $sp['price'] * $cart[1];
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="dropcart__totals">
                                                            <table>
                                                                <tr>
                                                                    <th>Tổng phụ</th>
                                                                    <td><?= $cart_total ?> VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Phí ship</th>
                                                                    <td>25000 VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tổng cộng</th>
                                                                    <?php
                                                                    if ($cart_total > 0) {
                                                                    ?>
                                                                        <td><?= $cart_total + 25000 ?> VND</td>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <td><?= $cart_total ?> VND</td>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="dropcart__buttons">
                                                            <a class="btn btn-secondary" href="index.php?act=cart">Xem giỏ hàng</a>
                                                            <?php
                                                            if (count($_SESSION['cart']) == 0) {
                                                            ?>
                                                                <button class="btn btn-second" disabled>Đơn hàng</button>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <a class="btn btn-primary" href="index.php?act=checkout">Đơn hàng</a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div><!-- .dropcart / end -->
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="indicator indicator--trigger--click">
                                        <div class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="css/images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="indicator__dropdown">
                                            <div class="account-menu">
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                ?>
                                                    <div class="account-menu__divider"></div>
                                                    <a href="index.php?act=thongtintk" class="account-menu__user">
                                                        <?php
                                                        if ($_SESSION['user']['avatar'] != '') {
                                                        ?>
                                                            <div class="account-menu__user-avatar">
                                                                <img src="upload/avatar/<?php echo $_SESSION['user']['avatar'] ?>">
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="account-menu__user-info">
                                                            <div class="account-menu__user-name">
                                                                <?php echo $_SESSION['user']['name'] ?>
                                                            </div>
                                                            <div class="account-menu__user-email">
                                                                <?php echo $_SESSION['user']['email'] ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="account-menu__divider"></div>
                                                    <ul class="account-menu__links">
                                                        <?php
                                                        if ($_SESSION['user']['role'] > 0) {
                                                        ?>
                                                            <li><a href="./admin/">Vào trang quản lý</a></li>
                                                        <?php
                                                        }
                                                        ?>
                                                        <li><a href="index.php?act=lichsumua">Lịch sử đặt hàng</a></li>
                                                        <li><a href="index.php?act=thongtintk">Cập nhật thông tin</a></li>
                                                        <li><a href="index.php?act=quenmk">Đổi mật khẩu</a></li>
                                                    </ul>
                                                    <div class="account-menu__divider"></div>
                                                    <ul class="account-menu__links">
                                                        <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                                    </ul>
                                                <?php
                                                } else {
                                                ?>
                                                    <form class="account-menu__form" action="index.php?act=dangnhap" method="POST">
                                                        <div class="account-menu__form-title">Đăng nhập</div>
                                                        <div class="form-group">
                                                            <label for="header-signin-email" class="sr-only">Tài khoản</label>
                                                            <input id="header-signin-email" type="text" name="user" required class="form-control form-control-sm" placeholder="Nhập tài khoản">
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="index.php?act=matkhau"><label for="header-signin-password" class="sr-only">Mật khẩu</label></a>

                                                            <div class="account-menu__form-forgot">
                                                                <input id="header-signin-password" type="password" name="pass" required class="form-control form-control-sm" placeholder="Mật khẩu">
                                                                <a href="index.php?act=quenmk" class="account-menu__form-forgot-link">
                                                                    Quên mật khẩu?
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group account-menu__form-button">
                                                            <input type="submit" class="btn btn-primary btn-sm" name="dangnhap" value="Đăng nhập">
                                                        </div>
                                                        <div class="account-menu__form-link">
                                                            <a href="index.php?act=dangky">Tạo tài khoản mới</a>
                                                        </div>
                                                    </form>
                                                <?php
                                                };
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->
        <script>
            window.addEventListener('click', function(e) {
                if (!document.getElementById('dropdowncart').contains(e.target)) {
                    document.getElementById('dropdowncart').className = 'indicator indicator--trigger--click';
                } else document.getElementById('dropdowncart').className = 'indicator indicator--trigger--click indicator--display indicator--open';
            });
        </script>