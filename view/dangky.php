<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                        </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Đăng ký tài khoản</h1>
            </div>
        </div>
    </div>
    <div class="block" style="position: relative; left: 22%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Đăng ký</h3>
                            <form method="post" action="index.php?act=dangky">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input type="text" name="user" class="form-control" placeholder="Nhập tài khoản" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu" required>
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="password" name="repass" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                </div>
                                <input type="submit" class="btn btn-primary mt-4" style="position: relative; left: 40%;" value="Đăng ký" name="dangky">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site__body / end -->