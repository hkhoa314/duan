<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Thêm danh mục sản phẩm</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="tendm">Tên danh mục<span class="text-danger">*</span></label>
                    <input type="text" name="tendm" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="hinh">Hình ảnh</label>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group text-right mb-0">
                    <input class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="themmoi" value="Thêm">
                    <input type="reset" class="btn btn-danger waves-effect" value="Reset">
                    <a href="index.php?act=listdm" class="btn btn-secondary">Danh sách danh mục</a>
                </div>
            </form>
        </div>
    </div>
</div>