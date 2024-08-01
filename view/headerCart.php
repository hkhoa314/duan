<?php
session_start();
include "../model/pdo.php";
include "../model/cart.php";
include "../model/sanpham.php";

if ($_GET['act'] == 'add') {
    $check = true;
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i][0] == $_GET['id']) {
            $_SESSION['cart'][$i][1]++;
            $check = false;
        };
    }
    if ($check) {
        insert_giohang($_GET['id']);
    }
} else if ($_GET['act'] == 'del') {
    del_giohang($_GET['id']);
};

$soluong = 0;
foreach ($_SESSION['cart'] as $cart) {
    $soluong += $cart[1];
}
$cart_total = 0;
?>
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
            <div class="dropcart__buttons"><a class="btn btn-secondary" href="index.php?act=cart">Xem giỏ hàng</a> <a class="btn btn-primary" href="index.php?act=checkout">Đơn hàng</a>
            </div>
        </div>
    </div><!-- .dropcart / end -->
</div>