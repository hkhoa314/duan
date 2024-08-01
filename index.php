<?php
session_start();
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/donhang.php";

$newsp = list_sanphamnew();
$allsp = listall_sanpham();
$sphot = loadall_sanpham_hot();
$listdm = listall_danhmuc();

include "view/header.php";

if (isset($_GET["act"]) && $_GET["act"] !== "") {
    switch ($_GET["act"]) {
        case "formdangnhap":
            include "view/dangnhap.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_login = login($user, $pass);
                if (is_array($check_login)) {
                    $_SESSION['cart'] = [];
                    $_SESSION['user'] = $check_login;
?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "Đăng nhập thành công!",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                <?php
                                if ($_SESSION['user']['role'] == 2) {
                                ?>
                                    window.location.href = "admin/index.php";
                                <?php
                                } else {
                                ?>
                                    window.location.href = "index.php";
                                <?php
                                }
                                ?>
                            }
                        });
                    </script>";
                    <?php
                } else {
                    $thongbao = $check_login;
                    if (strlen($check_login) < 50) {
                    ?>
                        <script type='text/javascript'>
                            Swal.fire({
                                title: "<?= $thongbao ?>",
                                icon: "error",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "index.php?act=formdangnhap";
                                }
                            });
                        </script>;
                    <?php
                    } else { ?>
                        <script type='text/javascript'>
                            Swal.fire({
                                title: "<?= $thongbao ?>",
                                icon: "error",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "index.php?act=dangky";
                                }
                            });
                        </script>;
                    <?php
                    };
                }
            };
            break;
        case "quenmk":
            if (isset($_POST['khoiphuc'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $thongbao = "Mật khẩu của bạn là: " . repass($user, $email)['pass'];
                if (!is_array(repass($user, $email))) {
                    $thongbao = "Tài khoản không tồn tại!";
                    ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "<?= $thongbao ?>",
                            icon: "error",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "index.php";
                            }
                        });
                    </script>;
                <?php
                } else {
                ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "<?= $thongbao ?>",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "index.php?act=formdangnhap";
                            }
                        });
                    </script>;
            <?php
                }
            }
            include "view/quenmk.php";
            break;
        case "dangxuat":
            session_unset();
            ?>
            <script type='text/javascript'>
                Swal.fire({
                    title: "Đăng xuất thành công!",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                    }
                });
            </script>;
            <?php
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if (checkuser($user) != '') {
            ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "Tài khoản đã tồn tại!",
                            icon: "error",
                        });
                    </script>;
                <?php
                } else if (checkemail($email) != '') {
                ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "Email đã được gắn vào tài khoản khác!",
                            icon: "error",
                        });
                    </script>;
                <?php
                } else if ($pass != $repass) {
                ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "Mật khẩu không trùng khớp!",
                            icon: "error",
                        });
                    </script>;
                <?php
                } else {
                    dangky($user, $email, $pass);
                ?>
                    <script type='text/javascript'>
                        Swal.fire({
                            title: "Đăng ký thành công! Vui lòng đăng nhập lại!",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "index.php?act=formdangnhap";
                            };
                        });
                    </script>;
                <?php
                };
            }
            include "view/dangky.php";
            break;
        case "sanpham":
            $dssp = list_sanphamnew();
            break;
        case "danhmuc":
            $dm = listone_danhmuc($_GET['id']);
            $list = listsptheodm($_GET['id']);
            include "view/danhmuc.php";
            break;
        case "chitietsanpham":
            pdo_execute("UPDATE sanpham SET view = view + 1 WHERE id = " . $_GET['idsp']);
            $ctsp = listone_sanpham($_GET['idsp']);
            $list = listsptheodm($ctsp['iddm']);
            include "view/chitietsanpham.php";
            break;
        case "allsanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $list = search_sanpham_name($kyw, $iddm);
            $tendm = listall_sanpham($kyw, $iddm);
            include 'view/allsanpham.php';
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "thongtintk":
            $listdh = listone_donhang_user($_SESSION['user']['id']);
            if (isset($_SESSION['user']['id'])) {
                $user_id = $_SESSION['user']['id'];
                $user_info = listone_taikhoan($user_id);
                include "view/thongtintk.php";
            }
            break;
        case "suatk":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tentk = isset($_POST["name"]) ? $_POST["name"] : '';
                $user = isset($_POST["user"]) ? $_POST["user"] : '';
                // $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "upload/avatar/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                $email = isset($_POST["email"]) ? $_POST["email"] : '';
                $address = isset($_POST["address"]) ? $_POST["address"] : '';
                $tel = isset($_POST["tel"]) ? $_POST["tel"] : '';
                $status = isset($_POST["status"]) ? $_POST["status"] : '';
                $role = isset($_POST["role"]) ? $_POST["role"] : '';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                } else {
                    echo "ko co id";

                    exit;
                }
                update_taikhoans($id, $tentk, $user, $email, $address, $hinh, $tel, $status, $role);
                ?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Cập nhật thành công",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=thongtintk'
                        }
                    });
                </script>;


            <?php
            }

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tk = listone_taikhoan($_GET['id']);
                include "view/suatk.php";
            } else {

                echo "ko co id";
            }
            break;
        case "matkhau":
            if (!isset($_SESSION['user']['user'])) {
                header("Location: login.php");
                exit();
            }
            $errors = array();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['doimatkhau'])) {
                    $tentk = $_POST['tendn'];
                    $oldPassword = $_POST['old_password'];
                    $newPassword = $_POST['new_password'];
                    $confirmPassword = $_POST['confirm_password'];
                    $requiredFields = ['tendn', 'old_password', 'new_password', 'confirm_password'];
                    $sql = "SELECT * FROM taikhoan WHERE name='" . $tentk . "' AND pass='" . $oldPassword . "' LIMIT 1 ";
                    $row = pdo_query_one($sql, $tentk, $oldPassword);

                    if ($row) {
                        $sql_update = "UPDATE taikhoan SET name=?, pass=? WHERE name=?";
                        pdo_execute($sql_update, $tentk, $newPassword, $tentk);
                        if (empty($errors)) {
                            echo '<script>
                                        Swal.fire({
                                            icon: "success",
                                            title: "Cập nhật thành công",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        </script>';
                        }
                    } else {
                        echo "Tài khoản và mật khẩu cũ không đúng";
                    }


                    foreach ($requiredFields as $field) {
                        if (empty($_POST[$field])) {
                            $errors[$field] = 'Vui lòng nhập thông tin.';
                        }
                    }
                    if (strlen($newPassword) < 6) {
                        $errors['new_password'] = 'Mật khẩu mới phải chứa ít nhất 6 ký tự.';
                    }


                    if ($newPassword != $confirmPassword) {
                        $errors['confirm_password'] = 'Mật khẩu và xác nhận mật khẩu mới không khớp.';
                    }
                }
            }
            include "view/matkhau.php";
            break;
        case "cart":
            include "view/cart.php";
            break;
        case "lichsumua":
            $listdh = listone_donhang_user($_SESSION['user']['id']);
            if (isset($_SESSION['user']['id'])) {
                $user_id = $_SESSION['user']['id'];
                $user_info = listone_taikhoan($user_id);
            }
            include "view/lichsumua.php";
            break;

        case "chitietdonhang":
            $oneBill = listone_donhang($_GET['id']);
            include "view/chitietdonhang.php";
            break;

        case "checkout":
            if (isset($_POST['checkout'])) {
                $id = $_SESSION['user']['id'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['mail'];
                $tel = $_POST['tel'];
                $pttt = $_POST['checkout_payment_method'];
                $tong = $_POST['tong'];
                
                foreach ($_SESSION['cart'] as $cart) {
                    insert_donhang($name, $address, $email, $tel, $pttt, $tong, $cart[1], $cart[0], $id);
                }
                $_SESSION['cart'] = [];
            ?>
                <script>
                    Swal.fire({
                        title: "Thanh toán thành công!",
                        icon: "success",
                        confirmButtonText: "OK",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.php";
                        }
                    });
                </script>
<?php
            }
            include "view/checkout.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else include "view/home.php";

include "view/footer.php";
