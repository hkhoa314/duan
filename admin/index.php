<?php
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/donhang.php";
include "../model/thongke.php";
include "../model/binhluan.php";
include "header.php";

$sum_bl = pdo_query_one("SELECT COUNT(*) as tongbl FROM binhluan");
$sum_dh = pdo_query_one("SELECT SUM(soluong) as tongdh FROM donhang");
$sum_tk = pdo_query_one("SELECT COUNT(*) as tongtk FROM taikhoan");
$sum_sp = pdo_query_one("SELECT SUM(kho) as tongsp FROM sanpham");

if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {
        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/product/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                echo "<script type='text/javascript'>
                        alert('Thêm thành công!');
                        window.location.href='index.php?act=listsp'
                    </script>";
            };
            $listdanhmuc = listall_danhmuc();
            include "sanpham/add.php";
            break;
        case "listsp":
            $listProduct = listall_sanpham();
            include "sanpham/list.php";
            break;
        case "chitietsanpham":
            $product = listone_sanpham($_GET['id']);
            $binhluan = listall_binhluan($_GET['id']);
            include "sanpham/chitietsanpham.php";
            break;
        case "editsp":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/product/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($_GET['id'], $tensp, $giasp, $hinh, $mota, $iddm);
?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Sửa thành công!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=listsp'
                        }
                    });
                </script>;
            <?php

            }
            $listdanhmuc = listall_danhmuc();
            $product = listone_sanpham($_GET['id']);
            include "sanpham/edit.php";
            break;
        case "delsp":
            delete_sanpham($_GET["id"]);
            header("Location: index.php?act=listsp");
            break;
        case "adddm":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/category/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_danhmuc($tendm, $hinh);
            ?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Thêm thành công",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=listdm'
                        }
                    });
                </script>;
            <?php

            };
            include "danhmuc/add.php";
            break;
        case "listdm":
            $list_danhmuc = listall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "editdm":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tendm = $_POST["tendm"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/category/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_danhmuc($_GET['id'], $tendm, $hinh);
                insert_danhmuc($tendm, $hinh);
            ?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Sửa thành công!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=listdm'
                        }
                    });
                </script>;
            <?php

            }
            $danhmuc = listone_danhmuc($_GET['id']);
            include "danhmuc/edit.php";
            break;
        case "deldm":
            delete_danhmuc($_GET["id"]);
            header("Location: index.php?act=listdm");
            break;
        case "addtk":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tentk = $_POST["tentk"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/avatar/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $tel = $_POST["tel"];
                $role = $_POST["role"];
                insert_taikhoan($tentk, $user, $pass, $email, $address, $hinh, $tel, $role);
            ?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Thêm thành công!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=listtk'
                        }
                    });
                </script>;


            <?php

            }
            include "taikhoan/add.php";
            break;
        case "listtk":
            $listtk = listall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "chitiettk":
            $tk = listone_taikhoan($_GET['id']);
            include "taikhoan/chitiettk.php";
            break;
        case "edittk":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tentk = $_POST["tentk"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/avatar/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                $tel = $_POST["tel"];
                $status = $_POST["status"];
                $role = $_POST["role"];
                update_taikhoan($_GET['id'], $tentk, $user, $pass, $email, $address, $hinh, $tel, $status, $role);
            ?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: "Cập nhật thành công",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php?act=listtk'
                        }
                    });
                </script>;


                <?php


            }
            $tk = listone_taikhoan($_GET['id']);
            include "taikhoan/edit.php";
            break;
        case "listbill":
            $listdh = listall_donhang();
            include "donhang/list.php";
            break;

        case "chitietdonhang":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $newStatus = $_POST['status'];
                $sql = "UPDATE donhang SET status = '$newStatus' WHERE id = " . $_GET['id'];
                pdo_execute($sql);
                if ($newStatus == 2) {
                    $email = pdo_query_one("SELECT mail FROM donhang WHERE id = ".$_GET['id']);
                    $mail = new PHPMailer(true);

                    //Server settings
                    $mail->isSMTP();                              //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;             //Enable SMTP authentication
                    $mail->Username   = 'vuvtkute2705@gmail.com';   //SMTP write your email
                    $mail->Password   = 'edagonvbdmizaqea';      //SMTP password
                    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
                    $mail->Port       = 465;

                    //Recipients
                    $mail->setFrom('vuvtkute2705@gmail.com', "Mailer"); // Sender Email and name
                    $mail->addAddress($email['mail']);     //Add a recipient email  
                    // $mail->addReplyTo($email, "Nguyễn Vũ"); // reply to sender email

                    //Content
                    $mail->isHTML(true);               //Set email format to HTML
                    $mail->Subject = "Thank you!";   // email subject headings
                    $mail->Body    = "Cảm ơn quý khách hàng đã mua hàng tại cửa hàng STROYKAI!"; //email message

                    // Success sent message alert
                    $mail->send();
                }
            }
            $oneBill = listone_donhang($_GET['id']);
            include "donhang/chitietdonhang.php";
            break;


        case "thongke":
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case "bieudo":
            $banchay = top5_daban();
            $view = top5_view();
            include "thongke/chart.php";
            break;
    }
} else include "home.php";

include "footer.php";
?>