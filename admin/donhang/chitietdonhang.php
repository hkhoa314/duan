<!-- site__body -->
<style>
    .text-sm-left {

        margin-left: -100px;
        font-size: 17px;
    }

    .checkout__totals-header {
        height: 150px;
        font-size: 16px;
    }
</style>
<form class="site__body" method="post" action="index.php?act=checkout">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__title">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="inner">
        <div class="checkout block">
            <div class="container">
                <div class="row" style="border:2px solid #f0f0f0;">
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0" style="border: 0px;">
                            <div class="card-body">
                                <h3 id="h3" class="m-0 d-print-none">Mã đơn hàng <?php echo $_GET['id'] ?></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-3">
                                            <div class="clearfix">
                                            </div>
                                            <div class="row">
                                                <!-- end col -->
                                                <div class="col-4 offset-2">
                                                    <div class="text-sm-left">
                                                        <h5 class="font-16">Địa chỉ nhận hàng:</h5>
                                                        <address class="line-h-24">
                                                            Tên người nhận: <?php echo $oneBill['name'] ?><br>
                                                            Địa chỉ: <?php echo $oneBill['address'] ?><br>
                                                            SĐT: <?php echo $oneBill['tel'] ?>
                                                        </address>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <!-- <p><strong>Ngày đặt hàng: </strong><?php echo $oneBill['ngaydathang'] ?></p> -->

                                                    <form class="site__body" method="post" action="index.php?act=chitietdonhang&id=<?php echo $_GET['id'] ?>">
                                                        <input type="hidden" name="orderId" value="<?php echo $_GET['id']; ?>">
                                                        <p><strong>Tình trạng đơn hàng: </strong>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="0" <?php echo ($oneBill['status'] == 0) ? 'selected' : ''; ?>>Đang vận chuyển</option>
                                                                <option value="1" <?php echo ($oneBill['status'] == 1) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                                                <option value="2" <?php echo ($oneBill['status'] == 2) ? 'selected' : ''; ?>>Giao hàng thành công</option>
                                                            </select>
                                                        </p>
                                                        <button type="submit" class="btn btn-primary" id="luutrangthai">Lưu trạng thái</button>
                                                    </form>


                                                    <p><strong>Phương Thức thanh toán: <br> </strong><?php if ($oneBill['pttt'] == 1) { ?>
                                                            <span class="badge badge-success">Thanh toán trực tiếp</span>
                                                    </p>
                                                <?php } else { ?>   
                                                    <span class="badge badge-dark">Chuyển khoản</span></p>

                                                <?php } ?>

                                                </div>
                                                <div class="col-sm-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0" style="border: 0px;">
                            <div class="card-body">
                                <h2>Đơn hàng </h2>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                        <tr>
                                            <td><img src="../upload/product/<?= $oneBill['img'] ?>" style="width: 80px;border: 2px solid #f0f0f0;" alt=""></td>
                                            <td style="position: relative; left: 5px; bottom: 10px; width: 200px;"><?php echo $oneBill['tensp'] ?> <br> × <?php echo $oneBill['soluong'] ?></td>
                                            <td style="position: relative; right: 190px; top: 30px; color: red; width: 100px;"><?php echo $oneBill['soluong'] * $oneBill['giasp'] ?> VNĐ</td>
                                        </tr>
                                    </thead>
                                </table>
                                <p style="margin-bottom: 5px; font-size: 16px; "><b>Thời gian đặt hàng</b></p>
                                <?php echo $oneBill['ngaydathang'] ?>
                                <input type="hidden" value="<?= $cart_total ?>" name="tong">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- site__body / end -->
<script>
    checkterm = () => {
        if (document.getElementById('checkout-terms').checked == false) {
            document.getElementById('checkout-terms').checked = true;
            document.getElementById('checkout').className = 'btn btn-primary btn-xl btn-block';
            document.getElementById('checkout').disabled = false;
        } else {
            document.getElementById('checkout-terms').checked = false;
            document.getElementById('checkout').className = 'btn btn-secondary btn-xl btn-block';
            document.getElementById('checkout').disabled = true;
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   $(document).ready(function() {
    $("form.site__body").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'index.php?act=chitietdonhang&id=<?php echo $_GET['id'] ?>',
            data: formData,
            success: function(response) {
                // Thực hiện mã JavaScript chỉ khi yêu cầu AJAX thành công
                Swal.fire({
                    title: "Lưu trạng thái thành công",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php?act=listbill';
                    }
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
</script>