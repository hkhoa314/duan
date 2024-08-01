<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                        </svg></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $ctsp['name'] ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content"><!-- .product__gallery -->
                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured"><button class="product-gallery__zoom"><svg width="24px" height="24px">
                                        <use xlink:href="css/images/sprite.svg#zoom-in-24"></use>
                                    </svg></button>
                                <div class="owl-carousel" id="product-image">
                                    <div class="product-image product-image--location--gallery"><!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="upload/product/<?php echo $ctsp['img'] ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="upload/product/<?php echo $ctsp['img'] ?>" alt=""></a></div>
                                    <div class="product-image product-image--location--gallery"><!--
                                --> <a href="css/images/products/product-16-3.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="css/images/products/product-16-3.jpg" alt=""></a></div>
                                    <div class="product-image product-image--location--gallery"><!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="css/images/products/product-16-4.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="css/images/products/product-16-4.jpg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .product__gallery / end --><!-- .product__info -->
                    <div class="product__info">
                        <div class="product__wishlist-compare"><button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist"><svg width="16px" height="16px">
                                    <use xlink:href="css/images/sprite.svg#wishlist-16"></use>
                                </svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px" height="16px">
                                    <use xlink:href="css/images/sprite.svg#compare-16"></use>
                                </svg></button></div>
                        <h1 class="product__name"><?php echo $ctsp['name'] ?></h1>
                        <div class="product__rating">
                            <div class="product__rating-stars">
                                <div class="rating">
                                    <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__rating-legend"><a href="#">7 Reviews</a><span>/</span><a href="#">Viết đánh giá</a></div>
                        </div>
                        <div class="product__description"><?php echo $ctsp['mota']; ?></div>

                    </div><!-- .product__info / end --><!-- .product__sidebar -->
                    <div class="product__sidebar">
                        <div class="product__availability">Availability: <span class="text-success">In
                                Stock</span></div>
                        <div class="product__prices"><?= $ctsp['price'] ?> VND</div><!-- .product__options -->
                        <div class="form-group product__option"><label class="product__option-label" for="product-quantity">Số Lượng</label>
                            <div class="product__actions">
                                <div class="product__actions-item">
                                    <div class="input-number product__quantity"><input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </div>
                                <div class="product__actions-item product__actions-item--addtocart"><button class="btn btn-primary btn-lg" <?php if (!isset($_SESSION['user'])) { ?> onclick='Swal.fire({
                                                                                                                                        title: "Vui lòng đăng nhập trước khi thêm sản phẩm!",
                                                                                                                                        icon: "info",
                                                                                                                                        confirmButtonText: "OK",
                                                                                                                                        }).then((result) => {
                                                                                                                                            if (result.isConfirmed) {
                                                                                                                                                window.location.href = "index.php?act=formdangnhap";
                                                                                                                                            }
                                                                                                                                        });' ; <?php } else { ?> onclick=" addToCart(<?php echo $ctsp['id'] ?>, 'add' )" <?php } ?>>Thêm vào giỏ hàng</button></div>
                            </div>
                        </div>
                    </div><!-- .product__end -->
                    <div class="product__footer">
                        <div class="product__tags tags">
                        </div>
                        <div class="product__share-links share-links">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs product-tabs--sticky">
                <div class="product-tabs__list">
                    <div class="product-tabs__list-body">
                        <div class="product-tabs__list-container container">
                            <a href="#tab-reviews" class="product-tabs__item" onclick="showTab('tab-reviews')">Bình luận</a>

                            <a href="#tab-description" class="product-tabs__item product-tabs__item--active" onclick="showTab('tab-description')">Mô tả</a>
                        </div>
                    </div>
                </div>
                <div class="product-tabs__content">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#binhluan").load("view/binhluanform.php", {
                                idpro: <?= isset($_REQUEST['idsp']) ? $_REQUEST['idsp'] : null ?>
                            });

                            $(".product-tabs__item").on("click", function() {
                                var tabId = $(this).attr("href");
                                showTab(tabId);
                            });

                            function showTab(tabId) {
                                $(".product-tabs__pane").removeClass("product-tabs__pane--active");
                                $(tabId).addClass("product-tabs__pane--active");
                            }
                        });
                    </script>

                    <div class="product-tabs__pane" id="tab-reviews">
                        <div class="binhluanclass" id="binhluan"></div>
                    </div>
                    <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                        <div class="typography">
                            <h3>Mô tả sản phẩm</h3>
                            <p><?php echo $ctsp['mota'] ?></p>
                        </div>
                    </div>
                </div>



            </div>
        </div><!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2" style="margin-top: 40px;">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Sản phẩm tương tự</h3>
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
                        foreach ($list as $sp) {
                        ?>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <div class="product-card__image product-image"><a href="index.php?act=chitietsanpham&idsp=<?= $sp['id'] ?>" class="product-image__body"><img class="product-image__img" src="upload/product/<?= $sp['img'] ?>" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="index.php?act=chitietsanpham&idsp=<?= $sp['id'] ?>"><?php echo $sp['name'] ?></a>
                                            </div>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                            <div class="product-card__prices"><?= $sp['price'] ?> VND</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button" <?php if (!isset($_SESSION['user'])) { ?> onclick='Swal.fire({
                                                                                                                                        title: "Vui lòng đăng nhập trước khi thêm sản phẩm!",
                                                                                                                                        icon: "info",
                                                                                                                                        confirmButtonText: "OK",
                                                                                                                                        }).then((result) => {
                                                                                                                                            if (result.isConfirmed) {
                                                                                                                                                window.location.href = "index.php?act=formdangnhap";
                                                                                                                                            }
                                                                                                                                        });' ; <?php } else { ?> onclick=" addToCart(<?php echo $sp['id'] ?>, 'add' )" <?php } ?>>Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div><!-- .block-products-carousel / end -->
    </div><!-- site__body / end -->
</div>
<script>
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