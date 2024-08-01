<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<style>
    .slide {
        margin-top: 40px;
    }

    .slide img {
        height: 380px;


    }

    .block-products__list-item {
        width: 100%;
        height: 100%;
    }

    .block-header__titles {
        color: #DD0000;
    }

    .block-products--layout--large-first {
        margin-top: 100px;
    }

    .block-products__body {

        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, 1fr);

        grid-gap: 20px;
    }

    .block-products__featured-item {
        width: 266.5px;
        height: 430px;
    }

    .product-card:before {
        border: none;
    }

    .product-card-hoverable .product-card__actions {
        display: none;
    }

    .product-card-hoverable:hover .product-card__actions {
        display: block;
    }

    .block-header__titles img {
        width: 50px;
        margin: -15px 0 0 -10px;
    }

    .box-service {
        width: 1120px;
        height: 350px;
        margin: auto;
        overflow: hidden;
        margin-top: 70px;
        display: flex;
        position: relative;
    }

    .box-service .box-img img {
        height: 350px;
        width: 95%;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .btn-sv {
        position: absolute;
        z-index: 9999;
        top: 80%;
        left: 10%;
        background-color: #FFD333;
        width: 350px;
        height: 45px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
    }

    .btn-sv:hover {
        background-color: #fff;
        /* color: #FFD333; */
        border: 1px solid #292929;
    }

    .box-sv {
        width: 50%;
        height: 350px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        overflow: hidden;
    }

    .box-sv img {
        width: 100%;
        height: 100%;
        border-radius: 7px;
    }

    .box-product {
        margin-top: 100px;
    }

    /*  */
    .box-product .product-card {
        position: relative;
        height: 400px;
    }

    .box-product .product-card__buttons {
        /* display: none; */
        position: absolute;
        bottom: 10px;
        left: 10px;
        z-index: 1;
    }

    /* .product-card:hover .product-card__buttons {
    display: block;
} */
    .box-product .product-card__prices {
        margin-top: -80px;
        margin-left: 20px;
    }

    .block-header__title img {
        width: 20px;
    }

    .product-card__badge.product-card__badge--new.hot {
        background-color: #DE0000;
    }
</style>
<!-- site__body -->
<div class="site__body">
    <!-- .block-features -->
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="slide">
                <img src="css/images/banners/banner.webp" class="banner" alt="">
            </div>
            <div class="slide">
                <img src="css/images/banners/banner2.png" class="banner" alt="">
            </div>
            <div class="slide">
                <img src="css/images/banners/banner3.png" class="banner" alt="">
            </div>
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-free-delivery-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Miễn phí vận chuyển</div>
                        <div class="block-features__subtitle">Từ đơn 50k trở lên</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-24-hours-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Hỗ trợ 24/7</div>
                        <div class="block-features__subtitle">Hỗ trợ mọi lúc</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-payment-security-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% bảo mật</div>
                        <div class="block-features__subtitle">An toàn tuyệt đối</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-tag-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Ưu đãi hấp dẫn</div>
                        <div class="block-features__subtitle">Giảm giá đến 90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .block-features / end -->
    <div class="block block--highlighted block-categories block-categories--layout--classic">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Danh mục</h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                <?php
                foreach ($listdm as $dm) {
                ?>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="index.php?act=danhmuc&&id=<?php echo $dm['id'] ?>"><img src="upload/category/<?php echo $dm['img'] ?>" alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="index.php?act=danhmuc&&id=<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></a></div>
                                <div class="category-card__all"><a href="index.php?act=danhmuc&&id=<?php echo $dm['id'] ?>">Hiển thị tất cả</a></div>
                                <div class="category-card__products">572 Products</div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">

                <h3 class="block-header__titles">Sản phẩm Hot <img src="css/images/products/flashsale-hot.png" alt=""></h3>
                <div class="block-header__divider"></div>
                <div class="block-header__arrows-list"><button class="block-header__arrow block-header__arrow--left" type="button"><svg width="7px" height="11px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg></button> <button class="block-header__arrow block-header__arrow--right" type="button"><svg width="7px" height="11px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg></button></div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <?php
                    foreach ($sphot as $sp) {
                        extract($sp);
                        $hinh = "upload/product/" . $img;
                        $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
                    ?>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new hot">Hot</div>
                                    </div>
                                    <div class="product-card__image product-image"><a href="<?php echo $linksp ?>" class="product-image__body"><img class="product-image__img" src="<?php echo $hinh ?>" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="<?php echo $linksp; ?>"><?php echo $name ?></a></div>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In
                                                Stock</span></div>
                                        <div class="product-card__prices"><?php echo $price; ?> VND</div>
                                        <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" <?php if (!isset($_SESSION['user'])) { ?> 
                                                                                                                                    onclick='Swal.fire({
                                                                                                                                        title: "Vui lòng đăng nhập trước khi thêm sản phẩm!",
                                                                                                                                        icon: "info",
                                                                                                                                        confirmButtonText: "OK",
                                                                                                                                        }).then((result) => {
                                                                                                                                            if (result.isConfirmed) {
                                                                                                                                                window.location.href = "index.php?act=formdangnhap";
                                                                                                                                            }
                                                                                                                                        });';
                                                                                                                                    <?php } else { ?> onclick=" addToCart(<?php echo $id ?>, 'add' )" <?php } ?> type="button" style="font-size: 12px;">Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    };
                    ?>
                </div>
            </div>
        </div>
    </div><!-- .block-products-carousel / end -->
    <!-- .block-products -->
    <div class="container box-product">
        <div class="block-header">
            <h3 class="block-header__title">Sản Phẩm Mới <img src="css/images/products/menu_icon_3.png" alt=""></h3>
            <div class="block-header__divider"></div>
        </div>


        <div class="block-products__body">
            <?php

            $i = 0;
            foreach ($newsp as $sp) {
                extract($sp);
                $hinh = "upload/product/" . $img;
                $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
            ?>
                <div class="block-products-carousel__column ">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--hidden-actions">
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--new">New</div>
                            </div>
                            <div class="product-card__image product-image"><a href="<?php echo $linksp ?>" class="product-image__body"><img class="product-image__img" src="<?php echo $hinh ?>" alt=""></a></div>
                            <div class="product-card__info">
                                <div class="product-card__name"><a href="' . $linksp . '"><?php echo $name ?></a></div>
                            </div>
                            <div class="product-card__actions">

                                <div class="product-card__prices" style="position: relative; top: -10px;"><?php echo $price ?> VND</div>


                                <div class="product-card__buttons atc"><button class="btn btn-primary product-card__addtocart" <?php if (!isset($_SESSION['user'])) { ?> 
                                                                                                                                    onclick='Swal.fire({
                                                                                                                                        title: "Vui lòng đăng nhập trước khi thêm sản phẩm!",
                                                                                                                                        icon: "info",
                                                                                                                                        confirmButtonText: "OK",
                                                                                                                                        }).then((result) => {
                                                                                                                                            if (result.isConfirmed) {
                                                                                                                                                window.location.href = "index.php?act=formdangnhap";
                                                                                                                                            }
                                                                                                                                        });';
                                                                                                                                    <?php } else { ?> onclick=" addToCart(<?php echo $id ?>, 'add' )" <?php } ?> type="button" style="font-size: 12px;">Thêm vào giỏ hàng
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i += 1;
            }

            ?>

        </div>

    </div>



</div><!-- .block-products / end -->
</div><!-- site__body / end -->




<script>
    // slide
    let indexs = 0;
    const slideShow = () => {
        const mySlide = document.querySelectorAll('.slide');
        for (let i = 0; i < mySlide.length; i++) {
            mySlide[i].style.display = "none";
        }
        indexs++;

        if (indexs > mySlide.length - 1) {
            indexs = 0;
        }
        mySlide[indexs].style.display = "block";
        setTimeout(slideShow, 2000);
    }
    slideShow();

    addToCart = (id, act) => {
        var result = $.ajax({
            type: "POST",
            url: "http://localhost/Duan1/view/headerCart.php?act=" + act + "&id=" + id,
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