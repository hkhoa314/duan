<!-- site__body -->
<div class="site__body" id="cartbody">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item"><a href="index.php?act=cart">Giỏ hàng</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Giỏ hàng</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <?php
            if ($_SESSION['cart'] != null) {
            ?>
                <table class="cart__table cart-table">
                    <thead class="cart-table__head">
                        <tr class="cart-table__row">
                            <th class="cart-table__column cart-table__column--image">Ảnh sản phẩm</th>
                            <th class="cart-table__column cart-table__column--product">Tên sản phẩm</th>
                            <th class="cart-table__column cart-table__column--price">Giá</th>
                            <th class="cart-table__column cart-table__column--quantity">Số lượng</th>
                            <th class="cart-table__column cart-table__column--total">Tổng</th>
                            <th class="cart-table__column cart-table__column--remove"></th>
                        </tr>
                    </thead>
                    <tbody class="cart-table__body">
                        <?php
                        $cart_total = 0;
                        foreach ($_SESSION['cart'] as $cart) {
                            $sp = listone_sanpham($cart[0]);
                            $kho = tonkho($cart[0]);
                        ?>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image">
                                        <a href="#" class="product-image__body">
                                            <img class="product-image__img" src="upload/product/<?php echo $sp['img'] ?>" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="#" class="cart-table__product-name"><?php echo $sp['name'] ?></a>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price"><?php echo $sp['price'] ?> VNĐ</td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity" style="width: 130px;">
                                    <?php
                                    if ($kho['kho'] <= $cart[1]) {
                                    ?>
                                        <div style="position: relative; top: -20px; width: 130px; font-size: 12px;">Đã đặt tối đa số sản phẩm còn trong kho</div>
                                        <div class="input-number" style="position: relative; top: -15px;"><input class="form-control input-number__input" type="number" min="1" value="<?php echo $cart[1] ?>">
                                            <div class="input-number__add" style="pointer-events: none; opacity: 0.4;"></div>
                                            <div class="input-number__sub" <?php if ($cart == 1) {
                                                                                echo "onclick='delCart($idsp)'";
                                                                            } else { ?>onclick="decre(<?= $sp['id'] ?>);">
                                            <?php
                                                                            }; ?></div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="input-number" style="position: relative; top: 3px; width: 130px"><input class="form-control input-number__input" type="number" min="1" value="<?php echo $cart[1] ?>">
                                            <div class="input-number__add" onclick="incre(<?= $sp['id'] ?>)"></div>
                                            <div class="input-number__sub" onclick="decre(<?= $sp['id'] ?>)"></div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total"><?php echo $cart[1] * $sp['price'] ?> VNĐ</td>
                                <td class="cart-table__column cart-table__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon" onclick="delCart(<?php echo $sp['id'] ?>)">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="css/images/sprite.svg#cross-12"></use>
                                        </svg></button>
                                </td>
                            </tr>
                        <?php
                            $cart_total += $sp['price'] * $cart[1];
                        }
                        ?>
                    </tbody>
                </table>
                <div class="row justify-content-end pt-5">
                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Tổng tiền</h3>
                                <table class="cart__totals">
                                    <thead class="cart__totals-header">
                                        <tr>
                                            <th>Tổng tiền sản phẩm</th>
                                            <td><?php echo $cart_total ?> VNĐ</td>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__totals-body">
                                        <tr>
                                            <th>Phí ship</th>
                                            <td>25000 VNĐ</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="cart__totals-footer">
                                        <tr>
                                            <th>Tổng tiền</th>
                                            <td><?php
                                                if ($cart_total != 0) {
                                                    echo $cart_total + 25000;
                                                } else echo 0;
                                                ?> VNĐ</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <?php
                                if (count($_SESSION['cart']) == 0) {
                                ?>
                                    <button class="btn btn-secondary btn-xl btn-block cart__checkout-button" disabled>Thanh toán</button>
                                <?php
                                } else {
                                ?>
                                    <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="index.php?act=checkout">Thanh toán</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div style="height: 200px; line-height: 200px; font-size: 20px; text-align: center;">Hiện chưa có sản phẩm nào được thêm vào giỏ hàng</div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- site__body / end -->
<script>
    incre = (id) => {
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/morecart.php?act=incre&id=" + id,
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {

            }
        }).responseText;
        document.getElementById("cartbody").innerHTML = result;
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/headerCart.php?act=abcd",
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {

            }
        }).responseText;
        document.getElementById("dropdowncart").innerHTML = result;
    }

    decre = (id) => {
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/morecart.php?act=decre&id=" + id,
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {

            }
        }).responseText;
        document.getElementById("cartbody").innerHTML = result;
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/headerCart.php?act=abcd",
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {

            }
        }).responseText;
        document.getElementById("dropdowncart").innerHTML = result;
    }

    delCart = (id) => {
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/morecart.php?act=del&id=" + id,
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {
                Swal.fire({
                    title: "Thành công!",
                    icon: "success"
                });
            }
        }).responseText;
        document.getElementById("cartbody").innerHTML = result;
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/headerCart.php?act=abcd",
            param: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "html",
            async: false,
            success: function(data) {
                Swal.fire({
                    title: "Thành công!",
                    icon: "success"
                });
            }
        }).responseText;
        document.getElementById("dropdowncart").innerHTML = result;
        return result;
    }
</script>