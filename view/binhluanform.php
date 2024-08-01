<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<style>
    h1 {
        font-size: 20px;
        color: red;
    }

    .demobinhluan {
        width: 100%;

    }

    .btbinhluan {
        background-color: #FFD333;
        border: none;
        color: #3D464C;
    }

    .btbinhluan:hover {
        background-color: #3D464C;
        border: 1px solid #fff;
        color: #fff;
    }

    .binhluan {
        width: 100%;
        height: 250px;
        overflow-y: auto;
        border: .1px solid #D3D6DA;
        padding: 10px auto;
    }

    tr.row-comment {
        width: 100%;
        margin-top: 15px;
        margin-bottom: 15px;
        height: 50px;
    }

    table td:nth-child(1) {
        width: 300px;
    }

    table td:nth-child(2) {
        width: 40%;
    }

    table td:nth-child(3) {
        width: 20%;
    }

    .noidung input {
        margin-top: 30px;
        width: 924px;
        height: 40px;
        border: .1px solid #D3D6DA;
        padding-left: 2%;

    }

    .gui {
        width: 924px;
        height: 40px;
        border: .1px solid #D3D6DA;
        border-top: none;
        background-color: #F5F6F7;
    }

    .gui input {
        height: 30px;
        border-top: none;
        margin-left: 85%;
        margin-top: 5px;
        background-color: #9BC6FA;
        color: #fff;
        border-radius: 3px;
    }

    .cmt {
        font-size: 12px;
        color: #4167B2;
        margin: -17px 0 0 10px;

    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
    <div class="demobinhluan">
        <div class="list">
            <form id="commentForm" action="' . $_SERVER['PHP_SELF'] . '" method="POST">
                <input type="hidden" name="idpro" value="' . $idpro . '">
                <div class="gui"></div>

            </form>
            <ul class="binhluan">
                <table>

                    <?php
                    foreach ($dsbl as $bl) {
                        echo '<tr class="row-comment"><td>' . $bl['username'] . '
                    
                    </td>';
                        echo '<td>' . $bl['noidung'] . '</td>';
                        echo '<td>' . $bl['ngaybinhluan'] . '</td></tr>';
                        echo '<td class="cmt">Thích . phản hồi</td></tr>';
                    }
                    ?>

                </table>


            </ul>
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                echo '
        <div id="commentFormWrapper">
            <form id="commentForm" action="' . $_SERVER['PHP_SELF'] . '" method="POST">
                <input type="hidden" name="idpro" value="' . $idpro . '">
                <div class="noidung"> <input type="text" name="noidung" placeholder="Viết bình luận..."></div>
                <div class="gui"> <input type="submit" name="guibinhluan" class="btbinhluan" value="Gửi bình luận"></div>
               
            </form>
        </div>
    ';
            } else {
                echo '<h1>*Bạn vui lòng đăng nhập để bình luận</h1>';
            }
            ?>
        </div>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        if (isset($_SESSION['user'])) {
            $iduser = $_SESSION['user']['id'];
        }
        $idpro = $_POST['idpro'];
        $ngaybinhluan = date('Y-m-d H:i:s');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>
</body>
<script>
    $(document).ready(function() {
        $("#commentForm").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    $("#binhluan").load("view/binhluanform.php", {
                        idpro: <?= isset($_REQUEST['idsp']) ? $_REQUEST['idsp'] : null ?>
                    });
                }
            });
        });
    });
</script>

</html>