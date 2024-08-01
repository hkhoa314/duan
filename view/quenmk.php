        <!-- site__body -->
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Đăng nhập</h1>
                    </div>
                </div>
            </div>
            <div class="block" style="position: relative; left: 22%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column">
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card-body">
                                    <h3 class="card-title">Khôi phục mật khẩu</h3>
                                    <form action="index.php?act=quenmk" method="post">
                                        <div class="form-group">
                                            <label>Tài khoản</label> 
                                            <input type="text" name="user" class="form-control" placeholder="Nhập tài khoản" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label> 
                                            <input type="email" name="email" class="form-control" placeholder="Nhập mật khẩu" required> 
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-4" style="position: relative; left: 35%;" value="Khôi phục" name="khoiphuc">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- site__body / end -->