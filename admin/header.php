<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="css/images/favicon.ico">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- third party css -->
    <link href="css/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- Plugin css -->
    <link href="css/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="css/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="css/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="css/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <link href="css/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Summernote css -->
    <link href="css/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="css/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .pos {
            position: relative;
            top: 25px;
            left: 20px;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="css/images/flags/vn.png" alt="user-image" class="mr-2" height="12"> <span
                            class="align-middle">Tiếng Việt <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="css/images/flags/us.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="css/images/flags/spain.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="css/images/flags/italy.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="css/images/flags/french.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="align-middle">French</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="css/images/flags/russia.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="align-middle">Russian</span>
                        </a>
                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            <?=$_SESSION['user']['name']?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Xin chào!</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Thông tin tài khoản</span>
                        </a>

                        <!-- item-->
                        <a href="http://localhost/Duan1/index.php" class="dropdown-item notify-item">
                            <i class="mdi mdi-home-outline"></i>
                            <span>Về trang sản phẩm</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="http://localhost/Duan1/index.php?act=dangxuat" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Đăng xuất</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="css/images/logo-dark.png" alt="" height="26">
                    </span>
                    <span class="logo-sm">
                        <img src="css/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="css/images/logo-light.png" alt="" height="26">
                    </span>
                    <span class="logo-sm">
                        <img src="css/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
                <li>
                    <div class="custom-control custom-switch mb-3 pos">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                            onclick="switchDarkMode()">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "leftbar.php" ?>
        <div class="content-page">
            <div class="content">
                <!-- Start container-fluid -->
                <div class="container-fluid">