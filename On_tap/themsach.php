
<?php
    include_once 'function.php';
?>
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header bg-success text-white font-weight-bold">THÊM SÁCH MỚI</div>
            <form id="main-form" action="xulythemsach.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input class="form-control" type="text" id="txttensach" name="txttensach" value="">
                </div>
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input class="form-control" type="text" id="txtdongia" name="txtdongia" value="">
                </div>
                <div class="form-group">
                    <label for="" class="form-control-label">Chủ đề</label>
                    <select class="form-control custom-select" name="cbochude">
                        <option value="">---Chọn chủ đề ----</option>
                        <?php

                           
                        ?>
                        <option value="6">Kinh tế</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-control-label">Nhà xuất bản</label>
                    <select class="form-control custom-select" name="cbonhaxb">
                        <option value="">---Chọn nhà xuất bản ----</option>
                        <option value="1">Nhà xuất bản Trẻ</option>
                        <option value="2">Nhà xuất bản Giáo dục</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Ảnh bìa sách</label>
                    <input type="file" class="form-control-file" id="file_anh_bia" name="file_anh_bia">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-success" id="btnsubmit" name="btnsubmit" value="Thực hiện">
                </div>
            </form>
        </div>
    </div>
</div>