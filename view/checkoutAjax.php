<?php
session_start();
include "../model/sanpham.php";
include "../model/pdo.php";
include "../model/cart.php";

if (isset($_GET['v'])) {
    $v = voucher($_GET['v']);
    if (is_array($v)) {
        $sale = $v['giam'];
    }
}
?>
<!-- site__body -->
<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__title">
            <h1>Thanh toán</h1>
        </div>
    </div>
</div>
<div class="checkout block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="card mb-lg-0">
                    <div class="card-body">
                        <h3 class="card-title">Hóa đơn</h3>
                        <div class="form-group"><label for="name">Họ tên</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['user']['name'] ?>" name="name">
                        </div>
                        <div class="form-group"><label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['user']['address'] ?>" name="address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><label for="mail">Địa chỉ mail</label>
                                <input type="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>" name="mail">
                            </div>
                            <div class="form-group col-md-6"><label for="tel">Điện thoại</label>
                                <input type="text" class="form-control" value="<?= $_SESSION['user']['tel'] ?>" name="tel">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    Voucher <input id="voucher" type="text" class="form-control" placeholder="Nhập mã giảm giá" style="display: inline-block; width: 400px;">
                    <div onclick="checkvoucher(document.getElementById('voucher').value)" class="btn btn-primary">Áp dụng</div>
                </div>
                <?php
                if ($_GET['v'] != '') {
                    if (is_array($v)) {
                ?>
                        <div class="form-group">Áp mã thành công</div>
                    <?php
                    } else {
                    ?>
                        <div class="form-group">Mã không tồn tại</div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                <div class="card mb-0">
                    <div class="card-body">
                        <h3 class="card-title">Đơn hàng của bạn</h3>
                        <table class="checkout__totals">
                            <thead class="checkout__totals-header">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tổng cộng</th>
                                </tr>
                            </thead>
                            <tbody class="checkout__totals-products">
                                <?php
                                $cart_total = 0;
                                foreach ($_SESSION['cart'] as $cart) {
                                    $sp = listone_sanpham($cart[0]);
                                ?>
                                    <tr>
                                        <td><?php echo $sp['name'] ?> × <?php echo $cart[1] ?></td>
                                        <td><?php echo $cart[1] * $sp['price'] ?> VNĐ</td>
                                    </tr>
                                <?php
                                    $cart_total += $sp['price'] * $cart[1];
                                }
                                ?>
                            </tbody>
                            <tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>Tổng phụ</th>
                                    <td><?php echo $cart_total ?> VNĐ</td>
                                </tr>
                                <tr>
                                    <th>Phí ship</th>
                                    <td>25000 VNĐ</td>
                                </tr>
                                <?php
                                if (isset($sale)) {
                                ?>
                                    <tr>
                                        <th>Mã giảm giá</th>
                                        <td>- <?php echo floor($cart_total / $sale) ?> VNĐ</td>
                                    </tr>
                                <?php
                                    $cart_total -= $cart_total / $sale;
                                }
                                ?>
                            </tbody>
                            <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>Tổng cộng</th>
                                    <td><?php echo floor($cart_total) + 25000 ?> VNĐ</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="payment-methods">
                            <ul class="payment-methods__list">
                                <li class="payment-methods__item payment-methods__item--active">
                                    <label class="payment-methods__item-header">
                                        <span class="payment-methods__item-radio input-radio">
                                            <span class="input-radio__body">
                                                <input class="input-radio__input" name="checkout_payment_method" type="radio" value="1" checked="checked">
                                                <span class="input-radio__circle"></span>
                                            </span>
                                        </span>
                                        <span class="payment-methods__item-title">Thanh toán bằng tiền mặt</span>
                                    </label>
                                    <div class="payment-methods__item-container">
                                        <div class="payment-methods__item-description text-muted">Thanh toán khi giao hàng.</div>
                                    </div>
                                </li>
                                <li class="payment-methods__item">
                                    <label class="payment-methods__item-header">
                                        <span class="payment-methods__item-radio input-radio">
                                            <span class="input-radio__body">
                                                <input class="input-radio__input" name="checkout_payment_method" value="2" type="radio">
                                                <span class="input-radio__circle"></span>
                                            </span>
                                        </span>
                                        <span class="payment-methods__item-title">Chuyển khoản</span>
                                    </label>
                                    <div class="payment-methods__item-container">
                                        <div class="payment-methods__item-description text-muted">Thực hiện thanh
                                            toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng
                                            ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của
                                            bạn sẽ không được vận chuyển cho đến khi tiền đã được xóa trong tài
                                            khoản của chúng tôi.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <input type="hidden" value="<?= $cart_total ?>" name="tong">
                        <div class="checkout__agree form-group">
                            <div class="form-check" onclick="checkterm()">
                                <span class="form-check-input input-check">
                                    <span class="input-check__body">
                                        <input class="input-check__input" type="checkbox" id="checkout-terms">
                                        <span class="input-check__box"></span>
                                        <svg class="input-check__icon" width="9px" height="7px">
                                            <use xlink:href="css/images/sprite.svg#check-9x7"></use>
                                        </svg>
                                    </span>
                                </span>
                                <label class="form-check-label" for="checkout-terms">Tôi đã đọc và đồng ý với các điều khoản và điều kiện của trang
                                    web*</label>
                            </div>
                        </div><button type="submit" id="checkout" name="checkout" class="btn btn-secondary btn-xl btn-block" disabled>Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site__body / end -->